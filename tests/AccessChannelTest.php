<?php

    class AccessChannelTest extends BaseTest
    {

        /**
         * Test that fetching details for an invalid broadcast
         * id returns Not Found error
         *
         */
        public function testGetInvalidBroadcastDetailsReturns404() {
            $accessDetails = new \Cjhbtn\Periscopr\Api\Requests\AccessChannel([
                "broadcast_id" => "-1",
                "from_push" => false,
                "uses_sessions" => true,
                "entry_ticket" => ""
            ]);
            $response = $this->client->execute($accessDetails);
            $this->assertEquals(404, $response->getStatusCode());
        }

        /**
         * @todo Need to find a way of testing live broadcast ID's for validity
         */
    }
