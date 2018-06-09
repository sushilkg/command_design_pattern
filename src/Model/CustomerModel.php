<?php

    namespace app\Model;

    use app\Database;

    class Customer {

        private $db;

        public function __construct() {
            $this->db = Database::getInstance();
        }

        public function save($customer) {
            //watch that sql injections and sensitization, use prepared statements etc etc
            $sql = "insert into customer set name = $customer->name";

            return $this->db->insert('customer', $sql);
        }

    }