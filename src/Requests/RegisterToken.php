<?php namespace Cjhbtn\Periscopr\Api\Requests;

class RegisterToken extends BaseRequest {

    private $allowed_params = [
        'token' => true,
        'device_type' => true,
        'model' => true,
        'os' => true,
        'locale' => true,
        'build' => true,
        'bundle_id' => true,
        'vendor_id' => true,
    ];

    /**
    * Class constructor
    *
    */
    public function __construct($params = []) {
        $this->endpoint = 'registerToken';
        $this->payload_type = 'json';
        foreach ($this->allowed_params as $name => $required) {
            if (!isset($params[$name]) && $required) {
                throw new \InvalidArgumentException("Missing required parameter: $name");
            }
            elseif (isset($params[$name])) {
                $this->parameters[$name] = $params[$name];
            }
        }
        $this->response = 'Cjhbtn\\Periscopr\\Api\\Responses\\RegisterToken';
    }
}