<?php

    class ProductTest extends \PHPUnit_Framework_TestCase {

        public function testProductIsAvailable() {
            $product = new app\Controller\ProductController;

            $this->assertArrayHasKey("name", $product->getProduct(666));
        }

        public function testExceptionIsThrownIfProductNotFound() {
            try {
                $product = new app\Controller\ProductController;
                $product->getProduct(12);
            } catch (\Exception $exception) {
                $this->expectExceptionMessage('asdfProductsasdfasdf not found');
            }
        }
    }