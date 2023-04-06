ALTER TABLE `sma_shop_settings` ADD `private` TINYINT(1) NULL DEFAULT '0', ADD `hide_price` TINYINT(1) NULL DEFAULT '0';
UPDATE `sma_shop_settings` SET `version` = '3.4.0' WHERE `shop_id` = 1;
