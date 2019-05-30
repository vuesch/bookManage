<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=db_book',
    'username' => 'root',
    'password' => 'root',
    'charset' => 'utf8',
    'tablePrefix'=>'t_'//表前缀，默认没有的，自己加上

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
