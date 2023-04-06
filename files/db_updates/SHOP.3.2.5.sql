ALTER TABLE `sma_shop_settings` ADD `products_page` TINYINT(1) NULL;
UPDATE `sma_shop_settings` SET `version` = '3.2.5' WHERE `shop_id` = 1;
