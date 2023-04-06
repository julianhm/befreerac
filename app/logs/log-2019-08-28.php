<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-08-28 16:04:59 --> Severity: Notice --> Undefined variable: items /Users/saleem/Sites/sma/themes/default/admin/views/pos/add.php 1209
ERROR - 2019-08-28 16:05:18 --> Severity: Notice --> Undefined variable: items /Users/saleem/Sites/sma/themes/default/admin/views/pos/add.php 1209
ERROR - 2019-08-28 16:05:22 --> Severity: Notice --> Undefined variable: items /Users/saleem/Sites/sma/themes/default/admin/views/pos/add.php 1209
ERROR - 2019-08-28 16:06:39 --> Severity: Notice --> Undefined index: items /Users/saleem/Sites/sma/app/controllers/admin/Pos.php 1135
ERROR - 2019-08-28 16:06:59 --> Severity: Notice --> Undefined variable: items /Users/saleem/Sites/sma/themes/default/admin/views/pos/add.php 1209
ERROR - 2019-08-28 16:07:19 --> Severity: Notice --> Undefined variable: items /Users/saleem/Sites/sma/themes/default/admin/views/pos/add.php 1209
ERROR - 2019-08-28 16:12:41 --> Severity: Notice --> Undefined variable: items /Users/saleem/Sites/sma/themes/default/admin/views/pos/add.php 1209
ERROR - 2019-08-28 16:12:48 --> Severity: Notice --> Undefined variable: items /Users/saleem/Sites/sma/themes/default/admin/views/pos/add.php 1209
ERROR - 2019-08-28 18:19:27 --> Could not find the language line "cf1"
ERROR - 2019-08-28 18:19:27 --> Could not find the language line "cf2"
ERROR - 2019-08-28 18:19:27 --> Could not find the language line "cf3"
ERROR - 2019-08-28 18:19:27 --> Could not find the language line "cf4"
ERROR - 2019-08-28 18:19:27 --> Could not find the language line "cf5"
ERROR - 2019-08-28 18:19:27 --> Could not find the language line "cf6"
ERROR - 2019-08-28 18:53:00 --> Severity: Notice --> Array to string conversion /Users/saleem/Sites/sma/system/database/DB_query_builder.php 2442
ERROR - 2019-08-28 18:53:00 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `sma_products`.`id` as `id`, `sma_products`.`name` as `name`, `sma_products`.`code` as `code`, `sma_products`.`image` as `image`, `sma_products`.`slug` as `slug`, `sma_products`.`price`, `sma_warehouses_products`.`quantity` as `quantity`, `type`, `promotion`, `promo_price`, `start_date`, `end_date`, `product_details` as `details`
FROM `sma_products`
LEFT JOIN `sma_warehouses_products` ON `sma_products`.`id`=`sma_warehouses_products`.`product_id`
WHERE `sma_warehouses_products`.`warehouse_id` = '1'
AND `hide` != 1
AND 0 = Array
GROUP BY `sma_products`.`id`
ORDER BY `name` ASC
 LIMIT 12
ERROR - 2019-08-28 19:05:38 --> Severity: Notice --> Undefined variable: key /Users/saleem/Sites/sma/app/models/shop/Shop_model.php 469
ERROR - 2019-08-28 19:05:38 --> Severity: Notice --> Undefined variable: key /Users/saleem/Sites/sma/app/models/shop/Shop_model.php 469
ERROR - 2019-08-28 19:09:43 --> Severity: Notice --> Undefined variable: key /Users/saleem/Sites/sma/app/models/shop/Shop_model.php 469
ERROR - 2019-08-28 19:09:43 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_driver::orWhere() /Users/saleem/Sites/sma/app/models/shop/Shop_model.php 471
ERROR - 2019-08-28 19:10:22 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_driver::orWhere() /Users/saleem/Sites/sma/app/models/shop/Shop_model.php 471
ERROR - 2019-08-28 19:10:35 --> Query error: Unknown column 'c' in 'where clause' - Invalid query: SELECT `sma_products`.`id` as `id`, `sma_products`.`name` as `name`, `sma_products`.`code` as `code`, `sma_products`.`image` as `image`, `sma_products`.`slug` as `slug`, `sma_products`.`price`, `sma_warehouses_products`.`quantity` as `quantity`, `type`, `promotion`, `promo_price`, `start_date`, `end_date`, `product_details` as `details`
FROM `sma_products`
LEFT JOIN `sma_warehouses_products` ON `sma_products`.`id`=`sma_warehouses_products`.`product_id`
WHERE `sma_warehouses_products`.`warehouse_id` = '1'
AND `hide` != 1
AND `c` = 'f'
OR `C` = 'C'
GROUP BY `sma_products`.`id`
ORDER BY `name` ASC
 LIMIT 12
