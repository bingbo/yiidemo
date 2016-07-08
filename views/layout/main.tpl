<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-param" content="_csrf">
    <meta name="csrf-token" content="M3ExY0E2elNcKQMHeE8/BGAodjAyeUoBX0hLMglFEhBaK2cCJkYRBA==">
    <title>{block name=title}my yii demo{/block}</title>
    <link href="/static/css/bootstrap.css" rel="stylesheet"/>
    <link href="/static/css/site.css" rel="stylesheet"/>
    {block name=head}{/block}
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
                <a class="navbar-brand" href="/">My Demo</a>
            </div>
            <div id="w0-collapse" class="collapse navbar-collapse">
                <ul id="w1" class="navbar-nav navbar-right nav">
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="/site/about">About</a></li>
                    <li><a href="/site/contact">Contact</a></li>
                    <li><a href="/site/login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        <div class="site-index">
            {block name=body}{/block} 
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
{block name=foot}{/block}
</body>
</html>
