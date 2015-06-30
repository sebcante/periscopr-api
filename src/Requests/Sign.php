<?php namespace Cjhbtn\Periscopr\Api\Requests;

class Sign extends BaseRequest {

    private $allowed_params = [
        /* The contents of the message */
        'body' => true,

        /* The PubNub UUID */
        'uuid' => true,

        /* The version - currently 2 */
        'v' => true,

        /* The PubNub NTP position (liveFrame??) */
        'ntpForLiveFrame' => true,

        /* The Unix timestamp of the message */
        'timestamp' => true,

        /*
         * The PubNub Message Type:
         *
         *   UNKNOWN: 0,
         *   CHAT: 1,
         *   HEART: 2,
         *   JOIN: 3,
         *   LOCATION: 4,
         *   BROADCAST_ENDED: 5,
         *   INVITE_FOLLOWERS: 6,
         *   BROADCAST_STARTED_LOCALLY: 7,
         *   BROADCASTER_UPLOADED_REPLAY: 8,
         *   TIMESTAMP: 9,
         *   LOCAL_PROMPT_TO_FOLLOW_BROADCASTER: 10,
         *   LOCAL_PROMPT_TO_SHARE_BROADCAST: 11,
         *   BROADCASTER_BLOCKED_VIEWER: 12,
         *   SUBSCRIBER_SHARED_ON_TWITTER: 13
         */
        'type' => true,

        /* The Base64-encoded signer_token value from AccessChannel */
        'signer_token' => true,

        /* Periscope User ID */
        'remoteID' => true,

        /* The participant index integer from AccessChannel */
        'participant_index' => true,

        /* Periscope Username */
        'username' => true,

        /* Periscope Display Name */
        'displayName' => true,

        /* The PubNub NTP position (broadcasterFrame??) */
        'ntpForBroadcasterFrame' => true
    ];

    /**
     * Class constructor
     *
     */
    public function __construct($params = []) {
        $this->endpoint = 'https://signer.periscope.tv/sign';
        $this->payload_type = 'json';
        foreach ($this->allowed_params as $name => $required) {
            if (!isset($params[$name]) && $required) {
                throw new \InvalidArgumentException("Missing required parameter: $name");
            }
            elseif (isset($params[$name])) {
                $this->parameters[$name] = $params[$name];
            }
        }
        $this->response = 'Cjhbtn\\Periscopr\\Api\\Responses\\Sign';
    }
}