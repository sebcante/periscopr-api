<?php namespace Cjhbtn\Periscopr\Api\Requests;

class UserBroadcasts extends BaseRequest {

    private $allowed_params = [
        'user_id' => true,
        'all' => false,
    ];

    /**
    * Class constructor
    *
    */
    public function __construct($params = []) {
        $this->endpoint = 'userBroadcasts';
        $this->payload_type = 'json';
        foreach ($this->allowed_params as $name => $required) {
            if (!isset($params[$name]) && $required) {
                throw new \InvalidArgumentException("Missing required parameter: $name");
            }
            elseif (isset($params[$name])) {
                $this->parameters[$name] = $params[$name];
            }
        }
        $this->response = 'Cjhbtn\\Periscopr\\Api\\Responses\\UserBroadcasts';
    }
}