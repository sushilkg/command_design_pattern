<?php

    namespace app\Controller;

    use app\Log;
    use app\Model\Product;

    class ProductController {

        private $log;

        public function __construct() {
            $this->log = new Log;
        }

        public function getProduct(string $id) : array {
            $product = new Product();

            try {
                if (!$found_product = $product->get($id)) {
                    throw new \Exception("Product not found");
                }
            } catch (\Exception $exception) {
                $this->log->log($exception->getMessage());
                exit;
            }

            return $found_product;
        }
    }