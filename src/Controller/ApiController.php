<?php

    namespace app\Controller;

    use app\Log;
    use \Exception;
    use Symfony\Component\HttpFoundation\JsonResponse;

    class ApiController {

        private $log;
        private $action;
        public $response;

        public function __construct() {
            $this->log = new Log();
            $this->action = $this->getAction();
        }

        public function startup() {
            if (!empty($this->action)) {
                $command = new $this->action['command'] (new $this->action['controller']);
                $this->response = $command->execute();
            }
        }

        public function output() {
            $response = new JsonResponse([$this->response]);
            $response->send();
            exit;
        }

        public function getAction() : array {
            $case = isset($_GET['case']) ? $_GET['case'] : "";

            try {
                switch ($case) {
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
                $this->log->log($exception->getMessage(), true);
                exit;
            }

            return $action;
        }
    }