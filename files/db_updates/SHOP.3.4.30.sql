ALTER TABLE `sma_shop_settings` ADD `stripe` tinyint(1) DEFAULT '0';
UPDATE `sma_shop_settings` SET `version` = '3.4.30' WHERE `shop_id` = 1;
