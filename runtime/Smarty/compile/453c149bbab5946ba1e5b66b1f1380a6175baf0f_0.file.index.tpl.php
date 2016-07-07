<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-07 08:19:36
  from "/Users/zhangbingbing/Work/nginx/html/yiidemo/views/index/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_577e1098bb6d57_27509083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '453c149bbab5946ba1e5b66b1f1380a6175baf0f' => 
    array (
      0 => '/Users/zhangbingbing/Work/nginx/html/yiidemo/views/index/index.tpl',
      1 => 1467879571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout/main.tpl' => 1,
  ),
),false)) {
function content_577e1098bb6d57_27509083 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_671980733577e1098bb5e03_80781312', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:../layout/main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_671980733577e1098bb5e03_80781312 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="jumbotron">
    <h1>Congratulations!</h1>
    <p class="lead">You have successfully created your Yii-powered application.</p>
    <div class="body-content">
        
    </div>
</div>
<?php
}
}
/* {/block 'body'} */
}
