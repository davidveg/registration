<?php
/**
 * Use this file to override global defaults.
 *
 * See the individual environment DB configs for specific config information.
 */

return array(
  'type'           => 'mysqli',
  'connection'     => array(
      'hostname'       => 'localhost',
      'port'           => '3306',
      'database'       => 'db_registration',
      'username'       => 'registration',
      'password'       => 'registration',
      'persistent'     => false,
      'compress'       => false,
  ),
  'identifier'     => '`',
  'table_prefix'   => '',
  'charset'        => 'utf8',
  'enable_cache'   => true,
  'profiling'      => false,
  'readonly'       => false,
);
