<?php

class FeaturedBroadcastFeedTest extends BaseTest {

    /**
     * Test that fetching a list of featured broadcasts
     * returns a valid response and result list
     */
    public function testGetFeaturedFeedReturnsList() {
        $listRequest = new \Cjhbtn\Periscopr\Api\Requests\FeaturedBroadcastFeed();
        $response = $this->client->execute($listRequest);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf("Cjhbtn\\Periscopr\\Api\\Responses\\FeaturedBroadcastFeed", $response);
    }
}