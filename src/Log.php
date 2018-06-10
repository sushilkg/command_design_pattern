<?php

    //this could be moved to a better place
    namespace app;

    class Log {

        public function log($message, $display = false) : void {
            //write it somewhere
            if ($display) {
                echo("Log: $message" . PHP_EOL);
            }
        }
    }