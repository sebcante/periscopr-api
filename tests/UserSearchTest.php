<?php

class UserSearchTest extends BaseTest {

    /**
     * Test searching a short string returns Bad Request error
     */
    public function testShortSearchReturnsError() {
        $searchRequest = new \Cjhbtn\Periscopr\Api\Requests\UserSearch([
            "search" => "a"
        ]);
        $response = $this->client->execute($searchRequest);
        $this->assertEquals(400, $response->getStatusCode());
    }

    /**
     * Test searching a valid username
     */
    public function testSearchValidUsernameReturnsResult() {
        $searchRequest = new \Cjhbtn\Periscopr\Api\Requests\UserSearch([
            "search" => "periscopr_uk"
        ]);
        $response = $this->client->execute($searchRequest);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertInstanceOf('Cjhbtn\\Periscopr\\Api\\Responses\\UserSearch', $response);
        $this->assertNotEmpty($response->results);
        $this->assertArrayHasKey(0, $response->results);
    }
}