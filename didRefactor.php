<?php

    require "vendor/autoload.php";

    use app\Controller\ApiController;

    $api = new ApiController();
    $command = new $api->action();
    $command->execute();