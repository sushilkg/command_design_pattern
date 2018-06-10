<?php

    class ProductTest extends \PHPUnit_Framework_TestCase {

        public function testProductIsAvailable() {
            $product = new app\Controller\ProductController();

            $this->assertArrayHasKey("name", $product->getProduct("666"));
        }
    }