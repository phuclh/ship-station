<?php


namespace MichaelB\ShipStation\Models;


class Account extends BaseModel {
    /** @var string */
    protected $firstName;
    /** @var string */
    protected $lastName;
    /** @var string */
    protected $email;
    /** @var string */
    protected $password;
    /** @var string */
    protected $companyName;
    /** @var string */
    protected $addr1;
    /** @var string */
    protected $addr2;
    /** @var string */
    protected $city;
    /** @var string */
    protected $state;
    /** @var string */
    protected $zip;
    /** @var string */
    protected $countryCode;
    /** @var string */
    protected $phone;
}