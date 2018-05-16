<?php

if (extension_loaded('memcached')) {
    class_alias('Memcached', 'Cache');
} else {
    class_alias('InternalCacheProvider', 'Cache');
}

class Database
{
    public function __construct(Cache $cache) {}
}