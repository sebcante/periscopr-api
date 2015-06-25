<?php

    class ClientTest extends BaseTest {

        /**
         * Class constructor
         *
         */
        public function __construct() {
            $this->requiresAuth = false;
            parent::__construct();
        }

        /**
         * Test to see if the Client instance was
         * created successfully and is usable
         */
        public function testCanCreateInstance() {
            $this->assertInstanceOf("Cjhbtn\\Periscopr\\Api\\Client", $this->client);
        }

        /**
         * Test to see if a blank Request to the API
         * returns the Bad Request error
         */
        public function testBlankRequestReturns400() {
            $response = $this->client->execute(new BlankRequest());
            $this->assertEquals(400, $response->getStatusCode());
        }

        /**
         * Test to see if a blank LoginTwitter request
         * to the API returns an Unauthorized error
         */
        public function testBlankLoginTwitterRequestReturns401() {
            $response = $this->client->execute(
                new \Cjhbtn\Periscopr\Api\Requests\LoginTwitter([
                    "session_key" => "",
                    "session_secret" => "",
                    "user_name" => "",
                    "user_id" => ""
                ])
            );
            $this->assertEquals(401, $response->getStatusCode());
        }

    }


    class BlankRequest extends \Cjhbtn\Periscopr\Api\Requests\BaseRequest {
        public function __construct() {
            $this->response = "BlankResponse";
        }
    }

    class BlankResponse extends \Cjhbtn\Periscopr\Api\Responses\BaseResponse {

    }