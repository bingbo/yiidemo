<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-02 12:11:28
  from "/Users/zhangbingbing/Work/nginx/html/yiidemo/demo/views/index/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_5777af70e034d3_02506045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e832fda3687b48a550c326240f09b9752c0e04dc' => 
    array (
      0 => '/Users/zhangbingbing/Work/nginx/html/yiidemo/demo/views/index/index.tpl',
      1 => 1467460571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5777af70e034d3_02506045 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div>
<table>
<tr><th>id</th><th>name</th><th>password</th></tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['user']->value) {
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['password'];?>
</td></tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
</div>
<?php }
}
