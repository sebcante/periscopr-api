<?php namespace Cjhbtn\Periscopr\Api\Requests;

class MapBroadcastFeed extends BaseRequest {

    private $allowed_params = [
        'count' => false,
        'since' => false,
    ];

    /**
    * Class constructor
    *
    */
    public function __construct($params = []) {
        $this->endpoint = 'mapBroadcastFeed';
        $this->payload_type = 'json';
        foreach ($this->allowed_params as $name => $required) {
            if (!isset($params[$name]) && $required) {
                throw new \InvalidArgumentException("Missing required parameter: $name");
            }
            elseif (isset($params[$name])) {
                $this->parameters[$name] = $params[$name];
            }
        }
        $this->response = 'Cjhbtn\\Periscopr\\Api\\Responses\\MapBroadcastFeed';
    }
}