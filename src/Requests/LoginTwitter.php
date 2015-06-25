<?php namespace Cjhbtn\Periscopr\Api\Requests;

class LoginTwitter extends BaseRequest {

    private $allowed_params = [
        'session_secret' => true,
        'session_key' => true,
        'user_id' => false,
        'user_name' => false,
        'phone_number' => false,
        'vendor_id' => false,
        'bundle_id' => false,
    ];

    /**
    * Class constructor
    *
    */
    public function __construct($params = []) {
        $this->endpoint = 'loginTwitter';
        $this->payload_type = 'json';
        foreach ($this->allowed_params as $name => $required) {
            if (!isset($params[$name]) && $required) {
                throw new \InvalidArgumentException("Missing required parameter: $name");
            }
            elseif (isset($params[$name])) {
                $this->parameters[$name] = $params[$name];
            }
        }
        $this->response = 'Cjhbtn\\Periscopr\\Api\\Responses\\LoginTwitter';
    }
}