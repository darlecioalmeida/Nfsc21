<?php
error_reporting(0);

// para faciliar nossas vidas vamos usar medoo para conexao com o banco.
include_once 'medoo.php';

// PDO via medoo (File Encode: ISO 8859 - 1 (Latin - 1) \ banco collation Latin1)
$database = new medoo(array(
    'database_type' => 'mysql',
    'database_name' => 'portal',
    'server'        => 'localhost',
    'username'      => 'root',
    'password'      => '',
    'charset'       => 'latin1'
));
