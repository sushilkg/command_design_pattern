<?php

    namespace app\Controller;

    use app\Log;
    use \Exception;

    class ApiController {

        private $log;
        public $action;

        public function __construct() {
            $this->log = new Log();
            $this->action = $this->getAction();
        }

        public function getAction() {
            try {
                switch ($_GET['case']) {
                    case "product":
                        $action = "GetProductCommand";
                        break;
                    case "contact":
                        $action = "ContactCommand";
                        break;
                    case "customer":
                        $action = "SaveCustomerCommand";
                        break;
                    default:
                        $action = null;
                        throw new Exception('Invalid case');
                }
            } catch (Exception $exception) {
                $this->log->log($exception);
            }

            return $action;
        }
    }