<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-06 10:55:31
  from "/Users/zhangbingbing/Work/nginx/html/yiidemo/views/index/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_577ce3a3e11064_45176315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '453c149bbab5946ba1e5b66b1f1380a6175baf0f' => 
    array (
      0 => '/Users/zhangbingbing/Work/nginx/html/yiidemo/views/index/index.tpl',
      1 => 1467802372,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577ce3a3e11064_45176315 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
    <head>
        <link href="/static/css/bootstrap.css" rel="stylesheet"/>
        <link href="/static/css/site.css" rel="stylesheet"/>
    </head>
    <body>
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
    </body>
    <?php echo '<script'; ?>
 src="/static/js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/static/js/bootstrap.js"><?php echo '</script'; ?>
>
</html>
<?php }
}
