<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * @package  Database
 *
 * Database connection settings, defined as arrays, or "groups". If no group
 * name is used when loading the database library, the group named "default"
 * will be used.
 *
 * Each group can be connected to independently, and multiple groups can be
 * connected at once.
 *
 * Group Options:
 *  benchmark     - Enable or disable database benchmarking
 *  persistent    - Enable or disable a persistent connection
 *  connection    - Array of connection specific parameters; alternatively,
 *                  you can use a DSN though it is not as fast and certain
 *                  characters could create problems (like an '@' character
 *                  in a password):
 *                  'connection'    => 'mysql://dbuser:secret@localhost/kohana'
 *  character_set - Database character set
 *  table_prefix  - Database table prefix
 *  object        - Enable or disable object results
 *  cache         - Enable or disable query caching
 *	escape        - Enable automatic query builder escaping
 */


/*$config['default'] = array
(
    'benchmark'     => TRUE,
    'persistent'    => FALSE,
    'connection'    => array
    (
        'type'     => 'oracle',
        'user'     => 'kom_0',
        'pass'     => 'kom_0',

        'host'     => 'localhost',
        'port'     => FALSE,
        'socket'   => FALSE,
        				
        'database' => '(DESCRIPTION =
                        (ADDRESS = (PROTOCOL = TCP)(HOST = 192.168.122.34)(PORT = 1521))
                        (CONNECT_DATA =
                                (SERVER = DEDICATED)
                                (SERVICE_NAME = orcl)
                                        )
                        )'

    ),
    'character_set' => 'utf8',
    'table_prefix'  => '',
    'object'        => TRUE,
    'cache'         => FALSE,
    'escape'        => TRUE
);*/

return array
(
    'default' => array
    (
        'type'          => 'Oracle',       // string (e.g. SQL, NoSQL, or LDAP)
        'dialect'       => 'Oracle',     // string (e.g. DB2, Drizzle, Firebird, MariaDB, MsSQL, MySQL, Oracle, PostgreSQL, or SQLite)
        'driver'        => 'Standard',
        'connection' => array(
        'hostname'   => '192.168.122.34',
        'username'   => 'kom_0',
        'password'   => 'kom_0',
        'persistent' => FALSE,
        'database'   => 'orcl',
        ),
        'table_prefix' => '',
        'charset'      => 'utf8',
        'profiling'    => TRUE,
    )
);