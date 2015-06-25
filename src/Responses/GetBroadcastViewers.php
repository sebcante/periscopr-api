<?php namespace Cjhbtn\Periscopr\Api\Responses;

class GetBroadcastViewers extends BaseResponse {

    /** @var  array of User $live */
    public $live;

    /** @var  array of User $replay */
    public $replay;

    /** @var  integer $n_web_watched */
    public $n_web_watched;

    /** @var  integer $n_replay_watched */
    public $n_replay_watched;

    /** @var  integer $n_watched */
    public $n_watched;

    /** @var  integer $n_hearts */
    public $n_hearts;

    /** @var  integer $n_replay_hearts */
    public $n_replay_hearts;

}