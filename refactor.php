<?php
    /**
     * @author Proudly (?) brought to you by Zenrooms technical department
     * @copyright Copyright (c) 2018 Zen eServices Pte Ltd
     *
     * Our developer was not sober while writing this, please help us to fix it.
     * This class is a Controller, in the MVC pattern sense of the term.
     * In this scenario you need to refactor this class (and possibly add, remove, modify others) in any way you want and explain your design.
     * It's written in PHP5.6, you also need to convert it to PHP7.2.
     * The code doesn't need to be runnable! You just need to show your ability to build a better design.
     * Be as descriptive as possible with the new design.
     * Explain WHY this design is not the wisest and HOW it should be different.
     *
     * Extra question for senior developers :
     * Our developer also forgot to add tests. Which ones are missing?
     *
     * Inevitable obvious disclaimer: we don't have such code in our codebase, it's only an exercise.
     */

    use dbConnector;
    use Customer;
    use jsonResponse;
    use log;

    class APIController
    {
        public $log;
        public $DbConfig;

        public function construct()
        {
            $this->log = new log();
            $this->DbConfig = [
                'host' => 'localhost',
                'username' => 'test',
                'password' => 'password',
                'db' => 'db'
            ];
        }

        public function doAction()
        {
            $Case = $_GET["case"];
            $customer = $_POST["customer"];
            $product_id = $_GET["productId"];

            try {
                switch ($Case) :
                    case 'product':
                        switch ($product_id) {
                            case 1 :
                                $output = [
                                    'id' => '666',
                                    'name' => 'Fluffy unicorn',
                                    'description' => 'It\'s so fluffy you\'ll melt and bring it to the park and eat ice cream. https://timedotcom.files.wordpress.com/2015/03/deadpool.jpg',
                                    'price' => ['amount' => 10000, 'currency' => 'USD']
                                ];
                                break;
                            case 2 :
                                $output = [
                                    'id' => '667',
                                    'name' => 'Fluffy tech lead',
                                    'description' => '”I don’t care if it works on your machine! We are not shipping your machine!” – Vidiu Platon',
                                    'price' => ['amount' => 300000, 'currency' => 'USD']
                                ];
                                break;
                        }
                        break;
                    case 'contact':
                        $output = 'contact@zemrooms.com';
                        break;
                    case 'customer':
                        $output = 'OK';
                        $Customer = new Customer($customer);
                        $db = new dbConnector($this->DbConfig);
                        $Customer->save($db);
                        break;
                    default:
                        throw new Exception('Invalid case');
                endswitch;
            } catch (Exception $e) {
                $this->log->error('Oups');
            }
            return (new jsonResponse([$output]))->__toString();
        }

        // .... more code
    }