<?php

class FollowTest extends BaseTest {

    /**
     * Test following an invalid Periscope user_id
     */
    public function testFollowingInvalidUserReturnsFalse() {
        $followRequest = new \Cjhbtn\Periscopr\Api\Requests\Follow([
            "user_id" => "-1"
        ]);
        $response = $this->client->execute($followRequest);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf('Cjhbtn\\Periscopr\\Api\\Responses\\Follow', $response);
        $this->assertEquals(false, $response->success);
    }

    /**
     * Test following a valid Periscope user_id returns true
     */
    public function testFollowingValidUserReturnsTrue() {
        $followRequest = new \Cjhbtn\Periscopr\Api\Requests\Follow([
            "user_id" => "9"
        ]);
        $response = $this->client->execute($followRequest);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf('Cjhbtn\\Periscopr\\Api\\Responses\\Follow', $response);
        $this->assertEquals(true, $response->success);
    }
}