<?php

    namespace app\Model;

    use app\Database;

    class Customer {

        private $db;

        public function __construct() {
            $this->db = new Database();
        }

        public function save(string $customer) : bool {
            //do validation and stuffs before saving
            $sql = "INSERT INTO customer SET name = " . $customer;

            return $this->db->query($sql);
        }

    }