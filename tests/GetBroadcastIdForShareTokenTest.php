<?php

    class GetBroadcastIdForShareTokenTest extends BaseTest
    {

        /**
         * Test that fetching details for an invalid share token
         * returns Not Found error
         *
         */
        public function testGetInvalidTokenReturnsError() {
            $broadcastGet = new \Cjhbtn\Periscopr\Api\Requests\GetBroadcastIdForShareToken([
                "token" => "a"
            ]);
            $response = $this->client->execute($broadcastGet);
            $this->assertEquals(400, $response->getStatusCode());
        }

        /**
         * @todo Need to find a way of testing live tokens for validity
         */
    }
