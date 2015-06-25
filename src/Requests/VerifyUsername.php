<?php namespace Cjhbtn\Periscopr\Api\Requests;

class VerifyUsername extends BaseRequest {

    private $allowed_params = [
        'session_key' => false,
        'session_secret' => false,
        'username' => true,
        'display_name' => true,
    ];

    /**
    * Class constructor
    *
    */
    public function __construct($params = []) {
        $this->endpoint = 'verifyUsername';
        $this->payload_type = 'json';
        foreach ($this->allowed_params as $name => $required) {
            if (!isset($params[$name]) && $required) {
                throw new \InvalidArgumentException("Missing required parameter: $name");
            }
            elseif (isset($params[$name])) {
                $this->parameters[$name] = $params[$name];
            }
        }
        $this->response = 'Cjhbtn\\Periscopr\\Api\\Responses\\VerifyUsername';
    }
}