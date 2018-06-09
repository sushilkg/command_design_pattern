<?php

    namespace app\Commands;

    use app\Command;
    use app\Controller\ContactController;

    class ContactCommand implements Command {

        private $contact;

        public function __construct(ContactController $contact) {
            $this->contact = $contact;
        }

        public function execute() {
            return $this->contact->contact();
        }
    }