<?php namespace Cjhbtn\Periscopr\Api\Responses;

class SuggestedPeople extends BaseResponse {

    /** @var  array of User $twitter */
    public $twitter;

    /** @var  array of User $hearted */
    public $hearted;

    /** @var  array of User $featured */
    public $featured;

}