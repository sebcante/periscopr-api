<?php

class SetSettingsTest extends BaseTest {

    /**
     * Test setting the user settings returns success
     */
    public function testSetSettingsReturnsSuccess() {
        $settingsRequest = new \Cjhbtn\Periscopr\Api\Requests\SetSettings([
            "settings" => [
                "auto_save_to_camera" => false,
                "push_to_new_follower" => false
            ]
        ]);
        $response = $this->client->execute($settingsRequest);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf('Cjhbtn\\Periscopr\\Api\\Responses\\SetSettings', $response);
        $this->assertEquals(true, $response->success);
    }
}