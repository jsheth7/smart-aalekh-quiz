<?php

$config = stream_get_contents(STDIN);
$config = trim(str_replace('DATABASE_URL: ', '', $config));
//echo $config;

$url = parse_url($config);
//print_r($url);

echo "heroku config:set DB_CONNECTION=" . $url['scheme'] . "\n";
echo "heroku config:set DB_HOST=" . $url['host'] . "\n";
echo "heroku config:set DB_PORT=" . $url['port'] . "\n";
echo "heroku config:set DB_USERNAME=" . $url['user'] . "\n";
echo "heroku config:set DB_PASSWORD=" . $url['pass'] . "\n";
echo "heroku config:set DB_DATABASE=" . str_replace('/', '', $url['path']) . "\n";

