<?php namespace Cjhbtn\Periscopr\Api\Responses;

class LoginTwitter extends BaseResponse {

    /** @var  string $cookie */
    public $cookie;

    /** @var  \Cjhbtn\Periscopr\Api\Models\User $user */
    public $user;

    /** @var  string $suggested_username */
    public $suggested_username;

    /** @var  \Cjhbtn\Periscopr\Api\Models\UserSettings $settings */
    public $settings;

}