<?php namespace Cjhbtn\Periscopr\Api;

use Cjhbtn\Periscopr\Api\Requests\ApiRequest;
use Cjhbtn\Periscopr\Api\Responses\ApiResponse;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;

/**
 * Class Client
 *
 * @package Cjhbtn\Periscopr
 */
class Client {

    /** @var GuzzleClient $guzzle */
    protected $guzzle;

    /** @var string $api_uri */
    protected $api_uri = 'https://api.periscope.tv/api/v2/';

    /** @var array $default_params */
    protected $default_params = [ ];

    /**
     * Class constructor
     *
     */
    public function __construct() {
        $this->guzzle = $this->createGuzzle();
    }

    /**
     * Set the authentication cookie for authenticated requests
     *
     * @param string $cookie
     */
    public function setCookie($cookie) {
        $this->default_params['cookie'] = $cookie;
    }

    /**
     * Execute a command against the API
     *
     * @param ApiRequest $request
     * @return ApiResponse
     */
    public function execute(ApiRequest $request) {
        $class_name = $request->getResponseHandler();
        $handler = new $class_name();

        try {
            $response = $this->guzzle->request(
                "POST",
                $request->getEndpoint(),
                $this->encodeParameters($request)
            );
            $handler->setStatusCode($response->getStatusCode());
            if ($response->getStatusCode() == 200) {
                $handler->processResponse(
                    json_decode(
                        $response->getBody()->getContents(),
                        true
                    )
                );
            }
        }
        catch (ClientException $ex) {
            $handler->setStatusCode($ex->getCode());
        }
        catch (ServerException $ex) {
            $handler->setStatusCode($ex->getCode());
        }

        return $handler;
    }

    /**
     * Create a new instance of the Guzzle client
     *
     * @return GuzzleClient
     */
    protected function createGuzzle() {
        return new GuzzleClient([
            'base_uri' => $this->api_uri
        ]);
    }

    /**
     * JSON encode the parameters as the body of the request
     *
     * @param ApiRequest $request
     * @return array
     * @throws \RuntimeException
     */
    protected function encodeParameters(ApiRequest $request) {
        if ($request->getPayloadType() == 'json') {
            return ['json' => array_merge($this->default_params, $request->getParameters())];
        }
        if ($request->getPayloadType() == 'multipart') {
            return ['multipart' => $this->buildMultipart(array_merge($this->default_params, $request->getParameters()))];
        }
        if ($request->getPayloadType() == 'query') {
            return ['query' => $request->getParameters()];
        }
        throw new \RuntimeException("Request specified an unknown payload type");
    }

    /**
     * Build parameter array for a Multipart request
     *
     * @param array $params
     * @return array
     */
    protected function buildMultipart($params) {
        $multipartParams = [ ];
        foreach ($params as $name => $value) {
            $param = ['name' => $name, 'contents' => $value];
        }
        return $multipartParams;
    }
}