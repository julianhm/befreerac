CREATE TABLE `sma_sms_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `auto_send` TINYINT(1) NULL,
  `config` text NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
INSERT INTO `sma_sms_settings` (`id`, `config`) VALUES ('1', '');

UPDATE `sma_shop_settings` SET `version` = '3.3.0' WHERE `shop_id` = 1;
