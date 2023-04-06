<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-11-07 10:14:49 --> Could not find the language line "value"
ERROR - 2019-11-07 10:14:52 --> Could not find the language line "value"
ERROR - 2019-11-07 10:15:40 --> Could not find the language line "value"
ERROR - 2019-11-07 10:15:42 --> Could not find the language line "value"
ERROR - 2019-11-07 10:17:42 --> Could not find the language line "value"
ERROR - 2019-11-07 10:18:24 --> Could not find the language line "value"
ERROR - 2019-11-07 10:19:13 --> Could not find the language line "value"
ERROR - 2019-11-07 10:19:15 --> Could not find the language line "value"
ERROR - 2019-11-07 10:19:52 --> Could not find the language line "value"
ERROR - 2019-11-07 10:19:55 --> Could not find the language line "value"
ERROR - 2019-11-07 15:58:33 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sma.sma_sale_items.product_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DATE_FORMAT(date, '%Y-%m-%d %T') as date, reference_no, biller, customer, FSI.item_nane as iname, grand_total, paid, (grand_total-paid) as balance, payment_status, sma_sales.id as id
FROM `sma_sales`
LEFT JOIN ( SELECT sale_id, product_id, serial_no, GROUP_CONCAT(CONCAT(sma_sale_items.product_name, '__', sma_sale_items.quantity) SEPARATOR '___') as item_nane from sma_sale_items  GROUP BY sma_sale_items.sale_id ) FSI ON `FSI`.`sale_id`=`sma_sales`.`id`
LEFT JOIN `sma_warehouses` ON `sma_warehouses`.`id`=`sma_sales`.`warehouse_id`
ORDER BY `date` DESC
 LIMIT 10
ERROR - 2019-11-07 16:10:09 --> Query error: Expression #2 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'sma.sma_sale_items.product_id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DATE_FORMAT(date, '%Y-%m-%d %T') as date, reference_no, biller, customer, FSI.item_nane as iname, grand_total, paid, (grand_total-paid) as balance, payment_status, sma_sales.id as id
FROM `sma_sales`
LEFT JOIN ( SELECT sale_id, product_id, serial_no, GROUP_CONCAT(CONCAT(sma_sale_items.product_name, '__', sma_sale_items.quantity) SEPARATOR '___') as item_nane from sma_sale_items  GROUP BY sma_sale_items.sale_id ) FSI ON `FSI`.`sale_id`=`sma_sales`.`id`
LEFT JOIN `sma_warehouses` ON `sma_warehouses`.`id`=`sma_sales`.`warehouse_id`
