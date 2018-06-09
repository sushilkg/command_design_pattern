<?php

    //this could be moved to a better place
    namespace app;

    class Database {

        private $config;

        public function __construct() {
            $this->config = [
                'host' => 'localhost',
                'username' => 'test',
                'password' => 'password',
                'db' => 'db'
            ];

            //instantiate db connections here
        }

        public function query($query) {
            //do query stuffs
            //$this->pdo->prepare($query)->execute();
            return true;
        }

        //and implement any other methods

    }