<?php

    //this could be moved to a better place
    namespace app;

    class Database {

        private $config, $connection;
        private static $instance;

        private function __construct() {
            $this->config = [
                'host' => 'localhost',
                'username' => 'test',
                'password' => 'password',
                'db' => 'db'
            ];

            try {
                $this->connection = new \PDO (
                    'mysql:host=' . $this->config['host'] . ';dbname=' . $this->config['db'] . ';charset=utf8',
                    $this->config['username'],
                    $this->config['password']
                );
            } catch (\Exception $e) {
                //log exception
            }
        }

        public static function getInstance() {
            if (!isset(self::$instance)) {
                self::$instance = new Database();
            }
            return self::$instance;
        }

        public function insert($table, $query) {
            //do query stuffs
            //watch that sql injections and sensitization, use prepared statements etc etc
            //should prolly be using something robust instead anyway
            return true;
        }

        //and implement any other methods

    }