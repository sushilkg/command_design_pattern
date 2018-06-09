<?php

    namespace app\Commands;

    use app\Command;
    use app\Controller\CustomerController;

    class SaveCustomerCommand implements Command {

        private $customer;

        public function __construct(CustomerController $customer) {
            $this->customer = $customer;
        }

        public function execute() {
            return $this->customer->save($_POST['customer']);
        }
    }