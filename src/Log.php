<?php

    //this could be moved to a better place
    namespace app;

    class Log {

        public function log($message) {
            //write it somewhere
            print "<pre>";
            print "$message";
            print "</pre>";
        }
    }