<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-16 20:26:46 --> Severity: Warning --> Division by zero /Users/saleem/Sites/sma/app/controllers/admin/Sales.php 2019
ERROR - 2020-07-16 20:26:46 --> Severity: Warning --> A non-numeric value encountered /Users/saleem/Sites/sma/app/controllers/admin/Sales.php 2019
ERROR - 2020-07-16 20:26:46 --> Severity: Warning --> Division by zero /Users/saleem/Sites/sma/app/controllers/admin/Sales.php 2020
ERROR - 2020-07-16 20:26:46 --> Severity: Warning --> Division by zero /Users/saleem/Sites/sma/app/controllers/admin/Sales.php 2019
ERROR - 2020-07-16 20:26:46 --> Severity: Warning --> A non-numeric value encountered /Users/saleem/Sites/sma/app/controllers/admin/Sales.php 2019
ERROR - 2020-07-16 20:26:46 --> Severity: Warning --> Division by zero /Users/saleem/Sites/sma/app/controllers/admin/Sales.php 2020
ERROR - 2020-07-16 20:26:46 --> Severity: Warning --> Division by zero /Users/saleem/Sites/sma/app/controllers/admin/Sales.php 2019
ERROR - 2020-07-16 20:26:46 --> Severity: Warning --> A non-numeric value encountered /Users/saleem/Sites/sma/app/controllers/admin/Sales.php 2019
ERROR - 2020-07-16 20:26:46 --> Severity: Warning --> Division by zero /Users/saleem/Sites/sma/app/controllers/admin/Sales.php 2020
ERROR - 2020-07-16 20:29:36 --> Why else: Array
(
    [product_id] => 18
    [warehouse_id] => 1
    [purchase_id] => 
    [transfer_id] => 
    [option_id] => 
    [product_unit_id] => 4
    [product_unit_code] => pc
    [product_code] => TOY03
    [product_name] => Minion Crazy
    [item_tax] => 0.5660
    [unit_cost] => 10.0000
    [real_unit_cost] => 10.0000
    [net_unit_cost] => 9.434
    [quantity_received] => 1
    [unit_quantity] => 1
    [quantity] => 1
    [quantity_balance] => 1
    [subtotal] => 10
    [tax] => 6%
    [tax_rate_id] => 3
    [status] => received
    [date] => 2020-07-16
)

ERROR - 2020-07-16 20:30:28 --> More than zero: 2 = 1.0000 + 1 PI: stdClass Object
(
    [id] => 51
    [purchase_id] => 
    [transfer_id] => 
    [product_id] => 18
    [product_code] => TOY03
    [product_name] => Minion Crazy
    [option_id] => 
    [net_unit_cost] => 9.4340
    [quantity] => 1.0000
    [warehouse_id] => 1
    [item_tax] => 0.5660
    [tax_rate_id] => 3
    [tax] => 6%
    [discount] => 
    [item_discount] => 
    [expiry] => 
    [subtotal] => 10.0000
    [quantity_balance] => 1.0000
    [date] => 2020-07-16
    [status] => received
    [unit_cost] => 10.0000
    [real_unit_cost] => 10.0000
    [quantity_received] => 1.0000
    [supplier_part_no] => 
    [purchase_item_id] => 
    [product_unit_id] => 4
    [product_unit_code] => pc
    [unit_quantity] => 1.0000
    [gst] => 
    [cgst] => 
    [sgst] => 
    [igst] => 
)

ERROR - 2020-07-16 20:41:21 --> Query error: FUNCTION sma.UM does not exist - Invalid query: SELECT UM( COALESCE( grand_total, 0 ) ) AS total, SUM( COALESCE( amount, 0 ) ) AS paid
FROM `sma_payments`
LEFT JOIN `sma_sales` ON `sma_sales`.`id`=`sma_payments`.`sale_id`
WHERE   (
`type` = 'received'
OR `type` = 'returned'
 )
AND `sma_payments`.`date` > '2020-07-16 20:30:06'
AND `paid_by` = 'cash'
AND `sma_payments`.`created_by` = '1'
ERROR - 2020-07-16 20:53:15 --> More than zero: 3 = 2.0000 + 1 PI: stdClass Object
(
    [id] => 51
    [purchase_id] => 
    [transfer_id] => 
    [product_id] => 18
    [product_code] => TOY03
    [product_name] => Minion Crazy
    [option_id] => 
    [net_unit_cost] => 9.4340
    [quantity] => 1.0000
    [warehouse_id] => 1
    [item_tax] => 0.5660
    [tax_rate_id] => 3
    [tax] => 6%
    [discount] => 
    [item_discount] => 
    [expiry] => 
    [subtotal] => 10.0000
    [quantity_balance] => 2.0000
    [date] => 2020-07-16
    [status] => received
    [unit_cost] => 10.0000
    [real_unit_cost] => 10.0000
    [quantity_received] => 1.0000
    [supplier_part_no] => 
    [purchase_item_id] => 
    [product_unit_id] => 4
    [product_unit_code] => pc
    [unit_quantity] => 1.0000
    [gst] => 
    [cgst] => 
    [sgst] => 
    [igst] => 
)

