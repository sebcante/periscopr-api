<?php namespace Cjhbtn\Periscopr\Api\Requests;

/**
 * Interface ApiRequest
 *
 * @package Cjhbtn\Periscopr\Api\Requests
 */
interface ApiRequest {

    /**
     * Returns the API endpoint for the command
     *
     * @return string
     */
    public function getEndpoint();

    /**
     * Returns the parameters for the API command
     *
     * @return array
     */
    public function getParameters();

    /**
     * Returns the API response handler object name
     *
     * @return \Cjhbtn\Periscopr\Api\Responses\ApiResponse
     */
    public function getResponseHandler();

    /**
     * Returns the Payload type for the parameters on the endpoint
     *
     * @return string
     */
    public function getPayloadType();
}