<?php namespace Cjhbtn\Periscopr\Api\Requests;

class GetAccessPublic extends BaseRequest {

    private $allowed_params = [
        'token' => true,
    ];

    /**
    * Class constructor
    *
    */
    public function __construct($params = []) {
        $this->endpoint = 'getAccessPublic';
        $this->payload_type = 'query';
        foreach ($this->allowed_params as $name => $required) {
            if (!isset($params[$name]) && $required) {
                throw new \InvalidArgumentException("Missing required parameter: $name");
            }
            elseif (isset($params[$name])) {
                $this->parameters[$name] = $params[$name];
            }
        }
        $this->response = 'Cjhbtn\\Periscopr\\Api\\Responses\\GetAccessPublic';
    }
}