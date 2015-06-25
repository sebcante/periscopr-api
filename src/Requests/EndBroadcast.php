<?php namespace Cjhbtn\Periscopr\Api\Requests;

class EndBroadcast extends BaseRequest {

    private $allowed_params = [
        'broadcast_id' => true,
        'log' => true,
    ];

    /**
    * Class constructor
    *
    */
    public function __construct($params = []) {
        $this->endpoint = 'endBroadcast';
        $this->payload_type = 'multipart';
        foreach ($this->allowed_params as $name => $required) {
            if (!isset($params[$name]) && $required) {
                throw new \InvalidArgumentException("Missing required parameter: $name");
            }
            elseif (isset($params[$name])) {
                $this->parameters[$name] = $params[$name];
            }
        }
        $this->response = 'Cjhbtn\\Periscopr\\Api\\Responses\\EndBroadcast';
    }
}