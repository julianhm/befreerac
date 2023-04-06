<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-09-13 13:33:15 --> Query error: Expression #57 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sma.sma_warehouses_products.quantity' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `sma_products`.*, `sma_warehouses_products`.`quantity`, `sma_categories`.`id` as `category_id`, `sma_categories`.`name` as `category_name`
FROM `sma_products`
LEFT JOIN `sma_warehouses_products` ON `sma_warehouses_products`.`product_id`=`sma_products`.`id`
LEFT JOIN `sma_categories` ON `sma_categories`.`id`=`sma_products`.`category_id`
WHERE `hide_pos` != 1
AND `sma_products`.`code` = 'IT01'
GROUP BY `sma_products`.`id`
ERROR - 2019-09-13 13:33:32 --> Query error: Expression #57 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sma.sma_warehouses_products.quantity' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `sma_products`.*, `sma_warehouses_products`.`quantity`, `sma_categories`.`id` as `category_id`, `sma_categories`.`name` as `category_name`
FROM `sma_products`
LEFT JOIN `sma_warehouses_products` ON `sma_warehouses_products`.`product_id`=`sma_products`.`id`
LEFT JOIN `sma_categories` ON `sma_categories`.`id`=`sma_products`.`category_id`
WHERE `hide_pos` != 1
AND `sma_products`.`code` = 'IT01'
GROUP BY `sma_products`.`id`
