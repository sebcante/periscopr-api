<?php

class BlockRemoveTest extends BaseTest {

    /**
     * Test unblocking a valid Periscope user_id returns true
     */
    public function testUnblockingValidUserReturnsTrue() {
        $blockRequest = new \Cjhbtn\Periscopr\Api\Requests\BlockRemove([
            "to" => "9"
        ]);
        $response = $this->client->execute($blockRequest);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf('Cjhbtn\\Periscopr\\Api\\Responses\\BlockRemove', $response);
        $this->assertEquals(true, $response->success);
    }
}