<?php

    abstract class BaseTest extends PHPUnit_Framework_TestCase
    {
        /** @var \Cjhbtn\Periscopr\Api\Client $client */
        protected $client;

        /** @var boolean $requiresAuth */
        protected $requiresAuth = true;

        /** @var string $user_id */
        protected $user_id;

        /**
         * PHPUnit Setup Function
         *
         */
        public function setUp()
        {
            if (file_exists(__DIR__ . '/../.env')) {
                Dotenv::load(__DIR__ . '/../');
            }
            $this->client = new \Cjhbtn\Periscopr\Api\Client();
            if ($this->requiresAuth && !$this->setUpAuth()) {
                $this->markTestSkipped("Authenticated test skipped - Unable to authenticate with Periscope API");
            }
        }

        /**
         * Set up authentication for authenticated requests
         *
         * @return boolean
         */
        protected function setUpAuth() {
            $cookie = getenv('PERISCOPE_COOKIE');
            if (empty($cookie))
            {
                return false;
            }
            $this->client->setCookie($cookie);
            $this->user_id = '9';
            return true;
        }
    }