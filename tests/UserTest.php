<?php

    class UserTest extends BaseTest {

        /**
         * Test retrieving a blank User ID returns
         * a Not Found error
         */
        public function testGetBlankUserIdReturns404() {
            $userRequest = new \Cjhbtn\Periscopr\Api\Requests\User([
                "user_id" => ""
            ]);
            $response = $this->client->execute($userRequest);
            $this->assertEquals(404, $response->getStatusCode());
        }

        /**
         * Test retrieving a valid User ID returns
         * the correct response and a User model
         */
        public function testGetUserReturnsSuccess() {
            $userRequest = new \Cjhbtn\Periscopr\Api\Requests\User([
                "user_id" => $this->user_id
            ]);
            $response = $this->client->execute($userRequest);
            $this->assertEquals(200, $response->getStatusCode());
            $this->assertInstanceOf('Cjhbtn\\Periscopr\\Api\\Responses\\User', $response);
            $this->assertInstanceOf('Cjhbtn\\Periscopr\\Api\\Models\\User', $response->user);
            $this->assertEquals($this->user_id, $response->user->id);
        }
    }