<?php

    namespace app\Model;

    use \Exception;
    use app\Log;

    class Product {

        private $log;
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

        public function __construct() {
            $this->log = new Log;
        }

        public function get(string $id) : ?array {
            //based on the code provided originally, should actually be returning first value in the products when productId = 1
            //instead we're actually matching up with the product id here
            //just access it with index key []
            $product = array_filter($this->products, function ($product) use ($id) {
                return $product['id'] === $id;
            });

            return reset($product);
        }
    }