<?php namespace Cjhbtn\Periscopr\Api\Requests;

/**
 * Class BaseRequest
 *
 * @package Cjhbtn\Periscopr\Api\Requests
 */
abstract class BaseRequest implements ApiRequest {

    /** @var array $parameters */
    protected $parameters = [ ];

    /** @var string $endpoint */
    protected $endpoint   = '';

    /** @var string $payload_type */
    protected $payload_type = 'json';

    /** @var \Cjhbtn\Periscopr\Api\Responses\ApiResponse $response */
    protected $response;

    /**
     * Returns the API endpoint for the command
     *
     * @return string
     */
    public function getEndpoint() {
        return $this->endpoint;
    }

    /**
     * Returns the parameters for the API command
     *
     * @return array
     */
    public function getParameters() {
        return $this->parameters;
    }

    /**
     * Returns the API response handler object name
     *
     * @return \Cjhbtn\Periscopr\Api\Responses\ApiResponse
     */
    public function getResponseHandler() {
        return $this->response;
    }

    /**
     * Returns the Payload type for the parameters on the endpoint
     *
     * @return string
     */
    public function getPayloadType() {
        return $this->payload_type;
    }
}