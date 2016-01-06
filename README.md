TRS Admin
============================

This is the admin for toprustservers.com.  My hope in releasing this is someone will find a good use to start their project from.

It features some basics of the skeletal structure of a yii app and gives me control to manage certain features of my website.


CONFIGURATION
-------------

### Database

Edit the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```

Also check and edit the other files in the `config/` directory to customize your application.
