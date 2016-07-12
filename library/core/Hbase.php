<?php
namespace app\library\core;

require(\Yii::getAlias('@app') . '/vendor/hbase/HbaseClient.php');

ini_set('display_error', E_ALL);
		 
 
use \Thrift\Protocol\TBinaryProtocol;
use \Thrift\Transport\TSocket;
use \Thrift\Transport\TSocketPool;
use \Thrift\Transport\TFramedTransport;
use \Thrift\Transport\TBufferedTransport;
use \Hbase\HbaseClient;
use Yii;

 
class Hbase 
{
	private $host;
	private	$port;
	private $socket;
	private $transport;
	private $protocol;
	private $client;
    private static $_instance = null;

	private function __construct()
	{
		//引入接口配置
		$this->host = Yii::$app->params['hbaseConf']['THRIFT_IP'];
		$this->port = Yii::$app->params['hbaseConf']['THRIFT_PORT'];
		//创建实例
		$this->socket = new TSocket($this->host, $this->port);
        $this->socket->setSendTimeout(100000);
		$this->socket->setRecvTimeout(100000);
		$this->transport = new TBufferedTransport($this->socket);
		$this->protocol = new TBinaryProtocol($this->transport);
		$this->client = new HbaseClient($this->protocol);
	}

    public static function getInstance(){
        if(empty(self::$_instance)){
            self::$_instance = new Hbase();
        }
        return self::$_instance;
    }

	public function showTables()
	{
		$this->transport->open();
		$tables = $this->client->getTableNames();
		sort($tables);
		$this->transport->close();
		return $tables;
	}


	public function deleteTable($tableName)
	{
		$this->transport->open();
		if($this->client->isTableEnabled($tableName)) {
			$this->client->disableTable($tableName);
		}
		$this->client->deleteTable($tableName);
		$this->transport->close();
	}

	public function createTable($tableName, $columns)
	{
		$this->transport->open();
		$columns_f = array();
		foreach ($columns as $column) {
			if (is_array($column)) {
				$columns_f[] = new \Hbase\ColumnDescriptor($column);
			}
		}
		try {
		    $this->client->createTable($tableName, $columns_f);
		} catch (AlreadyExists $ae) {
			$this->transport->close();
		    //$this->logger->write_log('ERROR', "hbase error: {$ae->message}");
		    return false;
		}
		$this->transport->close();
		return true;
	}

	public function descTable($tableName)
	{
		$this->transport->open();
		try{
			$descriptors = $this->client->getColumnDescriptors($tableName);
			asort($descriptors);
			$result = array();
			foreach ($descriptors as $col) {
				$item = array();
				$item["column"] =  $col->name;
				$item["maxVer"] =  $col->maxVersions;
				$result[] = $item;
			}
		} catch (AlreadyExists $ae) {
			$this->transport->close();
		    $this->logger->write_log('ERROR', "hbase error: {$ae->message}");
		    return null;
		}
		$this->transport->close();
		return $result;
	}

	public function insertValues($tableName, $data)
	{
		$this->transport->open();

		//$rows= array('timestamp'=>$timestamp,'columns'=>array('txt:col1'=>$col1,'txt:col2'=>$col2,'txt:col3'=>$col3));
		//$records = array(rowkey=>$rows,...);
		try {
		    $batchrecord= array();
			foreach ($data as $rowkey => $rows) {
				//$timestamp= $rows['timestamp'];
				$columns= $rows['columns'];
				// 生成一条记录
				$record= array();

				foreach($columns as $column => $value) {
					$col= new \Hbase\Mutation(array('column'=>$column,'value'=>$value));
					array_push($record, $col);
				}
				// 加入记录数组
				$batchTmp= new \Hbase\BatchMutation(array('row'=>$rowkey,'mutations'=>$record));
				array_push($batchrecord, $batchTmp);
			}
		
			$this->client->mutateRows($tableName, $batchrecord, array());

		} catch (AlreadyExists $ae) {
			$this->transport->close();
		    $this->logger->write_log('ERROR', "hbase error: {$ae->message}");
		    return false;
		}
		$this->transport->close();
		return true;
	}

