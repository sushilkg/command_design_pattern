<?php

    namespace app\Controller;

    use app\Log;

    class ApiController {

        private $log;

        public function __construct() {
            $this->log = new Log();
        }
    }