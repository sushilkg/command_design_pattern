<?php

    namespace app\Model;

    use \Exception;

    class Product {

        private $products = [
            [
                'id' => '666',
                'name' => 'Fluffy unicorn',
                'description' => 'It\'s so fluffy you\'ll melt and bring it to the park and eat ice cream. https://timedotcom.files.wordpress.com/2015/03/deadpool.jpg',
                'price' => ['amount' => 10000, 'currency' => 'USD']
            ], [
                'id' => '667',
                'name' => 'Fluffy tech lead',
                'description' => '”I don’t care if it works on your machine! We are not shipping your machine!” – Vidiu Platon',
                'price' => ['amount' => 300000, 'currency' => 'USD']
            ]
        ];

        public function get($id) {
            try {
                //based on the code provided originally, should actually be returning first value in the products when productId = 1
                //instead we're actually matching up with the product id here
                //just make it []
                $product = array_filter($this->products, function ($product) use ($id) {
                    return $product['id'] === $id;
                });

                if (empty($product))
                    throw new Exception("Product not found");

                return reset($product);
            } catch (Exception $exception) {
                return $exception->getMessage();
            }

        }
    }