<?php namespace Cjhbtn\Periscopr\Api\Models;

class StatsViewing extends BaseModel {

    /** @var  float $FrameRate_min */
    public $FrameRate_min;

    /** @var  float $FrameRate_max */
    public $FrameRate_max;

    /** @var  float $FrameRate_mean */
    public $FrameRate_mean;

    /** @var  float $FrameRate_stddev */
    public $FrameRate_stddev;

    /** @var  float $pn_connect_t */
    public $pn_connect_t;

    /** @var  integer $pn_pres_res */
    public $pn_pres_res;

    /** @var  integer $pn_msg_drop */
    public $pn_msg_drop;

    /** @var  float $pn_disconnect_t */
    public $pn_disconnect_t;

    /** @var  integer $pn_msg_sent */
    public $pn_msg_sent;

    /** @var  integer $pn_msg_rec */
    public $pn_msg_rec;

    /** @var  float $BatteryDrainPerMinute */
    public $BatteryDrainPerMinute;

    /** @var  integer $LostConnection_count */
    public $LostConnection_count;

}