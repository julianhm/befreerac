ALTER TABLE `sma_shop_settings` ADD `logo` VARCHAR(55) NULL;
UPDATE `sma_shop_settings` SET `version` = '3.1.3' WHERE `shop_id` = 1;
