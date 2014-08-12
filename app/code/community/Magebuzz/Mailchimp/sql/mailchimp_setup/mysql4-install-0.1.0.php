<?php
$installer = $this;
$installer->startSetup();
$installer->run("
	-- DROP TABLE IF EXISTS {$this->getTable('mailchimp')};
	CREATE TABLE {$this->getTable('mailchimp')} (
		`mailchimp_id` int(11) unsigned NOT NULL auto_increment,
		`first_name` varchar(255) NOT NULL default '',
		`last_name` varchar(255) NOT NULL default '',
		`email` varchar(255) NOT NULL default '',
		`status` smallint(6) NOT NULL default '0',
		`created_time` datetime NULL,
		`update_time` datetime NULL,
		PRIMARY KEY (`mailchimp_id`)
	) ENGINE=InnoDB DEFAULT CHARSET=utf8;
");

$installer->endSetup(); 