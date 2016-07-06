<?php
/* Smarty version 3.1.30-dev/72, created on 2016-07-06 11:15:57
  from "/Users/zhangbingbing/Work/nginx/html/yiidemo/views/index/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/72',
  'unifunc' => 'content_577ce86dd7add5_11832383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '453c149bbab5946ba1e5b66b1f1380a6175baf0f' => 
    array (
      0 => '/Users/zhangbingbing/Work/nginx/html/yiidemo/views/index/index.tpl',
      1 => 1467803756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577ce86dd7add5_11832383 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-param" content="_csrf">
    <meta name="csrf-token" content="M3ExY0E2elNcKQMHeE8/BGAodjAyeUoBX0hLMglFEhBaK2cCJkYRBA==">
    <title>My Yii Application</title>
    <link href="/static/css/bootstrap.css" rel="stylesheet"/>
    <link href="/static/css/site.css" rel="stylesheet"/>
</head>
<body>

<div class="wrap">
    
    <nav id="w0" class="navbar-inverse navbar-fixed-top navbar" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#w0-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/index.php">My Company</a>
            </div>
            <div id="w0-collapse" class="collapse navbar-collapse">
                <ul id="w1" class="navbar-nav navbar-right nav">
                    <li class="active"><a href="/index.php?r=site%2Findex">Home</a></li>
                    <li><a href="/index.php?r=site%2Fabout">About</a></li>
                    <li><a href="/index.php?r=site%2Fcontact">Contact</a></li>
                    <li><a href="/index.php?r=site%2Flogin">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        <div class="site-index">
            <div class="jumbotron">
                <h1>Congratulations!</h1>
                <p class="lead">You have successfully created your Yii-powered application.</p>
                <div class="body-content">
                    <table class="table">
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
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company 2016-07-12</p>

        <p class="pull-right">Bing</p>
    </div>
</footer>

<?php echo '<script'; ?>
 src="/static/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/static/js/bootstrap.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
