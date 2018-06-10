<?php

    namespace app\Model;

    class Product {

        private $price;

        public function __construct() {
            $this->price = new Price;
        }

        public function findProductById(int $id) : array {
            $products = new ProductService();
            $product = array_filter($products->all(), function ($key) use ($id) {
                return $id === $key;
            }, ARRAY_FILTER_USE_KEY);

            if (!empty($product))
                return reset($product);

            return [];
        }
    }

    class ProductService {

        //prolly should get rid of the index keys here since we already do have productId with each product
        //but keeping them in order to let it resemble the original code
        private $products = [
            1 =>
                [
                    'id' => '666',
                    'name' => 'Fluffy unicorn',
                    'description' => 'It\'s so fluffy you\'ll melt and bring it to the park and eat ice cream. https://timedotcom.files.wordpress.com/2015/03/deadpool.jpg',
                    'price' => ['amount' => 10000, 'currency' => 'USD']
                ],
            2 => [
                'id' => '667',
                'name' => 'Fluffy tech lead',
                'description' => '”I don’t care if it works on your machine! We are not shipping your machine!” – Vidiu Platon',
                'price' => ['amount' => 300000, 'currency' => 'USD']
            ]
        ];

        public function all() {
            return $this->products;
        }
    }