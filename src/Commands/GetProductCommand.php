<?php

    namespace app\Commands;

    use app\Command;
    use app\Controller\ProductController;

    class GetProductCommand implements Command {

        private $product;

        public function __construct(ProductController $product) {
            $this->product = $product;
        }

        public function execute() {
            $product_id = (int) isset($_GET['productId']) ? $_GET['productId'] : "";
            return $this->product->getProduct($product_id);
        }
    }