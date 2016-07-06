<html>
    <head>
        <link href="/static/css/bootstrap.css" rel="stylesheet"/>
        <link href="/static/css/site.css" rel="stylesheet"/>
    </head>
    <body>
        <div>
            <table>
                <tr><th>id</th><th>name</th><th>password</th></tr>
                {foreach $users as $key => $user}
                <tr><td>{$user.id}</td><td>{$user.name}</td><td>{$user.password}</td></tr>
                {/foreach}
            </table>
        </div>
    </body>
    <script src="/static/js/jquery.js"></script>
    <script src="/static/js/bootstrap.js"></script>
</html>
