<?php

$app = [];


//requires configuration
$app['config'] = require 'config.php';
// requires connection to a database
require 'core/database/Connection.php';
// requires Query Builder
require 'core/database/QueryBuilder.php';


//requires router
require 'core/router.php';

require 'core/Request.php';

$app['database'] =  new QueryBuilder(
  Connection::make($app['config']['database'])
  );


 ?>
