<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-09-25 14:29:01 --> Query error: Expression #9 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sma.sma_warehouses_products.quantity' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `sma_warehouses`.*, `sma_warehouses_products`.`quantity`, `sma_warehouses_products`.`rack`
FROM `sma_warehouses`
LEFT JOIN `sma_warehouses_products` ON `sma_warehouses_products`.`warehouse_id`=`sma_warehouses`.`id`
WHERE `sma_warehouses_products`.`product_id` = '27'
GROUP BY `sma_warehouses`.`id`
ERROR - 2019-09-25 14:31:24 --> Query error: Duplicate entry '20' for key 'PRIMARY' - Invalid query: INSERT INTO `sma_product_variants` (`id`, `name`, `cost`, `price`) VALUES ('20', '', NULL, '')
