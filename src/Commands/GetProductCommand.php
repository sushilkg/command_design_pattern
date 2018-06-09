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
            return $this->product->getProduct($_GET['productId']);
        }
    }