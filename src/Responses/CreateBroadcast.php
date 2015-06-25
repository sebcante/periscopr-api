<?php namespace Cjhbtn\Periscopr\Api\Responses;

class CreateBroadcast extends BaseResponse {

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

    /** @var  \Cjhbtn\Periscopr\Api\Models\Broadcast $broadcast */
    public $broadcast;

    /** @var  string $protocol */
    public $protocol;

    /** @var  string $host */
    public $host;

    /** @var  string $application */
    public $application;

    /** @var  string $stream_name */
    public $stream_name;

    /** @var  string $credential */
    public $credential;

    /** @var  string $private_protocol */
    public $private_protocol;

    /** @var  integer $private_port */
    public $private_port;

    /** @var  string $upload_url */
    public $upload_url;

    /** @var  string $thumbnail_upload_url */
    public $thumbnail_upload_url;

    /** @var  boolean $can_share_twitter */
    public $can_share_twitter;

}