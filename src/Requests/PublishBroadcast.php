<?php namespace Cjhbtn\Periscopr\Api\Requests;

class PublishBroadcast extends BaseRequest {

    private $allowed_params = [
        'broadcast_id' => true,
        'session_key' => true,
        'session_secret' => true,
        'friend_chat' => true,
        'lock' => true,
        'status' => true,
        'has_location' => true,
        'lat' => true,
        'lng' => true,
    ];

    /**
    * Class constructor
    *
    */
    public function __construct($params = []) {
        $this->endpoint = 'publishBroadcast';
        $this->payload_type = 'json';
        foreach ($this->allowed_params as $name => $required) {
            if (!isset($params[$name]) && $required) {
                throw new \InvalidArgumentException("Missing required parameter: $name");
            }
            elseif (isset($params[$name])) {
                $this->parameters[$name] = $params[$name];
            }
        }
        $this->response = 'Cjhbtn\\Periscopr\\Api\\Responses\\PublishBroadcast';
    }
}