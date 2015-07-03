<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * "store_in" allows you to set your preference regarding the storage of your logs.
 * You can store the logs inside a database by passing "database" as value,
 * or inside a directory by passing the directory location as value (relative to APPPATH).
 * If nothing is set, it will save the logs inside the "application/logs" directory.
 *
 * If you decide to store the logs inside a database this is the sql for the "rat" table
 *
 *
SET NAMES utf8;
DROP TABLE IF EXISTS `rat`;
CREATE TABLE `rat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
 *
 *
 * If you decide to store the logs inside a directory make sure the directory and its files are writable (755).
 */
//$config['store_in'] = '';
$config['store_in'] = ''; //You can choose to keep the logs inside the database or in a specific directory (relative to the APPPath). If you leave blank (''), it will assume the 'application/logs' directory will be used
$config['session_user_id'] = ''; // f you want to pass the user's ID automatically to the library when creating the log, you can setup a session value and pass it to this config item. If not, leave blank.
$config['table_name'] = ''; // If you wanted to be original and prefered another table name, you must change it here. Leave blank if the table name is 'rat'
