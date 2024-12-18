<?php

use Core\Container;
use Core\Database;
use Core\App;

App::setContainer(new Container());

App::bind('Core\Database', function(){
    $config = require base_path("config.php");
    return new Database($config['database']);
});
