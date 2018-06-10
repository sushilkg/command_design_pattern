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
            //empty $_POST['productId'] will throw warning here, so suppressing it here and instead handling it down in Product controller with validations
            return $this->product->getProduct(@$_GET['productId']);
        }
    }