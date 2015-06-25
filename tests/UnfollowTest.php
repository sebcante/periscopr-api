<?php

class UnfollowTest extends BaseTest {

    /**
     * Test unfollowing a valid Periscope user_id returns true
     */
    public function testUnfollowingValidUserReturnsTrue() {
        $unfollowRequest = new \Cjhbtn\Periscopr\Api\Requests\Unfollow([
            "user_id" => "9"
        ]);
        $response = $this->client->execute($unfollowRequest);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf('Cjhbtn\\Periscopr\\Api\\Responses\\Unfollow', $response);
        $this->assertEquals(true, $response->success);
    }
}