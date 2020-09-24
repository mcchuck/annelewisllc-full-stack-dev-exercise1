<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

class User {
  public function __construct($data) {
    $this->name = $data->name;
    $this->username = $data->username;
    $this->email = $data->email;
    $this->address = new Address($data->address);
    $this->phone = $data->phone;
    $this->website = $data->website;
    $this->company = new Company($data->company);
  }

  public function render() {
    ob_start();
    include 'templates/user.tpl.php';

    return ob_get_clean();
  }

  public function getName() {
    return $this->name;
  }

  public function getUsername() {
    return $this->username;
  }

  public function getEmail() {
    return $this->email; 
  }

  public function getAddress() {
    return $this->address;
  }

  public function getPhone() {
    return $this->phone;
  }

  public function getWebsite() {
    return $this->website;
  }

  public function getCompany() {
    return $this->company;
  }
}
