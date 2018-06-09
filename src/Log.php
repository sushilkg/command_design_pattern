<?php

    //this could be moved to a better place
    namespace app;

    class Log {

        public function __construct() {
        }

        public function log($message) {
            //write it somewhere
            print "\n<pre>".$message."</pre>";
        }
    }