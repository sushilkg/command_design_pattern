<?php

    namespace app\Controller;

    use app\Model\Product;

    class ProductController {

        public function getProduct($id) {
            $product = new Product();

            //try to catch NotFound errors
            return $product->get($id);
        }

    }