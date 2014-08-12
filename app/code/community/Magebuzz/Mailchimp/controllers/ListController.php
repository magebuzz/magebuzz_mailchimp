<?php

class Magebuzz_Mailchimp_ListController extends Mage_Core_Controller_Front_Action {

  public function saveAction() {
    $apiKey = Mage::helper('mailchimp/config')->getApiKey();
    $api = new Magebuzz_Mailchimp_Model_MCAPI($apiKey);
    $data = $this->getRequest()->getPost();

    if ($data['first_name']) {
      $first_name = $data['first_name'];
    } else {
      $first_name = "UNDEFINED";
    }

    if ($data['last_name']) {
      $last_name = $data['last_name'];
    } else {
      $last_name = "UNDEFINED";
    }

    $merge_vars = Array('FNAME' => $first_name, 'LNAME' => $last_name, 'INTERESTS' => '');

    $listId = Mage::helper('mailchimp/config')->getListId();
    $result = $api->listSubscribe($listId, $data['email'], $merge_vars, 'html', FALSE);
    $url = Mage::helper('core/url')->getHomeUrl();

    if (!$api->errorCode) {
      Mage::getSingleton('core/session')->addSuccess(Mage::helper('mailchimp')->__('Your submit has been successfully. Thanks you!'));
      Mage::app()->getResponse()->setRedirect($url);
      return;
    } else {
      Mage::getSingleton('core/session')->addError(Mage::helper('mailchimp')->__('Can not submit. Please try again!'));
      Mage::app()->getResponse()->setRedirect($url);
      return;
    }

  }
}