  public function getVer($tableName, $row, $column, $numVersions, $attributes)
  {
		$this->transport->open();
		$result=$this->client->getVer($tableName, $row, $column, $numVersions, $attributes);
		 $this->transport->close();
    		return $result;
  }


	public function get($tableName, $rowkey, $col_name, $attributes = array())
	{
		$this->transport->open();
		$arr = $this->client->get($tableName, $rowkey, $col_name, $attributes);
		$this->transport->close();
		return $arr;
	}

	public function getRow($tableName, $rowKey, $attributes = array())
	{ 
		$this->transport->open();
		$arr = $this->client->getRow($tableName, $rowKey, $attributes);  
		$this->transport->close();
		return $this->object_to_array($arr);
	}
        public function scannerOpenWithPrefix($tableName, $startAndPrefix, $columns, $attributes)
        {
                $this->transport->open();
                $scanner = $this->client-> scannerOpenWithPrefix($tableName, $startAndPrefix, $columns, $attributes);
                try {
                                while (true) {
                                        $record = $this->client->scannerGet($scanner);
                                        if ($record == NULL) {
                                                break;
                                        }
                                        $recordArray = array();
                                        foreach($record as $TRowResult) {
                                                $row = $TRowResult->row;
                                                $column = $TRowResult->columns;
                                                foreach($column as $family_column=>$cellVal) {
                                                        $recordArray[$family_column] = $cellVal;
                                                }
                                                $resultArray[$row] = $recordArray;
                                        }
                                }
                                $this->client->scannerClose($scanner);
                } catch ( NotFound $nf ) {
                        $this->client->scannerClose($scanner);
                        $this->logger->write_log('ERROR', "Scanner finished");
                }
                $this->transport->close();

                return $resultArray;                

        }
	public function select($tableName, $startKey, $endKey, $columns, $limit = -1,$attributes = array()) {
		$this->transport->open();
		$resultArray = array();
		$scanner = $this->client->scannerOpenWithStop($tableName, $startKey, $endKey, $columns, $attributes);
	
		try {
			if($limit < 0) {
				while (true) {
					$record = $this->client->scannerGet($scanner);
					if ($record == NULL) {
						break;
					}
					$recordArray = array();
					foreach($record as $TRowResult) {
						$row = $TRowResult->row;
						$column = $TRowResult->columns;
						foreach($column as $family_column=>$cellVal) {
							$recordArray[$family_column] = $cellVal;
						}
						$resultArray[$row] = $recordArray;
					}
				}
			} else {
				$record = $this->client->scannerGetList($scanner, $limit);
				$recordArray = array();
                                foreach($record as $TRowResult) {
                                       $row = $TRowResult->row;
                                       $column = $TRowResult->columns;
                                       foreach($column as $family_column=>$cellVal) {
                                                $recordArray[$family_column] = $cellVal;
                                       }
                                       $resultArray[$row] = $recordArray;
                                }	
				$this->client->scannerClose($scanner);
			}
		} catch ( NotFound $nf ) {
			$this->client->scannerClose($scanner);
			$this->logger->write_log('ERROR', "Scanner finished");
		}
		$this->transport->close();

		return $resultArray;
	}
	public function deleteAllRow($tableName, $row)
	{
		$this->transport->open();
                $this->client->deleteAllRow($tableName, $row, $attributes);
                $this->transport->close();
	}
	private function object_to_array($obj)
	{
		$_arr = is_object($obj)? get_object_vars($obj) :$obj;
		foreach ($_arr as $key => $val){
			$val=(is_array($val)) || is_object($val) ? $this->object_to_array($val) :$val;
			$arr[$key] = $val;
		}
		return $arr;
	}
}
