<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

class Company {
  public function __construct($data) {
    $this->name= $data->name;
    $this->catchPhrase = $data->catchPhrase;
    $this->bs = $data->bs;
  }

  public function render() {
    ob_start();
    include 'company.tpl.php';

    return ob_get_clean();
  }

  public function getName() {
    return $this->name;
  }

  public function getCatchPhrase() {
    return $this->catchPhrase;
  }

  public function getBs() {
    return $this->bs; 
  }
}
