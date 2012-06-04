-- Create syntax for TABLE 'ps_accounts'
CREATE TABLE `ps_accounts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `budget_amount` float DEFAULT NULL,
  `budget_period` enum('WEEK','MONTH','QUARTER','YEAR') DEFAULT NULL,
  `budget_type` enum('MIN','MAX') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Create syntax for TABLE 'ps_categories'
CREATE TABLE `ps_categories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Create syntax for TABLE 'ps_transactions'
CREATE TABLE `ps_transactions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `amount` float DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT NULL,
  `category_id` int(11) unsigned DEFAULT NULL,
  `account_id` int(11) unsigned DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
