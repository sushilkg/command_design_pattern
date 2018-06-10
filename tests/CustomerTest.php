<?php

    class CustomerTest extends \PHPUnit_Framework_TestCase {

        public function testThatCustomerIsSaved() {
            $customer = new app\Controller\CustomerController();

            $this->assertEquals("OK", $customer->save("Sushil"));
        }
    }