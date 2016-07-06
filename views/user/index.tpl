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
                        {foreach $users as $key => $user}
                        <tr><td>{$user.id}</td><td>{$user.name}</td><td>{$user.password}</td></tr>
                        {/foreach}
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

<script src="/static/js/jquery.js"></script>
<script src="/static/js/bootstrap.js"></script>
</body>
</html>
