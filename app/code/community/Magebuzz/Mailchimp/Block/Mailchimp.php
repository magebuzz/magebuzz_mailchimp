<?php

class Magebuzz_Mailchimp_Block_Mailchimp extends Mage_Core_Block_Template {
  public function _prepareLayout() {
    return parent::_prepareLayout();
  }

  public function getMailchimp() {
    if (!$this->hasData('mailchimp')) {
      $this->setData('mailchimp', Mage::registry('mailchimp'));
    }

    return $this->getData('mailchimp');
  }

  public function getFormAction() {
    return $this->getUrl('mailchimp/list/save');
  }

}