ALTER TABLE `sma_brands` ADD `description` VARCHAR(255) NULL;
ALTER TABLE `sma_categories` ADD `description` VARCHAR(255) NULL;
UPDATE `sma_settings` SET `version` = '3.3.6' WHERE `setting_id` = 1;
