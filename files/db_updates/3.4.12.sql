ALTER TABLE `sma_products` ADD `hide_pos` TINYINT(1) NOT NULL DEFAULT '0';
UPDATE `sma_settings` SET `version` = '3.4.12' WHERE `setting_id` = 1;
