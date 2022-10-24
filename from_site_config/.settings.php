<?php
return array (
  'utf_mode' => 
  array (
    'value' => true,
    'readonly' => true,
  ),
  'cache_flags' => 
  array (
    'value' => 
    array (
      'config_options' => 3600.0,
      'site_domain' => 3600.0,
    ),
    'readonly' => false,
  ),
  'cookies' => 
  array (
    'value' => 
    array (
      'secure' => false,
      'http_only' => true,
    ),
    'readonly' => false,
  ),
  'exception_handling' => 
  array (
    'value' => 
    array (
      'debug' => false,
      'handled_errors_types' => 4437,
      'exception_errors_types' => 4437,
      'ignore_silence' => false,
      'assertion_throws_exception' => true,
      'assertion_error_type' => 256,
      'log' => NULL,
    ),
    'readonly' => false,
  ),
  'connections' => 
  array (
    'value' => 
    array (
      'default' => 
      array (
        'className' => '\\Bitrix\\Main\\DB\\MysqliConnection',
        'host' => 'localhost',
        'database' => 'sitemanager2',
        'login' => 'b242',
        'password' => '123456789',
        'options' => 2.0,
      ),
    ),
    'readonly' => true,
  ),
  'crypto' => 
  array (
    'value' => 
    array (
      'crypto_key' => 'a4693543d7107690754d546307badef8',
    ),
    'readonly' => true,
  ),
  'pull' => 
  array (
    'value' => 
    array (
      'path_to_listener' => 'http://#DOMAIN#/bitrix/sub/',
      'path_to_listener_secure' => 'https://#DOMAIN#/bitrix/sub/',
      'path_to_modern_listener' => 'http://#DOMAIN#/bitrix/sub/',
      'path_to_modern_listener_secure' => 'https://#DOMAIN#/bitrix/sub/',
      'path_to_mobile_listener' => 'http://#DOMAIN#:8893/bitrix/sub/',
      'path_to_mobile_listener_secure' => 'https://#DOMAIN#:8894/bitrix/sub/',
      'path_to_websocket' => 'ws://#DOMAIN#/bitrix/subws/',
      'path_to_websocket_secure' => 'wss://#DOMAIN#/bitrix/subws/',
      'path_to_publish' => 'http://localhost:8895/bitrix/pub/',
      'path_to_publish_web' => 'http://#DOMAIN#/bitrix/rest/',
      'path_to_publish_web_secure' => 'https://#DOMAIN#/bitrix/rest/',
      'nginx_version' => '4',
      'nginx_command_per_hit' => '100',
      'nginx' => 'Y',
      'nginx_headers' => 'N',
      'push' => 'Y',
      'websocket' => 'Y',
      'signature_key' => 'testkey',
      'signature_algo' => 'sha1',
      'guest' => 'N',
    ),
  ),
);
