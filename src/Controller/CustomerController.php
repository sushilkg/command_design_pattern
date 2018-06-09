<?php

    namespace app\Controller;

    use app\Database;
    use app\Model\Customer;

    class CustomerController {

        public function save($new_customer) {
            //do validation and stuffs
            $customer = new Customer(new Database());
            if ($customer->save($new_customer))
                return "OK";

            return "Something went wrong!";
        }
    }