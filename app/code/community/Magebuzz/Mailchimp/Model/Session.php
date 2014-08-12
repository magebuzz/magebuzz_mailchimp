<?php

class Magebuzz_Mailchimp_Model_Session extends Mage_Core_Model_Abstract {
  public function _construct() {
    parent::_construct();
    $this->_init('mailchimp');
  }
}