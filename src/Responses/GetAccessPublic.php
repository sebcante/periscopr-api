<?php namespace Cjhbtn\Periscopr\Api\Responses;

class GetAccessPublic extends BaseResponse {

    /** @var  string $subscriber */
    public $subscriber;

    /** @var  string $publisher */
    public $publisher;

    /** @var  string $auth_token */
    public $auth_token;

    /** @var  string $signer_key */
    public $signer_key;

    /** @var  string $signer_token */
    public $signer_token;

    /** @var  integer $participant_index */
    public $participant_index;

    /** @var  string $channel */
    public $channel;

    /** @var  boolean $read_only */
    public $read_only;

    /** @var  boolean $should_log */
    public $should_log;

    /** @var  boolean $should_verify_signature */
    public $should_verify_signature;

    /** @var  string $access_token */
    public $access_token;

    /** @var  array of integer $key */
    public $key;

    /** @var  string $endpoint */
    public $endpoint;

    /** @var  string $session */
    public $session;

    /** @var  string $replay_url */
    public $replay_url;

    /** @var  array of ReplayCookie $cookies */
    public $cookies;

    /** @var  string $type */
    public $type;

    /** @var  string $hls_url */
    public $hls_url;

    /** @var  string $https_hls_url */
    public $https_hls_url;

}