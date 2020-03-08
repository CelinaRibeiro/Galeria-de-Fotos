<?php 
require 'environment.php';

$config = array();
if (ENVIRONMENT == 'development') {
    $config['dbname'] = 'projeto_galeria';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}else{
    //dados do servidor web
    $config['dbname'] = 'projeto_galeria';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}

global $db;
try {
    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
    
} catch (PDOException $e) {
    echo "ERRO ".$e->getMessage();
    exit();
}
?>