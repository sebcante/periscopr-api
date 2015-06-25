<?php

    class FollowingTest extends BaseTest {

        /**
         * Test that fetching following users for an invalid
         * user id returns Not Found
         *
         */
        public function testGetInvalidUserReturnsEmptyResults() {
            $following = new \Cjhbtn\Periscopr\Api\Requests\Following([
                "user_id" => "-1"
            ]);
            $response = $this->client->execute($following);
            $this->assertEquals(200, $response->getStatusCode());
            $this->assertInstanceOf("Cjhbtn\\Periscopr\\Api\\Responses\\Following", $response);
            $this->assertEmpty($response->results);
        }

        /**
         * Test that fetching following users for the current
         * user id returns the correct response with an
         * array of User models in results
         */
        public function testGetMyFollowingUsersReturnsResults() {
            $following = new \Cjhbtn\Periscopr\Api\Requests\Following([
                "user_id" => $this->user_id
            ]);
            $response = $this->client->execute($following);
            $this->assertEquals(200, $response->getStatusCode());
            $this->assertInstanceOf("Cjhbtn\\Periscopr\\Api\\Responses\\Following", $response);
            $this->assertArrayHasKey(0, $response->results);
            $this->assertInstanceOf("Cjhbtn\\Periscopr\\Api\\Models\\User", $response->results[0]);
        }
    }