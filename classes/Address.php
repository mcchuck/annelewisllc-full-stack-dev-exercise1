<?php

/**
 * Address: class representing a user's address
 */ 
class Address {
  /**
   * Build Address object with passed in json
   */ 
  public function __construct($data) {
    $this->street = $data->street;
    $this->suite = $data->suite;
    $this->city = $data->city;
    $this->zipcode = $data->zipcode;
    $this->geo['lat'] = $data->geo->lat;
    $this->geo['lng'] = $data->geo->lng;
  }

  /**
   * Render address as html with template
   */
  public function render() {
    ob_start(); // start ouput buffering
    include 'templates/address.tpl.php';

    return ob_get_clean();
  }

  /**
   * Getter methods
   */
  public function getStreet() {
    return $this->street;
  }

  public function getSuite() {
    return $this->suite;
  }

  public function getCity() {
    return $this->city; 
  }

  public function getZipcode() {
    return $this->zipcode;
  }

  public function getGeo() {
    return $this->geo;
  }
}