ERROR - 2019-08-28 19:11:21 --> Query error: Unknown column 'c' in 'where clause' - Invalid query: SELECT `sma_products`.`id` as `id`, `sma_products`.`name` as `name`, `sma_products`.`code` as `code`, `sma_products`.`image` as `image`, `sma_products`.`slug` as `slug`, `sma_products`.`price`, `sma_warehouses_products`.`quantity` as `quantity`, `type`, `promotion`, `promo_price`, `start_date`, `end_date`, `product_details` as `details`
FROM `sma_products`
LEFT JOIN `sma_warehouses_products` ON `sma_products`.`id`=`sma_warehouses_products`.`product_id`
WHERE `sma_warehouses_products`.`warehouse_id` = '1'
AND `hide` != 1
AND `c` = 'f'
OR `C` = 'C'
AND `c` = 'f'
OR `K` = 'C'
GROUP BY `sma_products`.`id`
ORDER BY `name` ASC
 LIMIT 12
ERROR - 2019-08-28 19:14:16 --> Severity: Notice --> Undefined variable: value /Users/saleem/Sites/sma/app/models/shop/Shop_model.php 457
ERROR - 2019-08-28 19:14:16 --> Severity: Notice --> Undefined variable: value /Users/saleem/Sites/sma/app/models/shop/Shop_model.php 457
ERROR - 2019-08-28 19:14:16 --> Severity: Notice --> Undefined variable: value /Users/saleem/Sites/sma/app/models/shop/Shop_model.php 457
ERROR - 2019-08-28 19:14:16 --> Severity: Notice --> Undefined variable: value /Users/saleem/Sites/sma/app/models/shop/Shop_model.php 457
ERROR - 2019-08-28 19:14:16 --> Severity: Notice --> Undefined variable: value /Users/saleem/Sites/sma/app/models/shop/Shop_model.php 457
ERROR - 2019-08-28 19:14:16 --> Severity: Notice --> Undefined variable: value /Users/saleem/Sites/sma/app/models/shop/Shop_model.php 457
ERROR - 2019-08-28 19:14:16 --> Severity: Notice --> Undefined variable: value /Users/saleem/Sites/sma/app/models/shop/Shop_model.php 457
ERROR - 2019-08-28 19:14:16 --> Severity: Notice --> Undefined variable: value /Users/saleem/Sites/sma/app/models/shop/Shop_model.php 457
ERROR - 2019-08-28 19:14:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /Users/saleem/Sites/sma/system/core/Exceptions.php:271) /Users/saleem/Sites/sma/app/libraries/Sma.php 419
ERROR - 2019-08-28 19:14:47 --> Severity: error --> Exception: syntax error, unexpected '$cff' (T_VARIABLE), expecting ',' or ';' /Users/saleem/Sites/sma/app/models/shop/Shop_model.php 457
ERROR - 2019-08-28 20:57:47 --> Severity: Warning --> Use of undefined constant self - assumed 'self' (this will throw an Error in a future version of PHP) /Users/saleem/Sites/sma/app/controllers/admin/System_settings.php 2850
