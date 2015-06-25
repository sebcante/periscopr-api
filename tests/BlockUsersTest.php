<?php

class BlockedUsersTest extends BaseTest {

    /**
     * Test getting blocked users returns success
     */
    public function testGetBlockedUsersReturnsSuccess() {
        $blocklistRequest = new \Cjhbtn\Periscopr\Api\Requests\BlockUsers();
        $response = $this->client->execute($blocklistRequest);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf('Cjhbtn\\Periscopr\\Api\\Responses\\BlockUsers', $response);
    }
}