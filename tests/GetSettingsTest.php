<?php

class GetSettingsTest extends BaseTest {

    /**
     * Test getting the user settings returns success
     */
    public function testGetSettingsReturnsSuccess() {
        $settingsRequest = new \Cjhbtn\Periscopr\Api\Requests\GetSettings();
        $response = $this->client->execute($settingsRequest);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf('Cjhbtn\\Periscopr\\Api\\Responses\\GetSettings', $response);
    }
}