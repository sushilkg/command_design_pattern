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
            //empty $_POST['customer'] will throw warning here, so suppressing it here and instead handling it down in Customer controller with validations
            return $this->customer->save(@$_POST['customer']);
        }
    }