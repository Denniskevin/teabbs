#BirdBBS
 
> PHP Simple BBS V2EX(like), based on [YII framework 1.1.14](http://www.yiiframework.com). 

##Requirements
- MySQL 5.5
- PHP 5.3 （with fileinfo module default）
- YII Framework1.1.14's requirements

##Install
> auto install

1. git clone project to your system

2. config your web server , web root dir is `birdbbs/www/`

3. type  `http://www.yourname.com/install.php` in browser to install

4. login to ADMIN panel http://www.yourname.com/index.php?r=admin/default config your system

> manually

1. git clone project to your system

2. config your web server , web root dir is `birdbbs/www/`

3. load all *.sql (`teahub/www/protected/data/`) file to mysql server. (notice table prefix)

4. make file config.php to dir `teahub/www/protected/config/config.php`

5. login to ADMIN panel http://www.yourname.com/index.php?r=admin/default config your system


config.php example
```
$CONF = array();
$CONF['db'] = array(
    'connectionString' => 'mysql:host=127.0.0.1;dbname=birdbbs;port=3306',
    'emulatePrepare' => true,
    'username' => 'root',
    'password' => 'admin',
    'charset' => 'utf8',
    'tablePrefix' => 'bbs_',
    'schemaCachingDuration' => 3600
);
$CONF['params'] = array(
    'adminEmail'=>'xxxx@qq.com',
    'mail' => array(
      'noreply' => 'admin@teahub.com.cn',
      'smtp' => 'smtp.exmail.qq.com',
      'password' => 'test',
    ),
    // third part login bind
    // sina weibo.com, remove comment
    // 'sina' => array(
    //    'appKey' => 'xxxxxxx',
    //    'appSecrectKey' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx',
    //    'callbackUrl' => 'http://yourhoust.com/index.php?r=callback/sina',
    //),

);

```

nginx example
```
server {
        set $htdocs /Users/www;
        listen 80;
        server_name dev.teahub.com.cn;
        location / {
            root $htdocs;
            autoindex on;
            index index.php index.html;
    
           if (!-e $request_filename){
                rewrite (.*) /index.php?r=$1;
           }
       }
       location ~ \.php$ {
           include fastcgi_params;
           fastcgi_index index.php;
           fastcgi_pass  127.0.0.1:9000;
           fastcgi_param SCRIPT_FILENAME $htdocs$fastcgi_script_name;
           fastcgi_param PATH_INFO $fastcgi_script_name;
       }
}


##License
>MIT
# teabbs
