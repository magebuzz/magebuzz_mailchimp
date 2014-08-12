<?php

class Magebuzz_Mailchimp_Model_Mysql4_Mailchimp_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract {
  public function _construct() {
    parent::_construct();
    $this->_init('mailchimp/mailchimp');
  }
}