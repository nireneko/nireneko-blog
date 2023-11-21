<?php

if ($_ENV['REDIS_ENABLE']) {
  $settings['redis.settings']['perm_ttl'] = $_ENV['REDIS_TTL'];
  $settings['redis.connection']['interface'] = 'PhpRedis';
  $settings['redis.connection']['host'] = $_ENV['REDIS_HOST'];
  $settings['redis.connection']['port'] = $_ENV['REDIS_PORT'];
  $settings['cache']['default'] = 'cache.backend.redis';
}
