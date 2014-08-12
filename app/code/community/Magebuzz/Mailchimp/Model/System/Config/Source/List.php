<?php

class Magebuzz_Mailchimp_Model_System_Config_Source_List {

  /**
   * Lists for API key will be stored here
   *
   * @access protected
   * @var array Email lists for given API key
   */
  protected $_lists = null;

  /**
   * Load lists and store on class property
   *
   * @return void
   */
  public function __construct() {
    if (is_null($this->_lists)) {
      $this->_lists = Mage::getSingleton('mailchimp/api')->lists();
    }
  }

  /**
   * Options getter
   *
   * @return array
   */
  public function toOptionArray() {
    $lists = array();
    if (is_array($this->_lists)) {
      foreach ($this->_lists['data'] as $list) {
        $lists [] = array('value' => $list['id'], 'label' => $list['name'] . ' (' . $list['stats']['member_count'] . ' ' . Mage::helper('mailchimp')->__('members') . ')');
      }
    } else {
      $lists [] = array('value' => '', 'label' => Mage::helper('mailchimp')->__('--- No data ---'));
    }

    return $lists;
  }

}
