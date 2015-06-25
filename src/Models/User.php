<?php namespace Cjhbtn\Periscopr\Api\Models;

class User extends BaseModel {

    /** @var  string $class_name */
    public $class_name;

    /** @var  string $id */
    public $id;

    /** @var  string $created_at */
    public $created_at;

    /** @var  string $updated_at */
    public $updated_at;

    /** @var  boolean $is_beta_user */
    public $is_beta_user;

    /** @var  boolean $is_employee */
    public $is_employee;

    /** @var  boolean $is_twitter_verified */
    public $is_twitter_verified;

    /** @var  string $twitter_screen_name */
    public $twitter_screen_name;

    /** @var  string $username */
    public $username;

    /** @var  string $display_name */
    public $display_name;

    /** @var  string $description */
    public $description;

    /** @var  \Cjhbtn\Periscopr\Api\Models\ProfileImageUrls[] $profile_image_urls */
    public $profile_image_urls = [ ];

    /** @var  string $initials */
    public $initials;

    /** @var  integer $n_followers */
    public $n_followers;

    /** @var  integer $n_following */
    public $n_following;

}