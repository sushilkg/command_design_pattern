<?php

    namespace app\Controller;

    use app\Log;
    use \Exception;

    class ApiController {

        private $log;
        private $action;

        public function __construct() {
            $this->log = new Log();
            $this->action = $this->getAction();
        }

        public function getAction() {
            try {
                switch ($_GET['case']) {
                    case "product":
                        $action = [
                            "command" => "app\Commands\GetProductCommand",
                            "controller" => "app\Controller\ProductController"
                        ];
                        break;
                    case "contact":
                        $action = [
                            "command" => "app\Commands\ContactCommand",
                            "controller" => "app\Controller\ContactController"
                        ];
                        break;
                    case "customer":
                        $action = [
                            "command" => "app\Commands\SaveCustomerCommand",
                            "controller" => "app\Controller\CustomerController"
                        ];
                        break;
                    default:
                        throw new Exception('Invalid case');
                }
            } catch (Exception $exception) {
                $this->log->log($exception);
                exit;
            }

            return $action;
        }
    }