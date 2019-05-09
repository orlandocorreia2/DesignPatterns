<?php

require_once 'env.php';
require_once 'SqlFactory.php';
require_once 'MySqlFactory.php';
require_once 'OracleFactory.php';

switch (DB_CONNECTION) {
    case 'sql':
        $dbFactory = new SqlFactory();
        break;
    case 'oracle':
        $dbFactory = new OracleFactory();
        break;
    default:
        $dbFactory = new MySqlFactory();

}

$con = $dbFactory->createConnection();
$con->open();

$cmd = $dbFactory->createCommand();
$cmd->execute();