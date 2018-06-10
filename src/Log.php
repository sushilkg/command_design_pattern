<?php

    //this could be moved to a better place
    namespace app;

    class Log {

        public function log($message) : void {
            //write it somewhere
            echo ("Log: $message".PHP_EOL);
        }
    }