<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-08 01:45:33
  from "/Users/zhangbingbing/Work/nginx/html/yiidemo/views/user/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_577f05bd1ae485_04899218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54b05133f36bbc69cfdd26b754759963af66bfb8' => 
    array (
      0 => '/Users/zhangbingbing/Work/nginx/html/yiidemo/views/user/index.tpl',
      1 => 1467942279,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout/main.tpl' => 1,
  ),
),false)) {
function content_577f05bd1ae485_04899218 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1624013493577f05bd1adda4_14814944', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:../layout/main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_1624013493577f05bd1adda4_14814944 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="jumbotron">
    <h1>Congratulations!</h1>
    <p class="lead">You have successfully created your Yii-powered application.</p>
    <div class="body-content">
        <table class="table">
            <tr><th>id</th><th>name</th><th>password</th><th>操作</th></tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['user']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['password'];?>
</td>
                <td>
                    <a href="/user/detail?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">详情</a>
                    <a href="/user/delete?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">删除</a>
                </td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </table>
        <a class="btn btn-default" href="/user/show" role="button">Add User</a>
    </div>
</div>
<?php
}
}
/* {/block 'body'} */
}
