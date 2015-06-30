<?php namespace Cjhbtn\Periscopr\Api\Responses;

class Sign extends BaseResponse {

    /**
     *
     * Returned array elements:
     *  - body
     *  - channel
     *  - displayName
     *  - ntpForBroadcasterFrame
     *  - ntpForLiveFrame
     *  - participant_index
     *  - profileImageURL
     *  - remoteID
     *  - signature
     *  - signer_str_ntpForBroadcasterFrame
     *  - signer_str_ntpForLiveFrame
     *  - signer_str_participant_index
     *  - signer_str_timestamp
     *  - signer_str_type
     *  - signer_str_v
     *  - timestamp
     *  - type
     *  - username
     *  - uuid
     *  - v
     *
     * @var array $message
     */
    public $message;

    public $channel;

}