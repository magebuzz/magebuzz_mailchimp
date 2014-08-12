<?php

class Magebuzz_Mailchimp_Helper_Oauth2 extends Mage_Core_Helper_Abstract {

  protected $_authorizeUri = "https://login.mailchimp.com/oauth2/authorize";
  protected $_accessTokenUri = "https://login.mailchimp.com/oauth2/token";
  protected $_redirectUri = "http://ebizmarts.com/magento/mailchimp/oauth2/complete.php";
  protected $_clientId = 213915096176;

  public function authorizeRequestUrl() {

    $url = $this->_authorizeUri;
    $redirectUri = urlencode($this->_redirectUri);

    return "{$url}?redirect_uri={$redirectUri}&response_type=code&client_id={$this->_clientId}";
  }
}
