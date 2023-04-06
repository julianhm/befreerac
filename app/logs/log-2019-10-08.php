<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-10-08 10:53:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AC'%' OR `sma_products`.`code` LIKE '%'AC'%' OR  concat(sma_products.name, ' (',' at line 5 - Invalid query: SELECT sma_products.*, FWP.quantity as quantity, sma_categories.id as category_id, sma_categories.name as category_name
FROM `sma_products`
LEFT JOIN ( SELECT product_id, warehouse_id, quantity as quantity from sma_warehouses_products ) FWP ON `FWP`.`product_id`=`sma_products`.`id`
LEFT JOIN `sma_categories` ON `sma_categories`.`id`=`sma_products`.`category_id`
WHERE (`sma_products`.`name` LIKE '%'AC'%' OR `sma_products`.`code` LIKE '%'AC'%' OR  concat(sma_products.name, ' (', sma_products.code, ')') LIKE '%'AC'%')
AND `hide_pos` != 1
GROUP BY `sma_products`.`id`
 LIMIT 5
ERROR - 2019-10-08 10:54:29 --> Query error: Unknown column 'roduct_id' in 'field list' - Invalid query: SELECT sma_products.*, FWP.quantity as quantity, sma_categories.id as category_id, sma_categories.name as category_name
FROM `sma_products`
LEFT JOIN ( SELECT roduct_id, warehouse_id, quantity as quantity from sma_warehouses_products ) FWP ON `FWP`.`product_id`=`sma_products`.`id`
LEFT JOIN `sma_categories` ON `sma_categories`.`id`=`sma_products`.`category_id`
WHERE (`sma_products`.`name` LIKE '%AC%' OR `sma_products`.`code` LIKE '%AC%' OR  concat(sma_products.name, ' (', sma_products.code, ')') LIKE '%AC%')
AND `hide_pos` != 1
GROUP BY `sma_products`.`id`
 LIMIT 5
ERROR - 2019-10-08 11:00:44 --> Query error: Unknown column 'roduct_id' in 'field list' - Invalid query: SELECT sma_products.*, FWP.quantity as quantity, sma_categories.id as category_id, sma_categories.name as category_name
FROM `sma_products`
LEFT JOIN ( SELECT roduct_id, warehouse_id, quantity as quantity from sma_warehouses_products ) FWP ON `FWP`.`product_id`=`sma_products`.`id`
LEFT JOIN `sma_categories` ON `sma_categories`.`id`=`sma_products`.`category_id`
WHERE (`sma_products`.`name` LIKE '%AC%' OR `sma_products`.`code` LIKE '%AC%' OR  concat(sma_products.name, ' (', sma_products.code, ')') LIKE '%AC%')
AND `hide_pos` != 1
GROUP BY `sma_products`.`id`
 LIMIT 5
ERROR - 2019-10-08 12:27:29 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sma.sma_sale_items.product_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DATE_FORMAT(date, '%Y-%m-%d %T') as date, reference_no, biller, customer, FSI.item_nane as iname, grand_total, paid, (grand_total-paid) as balance, payment_status, sma_sales.id as id
FROM `sma_sales`
LEFT JOIN ( SELECT sale_id, product_id, serial_no, GROUP_CONCAT(CONCAT(sma_sale_items.product_name, '__', sma_sale_items.quantity) SEPARATOR '___') as item_nane from sma_sale_items  GROUP BY sma_sale_items.sale_id ) FSI ON `FSI`.`sale_id`=`sma_sales`.`id`
LEFT JOIN `sma_warehouses` ON `sma_warehouses`.`id`=`sma_sales`.`warehouse_id`
ORDER BY `date` DESC
 LIMIT 10
