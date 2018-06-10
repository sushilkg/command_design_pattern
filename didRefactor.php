<?php

    require "vendor/autoload.php";

    $api = new app\Controller\ApiController;
    $api->startup();
    $api->output();