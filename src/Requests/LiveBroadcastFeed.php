<?php namespace Cjhbtn\Periscopr\Api\Requests;

class LiveBroadcastFeed extends BaseRequest {

    private $allowed_params = [
    ];

    /**
    * Class constructor
    *
    */
    public function __construct($params = []) {
        $this->endpoint = 'liveBroadcastFeed';
        $this->payload_type = 'json';
        foreach ($this->allowed_params as $name => $required) {
            if (!isset($params[$name]) && $required) {
                throw new \InvalidArgumentException("Missing required parameter: $name");
            }
            elseif (isset($params[$name])) {
                $this->parameters[$name] = $params[$name];
            }
        }
        $this->response = 'Cjhbtn\\Periscopr\\Api\\Responses\\LiveBroadcastFeed';
    }
}