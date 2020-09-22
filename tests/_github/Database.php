<?php

$dbconfig = [

   'mysqli'   => [
	   'DSN'      => '',
	   'hostname' => 'mysql',
	   'username' => 'mysql',
	   'password' => 'mysql',
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
   ],

   'postgres' => [
	   'DSN'      => '',
	   'hostname' => 'postgres',
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
   ],

];
