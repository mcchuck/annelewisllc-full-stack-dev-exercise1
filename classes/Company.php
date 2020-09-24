<?php

/**
 * Company: class representing a user's company
 */
class Company {
  /**
   * Build Company object with passed in json
   */
  public function __construct($data) {
    $this->name= $data->name;
    $this->catchPhrase = $data->catchPhrase;
    $this->bs = $data->bs;
  }

  /**
   * Render company as html with template
   */
  public function render() {
    ob_start();
    include 'templates/company.tpl.php'; // start output buffering

    return ob_get_clean();
  }

  /**
   * Getter methods
   */
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
