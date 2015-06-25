<?php namespace Cjhbtn\Periscopr\Api\Models;

class StatsMeta extends BaseModel {

    /** @var  integer $n_watching */
    public $n_watching;

    /** @var  integer $n_watching_web */
    public $n_watching_web;

    /** @var  integer $n_web_watched */
    public $n_web_watched;

    /** @var  integer $n_replay_watched */
    public $n_replay_watched;

    /** @var  integer $n_watched */
    public $n_watched;

    /** @var  integer $lost_before_end */
    public $lost_before_end;

    /** @var  float $watched_time */
    public $watched_time;

    /** @var  integer $n_hearts */
    public $n_hearts;

    /** @var  integer $n_replay_hearts */
    public $n_replay_hearts;

    /** @var  integer $n_comments */
    public $n_comments;

    /** @var  float $watched_time_calculated */
    public $watched_time_calculated;

    /** @var  float $watched_time_implied */
    public $watched_time_implied;

    /** @var  float $join_time_average */
    public $join_time_average;

    /** @var  integer $join_time_count */
    public $join_time_count;

}