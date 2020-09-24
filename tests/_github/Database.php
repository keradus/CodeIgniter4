<?php

$dbconfig = [

   'mysqli'   => [
	   'DSN'      => '',
	   'hostname' => '127.0.0.1',
	   'username' => 'root',
	   'password' => '',
	   'database' => 'test',
	   'DBDriver' => 'MySQLi',
	   'DBPrefix' => 'db_',
	   'pConnect' => false,
	   'DBDebug'  => (ENVIRONMENT !== 'production'),
	   'charset'  => 'utf8',
	   'DBCollat' => 'utf8_general_ci',
	   'swapPre'  => '',
	   'encrypt'  => false,
	   'compress' => false,
	   'strictOn' => false,
	   'failover' => [],
	   'port'     => 3306,
   ],

   'postgres' => [
	   'DSN'      => '',
	   'hostname' => 'localhost',
	   'username' => 'postgres',
	   'password' => 'postgres',
	   'database' => 'test',
	   'DBDriver' => 'Postgre',
	   'DBPrefix' => 'db_',
	   'pConnect' => false,
	   'DBDebug'  => (ENVIRONMENT !== 'production'),
	   'charset'  => 'utf8',
	   'DBCollat' => 'utf8_general_ci',
	   'swapPre'  => '',
	   'encrypt'  => false,
	   'compress' => false,
	   'strictOn' => false,
	   'failover' => [],
	   'port'     => 5432,
   ],

   'sqlsrv'   => [
	   'DSN'      => '',
	   'hostname' => 'localhost',
	   'username' => 'mssql',
	   'password' => 'mssql',
	   'database' => 'mssql',
	   'DBDriver' => 'Sqlrv',
	   'DBPrefix' => 'db_',
	   'pConnect' => false,
	   'DBDebug'  => (ENVIRONMENT !== 'production'),
	   'charset'  => 'utf8',
	   'DBCollat' => 'utf8_general_ci',
	   'swapPre'  => '',
	   'encrypt'  => false,
	   'compress' => false,
	   'strictOn' => false,
	   'failover' => [],
	   'port'     => 1433,
   ],

   'sqlite'   => [
	   'DSN'      => '',
	   'hostname' => 'localhost',
	   'username' => '',
	   'password' => '',
	   'database' => 'database.db',
	   'DBDriver' => 'SQLite3',
	   'DBPrefix' => 'db_',
	   'pConnect' => false,
	   'DBDebug'  => (ENVIRONMENT !== 'production'),
	   'charset'  => 'utf8',
	   'DBCollat' => 'utf8_general_ci',
	   'swapPre'  => '',
	   'encrypt'  => false,
	   'compress' => false,
	   'strictOn' => false,
	   'failover' => [],
	   'port'     => 3306,
   ],

];
