<?php

$config= require 'config.php';
require 'db/connection.php';
require 'db/queryBuilder.php';

return new QueryBulder(

    Connection::make($config['database'])

);