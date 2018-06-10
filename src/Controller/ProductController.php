<?php

    namespace app\Controller;

    use app\Model\Product;

    class ProductController {

        public function getProduct($id) {
            $product = new Product();
            return $product->get($id);
        }

    }