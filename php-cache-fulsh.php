<?php
if (function_exists('opcache_reset')) {
    opcache_reset();
    echo "OPcache flushed successfully!";
} else {
    echo "OPcache not enabled.";
}