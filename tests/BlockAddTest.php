<?php

class BlockAddTest extends BaseTest {

    /**
     * Test blocking a valid Periscope user_id returns true
     */
    public function testBlockingValidUserReturnsTrue() {
        $blockRequest = new \Cjhbtn\Periscopr\Api\Requests\BlockAdd([
            "to" => "9"
        ]);
        $response = $this->client->execute($blockRequest);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf('Cjhbtn\\Periscopr\\Api\\Responses\\BlockAdd', $response);
        $this->assertEquals(true, $response->success);
    }
}