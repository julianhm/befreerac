<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-15 13:00:19 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sma.sma_warehouses_products.quantity' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `sma_products`.`id` as `id`, `sma_products`.`name` as `name`, `sma_products`.`code` as `code`, `sma_products`.`image` as `image`, `sma_products`.`slug` as `slug`, `sma_products`.`price`, `sma_warehouses_products`.`quantity` as `quantity`, `type`, `promotion`, `promo_price`, `start_date`, `end_date`, `product_details` as `details`
FROM `sma_products`
LEFT JOIN `sma_warehouses_products` ON `sma_products`.`id`=`sma_warehouses_products`.`product_id`
WHERE `sma_warehouses_products`.`warehouse_id` = '1'
AND `hide` != 1
GROUP BY `sma_products`.`id`
ORDER BY `name` ASC
 LIMIT 12
ERROR - 2020-07-15 13:00:24 --> Query error: Expression #7 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sma.sma_warehouses_products.quantity' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT `sma_products`.`id` as `id`, `sma_products`.`name` as `name`, `sma_products`.`code` as `code`, `sma_products`.`image` as `image`, `sma_products`.`slug` as `slug`, `sma_products`.`price`, `sma_warehouses_products`.`quantity` as `quantity`, `type`, `promotion`, `promo_price`, `start_date`, `end_date`, `product_details` as `details`
FROM `sma_products`
LEFT JOIN `sma_warehouses_products` ON `sma_products`.`id`=`sma_warehouses_products`.`product_id`
WHERE `sma_warehouses_products`.`warehouse_id` = '1'
AND `hide` != 1
GROUP BY `sma_products`.`id`
ORDER BY `name` ASC
 LIMIT 12
