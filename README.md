# yiidemo

## Nginx配置

```nginx
server {
    listen       8001;
    server_name  localhost;

    charset utf-8;

    #access_log  logs/host.access.log  main;

    
    location /static {
        root    html/yiidemo/web;
    }

    error_page   500 502 503 504  /50x.html;
    location = /50x.html {
        root   html;
    }

    location / {
        fastcgi_pass   127.0.0.1:9000;
        fastcgi_index  index.php;
        fastcgi_param  SCRIPT_FILENAME  $document_root$fastcgi_script_name;
        include        fastcgi_params
        rewrite ^(.*)$ /yiidemo/web/index.php$1 break;
    }

    
    location ~ /\.ht {
        deny  all;
    }
}
```

## apache配置

```apache
Listen 8014
<VirtualHost *:8014>
    DocumentRoot "/home/work/yiidemo/web"
    RewriteEngine on
    RewriteCond %{REQUEST_URI} !^/static
    RewriteRule ^(.*)$          /index.php$1  [L]
    <Directory "/home/work/yiidemo/web">
        Options FollowSymLinks MultiViews
        AllowOverride All
        Order allow,deny
        allow from all
    </Directory>
</VirtualHost>
```


##访问

http://localhost:8001/user/index
