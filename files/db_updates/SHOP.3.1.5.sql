ALTER TABLE `sma_cart` CHANGE `id` `id` VARCHAR(40) NOT NULL;
UPDATE `sma_shop_settings` SET `version` = '3.1.5' WHERE `shop_id` = 1;
