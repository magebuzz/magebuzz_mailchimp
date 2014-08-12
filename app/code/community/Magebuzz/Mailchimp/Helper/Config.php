<?php

class Magebuzz_Mailchimp_Helper_Config extends Mage_Core_Helper_Abstract {
  const XML_PATH_ACTIVE_MAILCHIMP = 'mailchimp/general/active_mailchimp';
  const XML_PATH_SHOW_FIRSTNAME = 'mailchimp/general/show_firstname';
  const XML_PATH_SHOW_LASTNAME = 'mailchimp/general/show_lastname';
  const XML_PATH_GET_LIST_ID = 'mailchimp/general/list';
  const XML_PATH_GET_API_KEY = 'mailchimp/general/apikey';

  public function isActiveMailchimp() {
    return (int)Mage::getStoreConfig(self::XML_PATH_ACTIVE_MAILCHIMP);
  }

  public function isShowFirstName() {
    return (int)Mage::getStoreConfig(self::XML_PATH_SHOW_FIRSTNAME);
  }

  public function isShowLastName() {
    return (int)Mage::getStoreConfig(self::XML_PATH_SHOW_LASTNAME);
  }

  public function getListId() {
    return (string)Mage::getStoreConfig(self::XML_PATH_GET_LIST_ID);
  }

  public function getApiKey() {
    return (string)Mage::getStoreConfig(self::XML_PATH_GET_API_KEY);
  }
}