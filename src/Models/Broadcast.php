<?php namespace Cjhbtn\Periscopr\Api\Models;

class Broadcast extends BaseModel {

    /** @var  string $class_name */
    public $class_name;

    /** @var  string $id */
    public $id;

    /** @var  string $created_at */
    public $created_at;

    /** @var  string $updated_at */
    public $updated_at;

    /** @var  string $user_id */
    public $user_id;

    /** @var  string $user_display_name */
    public $user_display_name;

    /** @var  string $profile_image_url */
    public $profile_image_url;

    /** @var  string $state */
    public $state;

    /** @var  boolean $is_locked */
    public $is_locked;

    /** @var  boolean $friend_chat */
    public $friend_chat;

    /** @var  string $start */
    public $start;

    /** @var  string $ping */
    public $ping;

    /** @var  boolean $has_location */
    public $has_location;

    /** @var  string $city */
    public $city;

    /** @var  string $country */
    public $country;

    /** @var  string $country_state */
    public $country_state;

    /** @var  string $iso_code */
    public $iso_code;

    /** @var  float $ip_lat */
    public $ip_lat;

    /** @var  float $ip_lng */
    public $ip_lng;

    /** @var  integer $width */
    public $width;

    /** @var  integer $height */
    public $height;

    /** @var  string $image_url */
    public $image_url;

    /** @var  string $image_url_small */
    public $image_url_small;

    /** @var  string $status */
    public $status;

    /** @var  boolean $available_for_replay */
    public $available_for_replay;

    /** @var  boolean $featured */
    public $featured;

}