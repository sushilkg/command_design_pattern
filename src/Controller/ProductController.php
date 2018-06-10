<?php

    namespace app\Controller;

    use app\Log;
    use app\Model\Product;

    class ProductController {

        private $log;

        public function __construct() {
            $this->log = new Log;
        }

        public function getProduct(int $id) : array {
            $product = new Product();

            try {
                if (!$found = $product->findProductById($id)) {
                    throw new \Exception("Product not found");
                }
            } catch (\Exception $exception) {
                $found = ["message" => $exception->getMessage()];
                $this->log->log($exception->getMessage());
            }

            return $found;
        }
    }