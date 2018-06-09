<?php

    namespace app\Model;

    use app\Database;

    class Customer {

        private $db;

        public function __construct(Database $db) {
            $this->db = $db;
        }

        public function save($customer) {
            //do validation and stuffs before saving
            $sql = "insert into customer set name = ".$customer['name'];
            return $this->db->query($sql);
        }

    }