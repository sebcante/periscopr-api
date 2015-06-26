<?php namespace Cjhbtn\Periscopr\Api;

use Cjhbtn\Periscopr\Api\Requests\ApiRequest;
use Cjhbtn\Periscopr\Api\Responses\ApiResponse;

interface ClientInterface {

    /**
     * Set the authentication cookie for authenticated requests
     *
     * @param string $cookie
     */
    public function setCookie($cookie);

    /**
     * Execute a command against the API
     *
     * @param ApiRequest $request
     * @return ApiResponse
     */
    public function execute(ApiRequest $request);
}