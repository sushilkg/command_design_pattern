<?php

    class ContactTest extends \PHPUnit_Framework_TestCase {

        public function testContactInformationRecieved() {
            $contact = new app\Controller\ContactController;

            $this->assertEquals("contact@zemrooms.com", $contact->contact());
        }
    }