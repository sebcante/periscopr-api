<?php namespace Cjhbtn\Periscopr\Api\Models;

class ReplayCookie extends BaseModel {

    /** @var  string $Name */
    public $Name;

    /** @var  string $Value */
    public $Value;

    /** @var  string $Path */
    public $Path;

    /** @var  string $Domain */
    public $Domain;

    /** @var  string $Expires */
    public $Expires;

    /** @var  string $RawExpires */
    public $RawExpires;

    /** @var  integer $MaxAge */
    public $MaxAge;

    /** @var  boolean $Secure */
    public $Secure;

    /** @var  boolean $HttpOnly */
    public $HttpOnly;

    /** @var  string $Raw */
    public $Raw;

    /** @var  string $Unparsed */
    public $Unparsed;

}