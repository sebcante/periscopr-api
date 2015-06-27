<?php namespace Cjhbtn\Periscopr\Api\Requests;

class GetUserPublic extends BaseRequest {

    private $allowed_params = [
        'user_id' => true,
    ];

    /**
    * Class constructor
    *
    */
    public function __construct($params = []) {
        $this->endpoint = 'getUserPublic';
        $this->payload_type = 'query';
        foreach ($this->allowed_params as $name => $required) {
            if (!isset($params[$name]) && $required) {
                throw new \InvalidArgumentException("Missing required parameter: $name");
            }
            elseif (isset($params[$name])) {
                $this->parameters[$name] = $params[$name];
            }
        }
        $this->response = 'Cjhbtn\\Periscopr\\Api\\Responses\\GetUserPublic';
    }
}