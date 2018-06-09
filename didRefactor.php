<?php

    require "vendor/autoload.php";

    $api = new app\Controller\ApiController();
    $action = $api->getAction();
    $command = new $action['command'] (new $action['controller']);
    $result = $command->execute();

    echo json_encode([$result]);