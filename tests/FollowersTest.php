<?php

    class FollowersTest extends BaseTest {

        /**
         * Test that fetching followers for an invalid
         * user id returns Not Found
         *
         */
        public function testGetInvalidUserReturnsEmptyResults() {
            $followers = new \Cjhbtn\Periscopr\Api\Requests\Followers([
                "user_id" => "-1"
            ]);
            $response = $this->client->execute($followers);
            $this->assertEquals(200, $response->getStatusCode());
            $this->assertInstanceOf("Cjhbtn\\Periscopr\\Api\\Responses\\Followers", $response);
            $this->assertEmpty($response->results);
        }

        /**
         * Test that fetching followers for the current
         * user id returns the correct response with an
         * array of User models in results
         */
        public function testGetMyFollowersReturnsResults() {
            $followers = new \Cjhbtn\Periscopr\Api\Requests\Followers([
                "user_id" => $this->user_id
            ]);
            $response = $this->client->execute($followers);
            $this->assertEquals(200, $response->getStatusCode());
            $this->assertInstanceOf("Cjhbtn\\Periscopr\\Api\\Responses\\Followers", $response);
            $this->assertArrayHasKey(0, $response->results);
            $this->assertInstanceOf("Cjhbtn\\Periscopr\\Api\\Models\\User", $response->results[0]);
        }
    }