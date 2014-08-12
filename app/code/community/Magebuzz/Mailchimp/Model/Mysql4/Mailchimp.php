<?php

class Magebuzz_Mailchimp_Model_Mysql4_Mailchimp extends Mage_Core_Model_Mysql4_Abstract {
  public function _construct() {
    // Note that the mailchimp_id refers to the key field in your database table.
    $this->_init('mailchimp/mailchimp', 'mailchimp_id');
  }
}