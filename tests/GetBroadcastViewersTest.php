<?php

    class GetBroadcastViewersTest extends BaseTest
    {

        /**
         * Test that fetching viewers for an invalid broadcast
         * id returns Not Found error
         *
         */
        public function testGetInvalidBroadcastIdNotFound() {
            $viewers = new \Cjhbtn\Periscopr\Api\Requests\GetBroadcastViewers([
                "broadcast_id" => "-1"
            ]);
            $response = $this->client->execute($viewers);
            $this->assertEquals(404, $response->getStatusCode());
        }

        /*
         * @todo Need to find a way of testing live broadcast ID's for validity

        public function testGetViewersTemp() {
            $viewers = new \Cjhbtn\Periscopr\Requests\GetBroadcastViewers([
                "broadcast_id" => "14934268"
            ]);
            $response = $this->client->execute($viewers);
            $this->assertEquals(200, $response->getStatusCode());
            $this->assertInstanceOf("Cjhbtn\\Periscopr\\Api\\Responses\\GetBroadcastViewers", $response);
            $this->assertArrayHasKey(0, $response->live);
            $this->assertInstanceOf("Cjhbtn\\Periscopr\\Api\\Models\\User", $response->live[0]);
        }

        */
    }
