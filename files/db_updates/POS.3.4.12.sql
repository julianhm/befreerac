CREATE TABLE IF NOT EXISTS `sma_promos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `product2buy` int(11) NOT NULL,
  `product2get` int(11) NOT NULL,
  `start_date` date NULL DEFAULT NULL,
  `end_date` date NULL DEFAULT NULL,
  `description` text NULL DEFAULT NULL,
  `quantity2get` decimal(15, 4) NULL DEFAULT NULL,
  `quantity2buy` decimal(15, 4) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product2buy` (`product2buy`),
  KEY `product2get` (`product2get`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
UPDATE `sma_pos_settings` SET `version` = '3.4.12' WHERE `pos_id` = 1;
