<?php

require 'helpers.php';
require 'Task.php';
require 'database/Connection.php';
require 'database/QueryBuilder.php';
$config = require 'config.php';


return new QueryBuilder(Connection::make($config['database']));
