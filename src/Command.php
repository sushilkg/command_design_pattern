<?php

    //this could be moved to a better place
    namespace app;

    interface Command {

        public function execute();
    }