<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-08-11 14:06:40 --> Severity: Notice --> Undefined index: HTTP_REFERER /Users/saleem/Sites/sma/app/controllers/Notify.php 25
ERROR - 2020-08-11 17:37:13 --> Severity: Notice --> Undefined index: return_purchase_ref /Users/saleem/Sites/sma/app/models/admin/Purchases_model.php 58
ERROR - 2020-08-11 17:40:06 --> Could not find the language line "avg_cost"
ERROR - 2020-08-11 17:40:06 --> Severity: Notice --> Undefined property: stdClass::$avg_cost /Users/saleem/Sites/sma/themes/default/admin/views/products/modal_view.php 193
ERROR - 2020-08-11 17:40:06 --> Severity: Notice --> Undefined property: stdClass::$avg_cost /Users/saleem/Sites/sma/themes/default/admin/views/products/modal_view.php 193
ERROR - 2020-08-11 17:41:24 --> Query error: Unknown column 'sma_warehouses_products.sma_racksma_warehouses_products.avg_cost' in 'field list' - Invalid query: SELECT `sma_warehouses`.*, `sma_warehouses_products`.`quantity`, `sma_warehouses_products`.`sma_racksma_warehouses_products`.`avg_cost`
FROM `sma_warehouses`
LEFT JOIN `sma_warehouses_products` ON `sma_warehouses_products`.`warehouse_id`=`sma_warehouses`.`id`
WHERE `sma_warehouses_products`.`product_id` = '7'
GROUP BY `sma_warehouses`.`id`
ERROR - 2020-08-11 17:41:35 --> Query error: Unknown column 'sma_warehouses_products.sma_racksma_warehouses_products.avg_cost' in 'field list' - Invalid query: SELECT `sma_warehouses`.*, `sma_warehouses_products`.`quantity`, `sma_warehouses_products`.`sma_racksma_warehouses_products`.`avg_cost`
FROM `sma_warehouses`
LEFT JOIN `sma_warehouses_products` ON `sma_warehouses_products`.`warehouse_id`=`sma_warehouses`.`id`
WHERE `sma_warehouses_products`.`product_id` = '7'
GROUP BY `sma_warehouses`.`id`
ERROR - 2020-08-11 17:41:56 --> Could not find the language line "avg_cost"
ERROR - 2020-08-11 17:43:42 --> Could not find the language line " note"
ERROR - 2020-08-11 17:43:42 --> Could not find the language line "hide_form"
ERROR - 2020-08-11 17:43:42 --> Could not find the language line "show_form"
ERROR - 2020-08-11 17:44:19 --> Could not find the language line " note"
ERROR - 2020-08-11 17:44:19 --> Could not find the language line "hide_form"
ERROR - 2020-08-11 17:44:19 --> Could not find the language line "show_form"
ERROR - 2020-08-11 17:44:34 --> Could not find the language line " note"
ERROR - 2020-08-11 17:44:34 --> Could not find the language line "hide_form"
ERROR - 2020-08-11 17:44:34 --> Could not find the language line "show_form"
ERROR - 2020-08-11 17:46:32 --> Severity: Notice --> Undefined index: return_purchase_ref /Users/saleem/Sites/sma/app/models/admin/Purchases_model.php 58
ERROR - 2020-08-11 18:06:09 --> Severity: Warning --> mysqli::real_escape_string(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 393
ERROR - 2020-08-11 18:06:09 --> Severity: Warning --> mysqli::real_escape_string(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 393
ERROR - 2020-08-11 18:06:09 --> Severity: Warning --> mysqli::real_escape_string(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 393
ERROR - 2020-08-11 18:06:09 --> Severity: Warning --> mysqli::query(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 307
ERROR - 2020-08-11 18:06:09 --> Severity: Warning --> CI_DB_mysqli_driver::error(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 511
ERROR - 2020-08-11 18:06:09 --> Severity: Warning --> CI_DB_mysqli_driver::error(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 511
ERROR - 2020-08-11 18:06:09 --> Query error:  - Invalid query: INSERT INTO `sma_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('', '', 1597140369, '')
ERROR - 2020-08-11 18:06:09 --> Severity: Warning --> Unknown: Cannot call session save handler in a recursive manner Unknown 0
ERROR - 2020-08-11 18:06:09 --> Severity: Warning --> Unknown: Failed to write session data using user defined save handler. (session.save_path: ) Unknown 0
ERROR - 2020-08-11 18:06:09 --> Severity: Warning --> mysqli::query(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 307
ERROR - 2020-08-11 18:06:09 --> Severity: Warning --> CI_DB_mysqli_driver::error(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 511
ERROR - 2020-08-11 18:06:09 --> Severity: Warning --> CI_DB_mysqli_driver::error(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 511
ERROR - 2020-08-11 18:06:09 --> Query error:  - Invalid query: SELECT RELEASE_LOCK('1c69c4257778742d50908275c5c64f39') AS ci_session_lock
ERROR - 2020-08-11 18:06:09 --> Severity: Warning --> Cannot modify header information - headers already sent /Users/saleem/Sites/sma/system/core/Common.php 570
ERROR - 2020-08-11 18:06:12 --> Severity: Warning --> Creating default object from empty value /Users/saleem/Sites/sma/app/core/MY_Controller.php 15
ERROR - 2020-08-11 18:06:12 --> Severity: Notice --> Undefined property: stdClass::$rtl /Users/saleem/Sites/sma/app/core/MY_Controller.php 24
ERROR - 2020-08-11 18:06:12 --> Severity: Notice --> Undefined property: stdClass::$theme /Users/saleem/Sites/sma/app/core/MY_Controller.php 26
ERROR - 2020-08-11 18:06:12 --> Severity: Notice --> Undefined property: stdClass::$theme /Users/saleem/Sites/sma/app/core/MY_Controller.php 27
ERROR - 2020-08-11 18:06:13 --> Severity: Warning --> Creating default object from empty value /Users/saleem/Sites/sma/app/core/MY_Shop_Controller.php 22
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$theme /Users/saleem/Sites/sma/app/core/MY_Shop_Controller.php 30
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$theme /Users/saleem/Sites/sma/app/core/MY_Shop_Controller.php 31
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$default_currency /Users/saleem/Sites/sma/app/core/MY_Shop_Controller.php 40
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$default_currency /Users/saleem/Sites/sma/app/core/MY_Shop_Controller.php 42
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$dateformat /Users/saleem/Sites/sma/app/core/MY_Shop_Controller.php 64
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Trying to get property 'warehouse' of non-object /Users/saleem/Sites/sma/app/core/MY_Shop_Controller.php 93
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$invoice_view /Users/saleem/Sites/sma/app/core/MY_Shop_Controller.php 102
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$mmode /Users/saleem/Sites/sma/app/controllers/Main.php 11
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$mmode /Users/saleem/Sites/sma/app/controllers/Main.php 121
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$captcha /Users/saleem/Sites/sma/app/controllers/Main.php 129
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$captcha /Users/saleem/Sites/sma/app/controllers/Main.php 152
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Trying to get property 'description' of non-object /Users/saleem/Sites/sma/app/controllers/Main.php 183
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Trying to get property 'private' of non-object /Users/saleem/Sites/sma/app/controllers/Main.php 184
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Trying to get property 'hide0' of non-object /Users/saleem/Sites/sma/app/models/shop/Shop_model.php 104
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Trying to get property 'hide0' of non-object /Users/saleem/Sites/sma/app/models/shop/Shop_model.php 114
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$default_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Trying to get property 'shipping' of non-object /Users/saleem/Sites/sma/app/libraries/Tec_cart.php 254
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$default_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$default_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$default_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Trying to get property 'symbol' of non-object /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$symbol /Users/saleem/Sites/sma/app/libraries/Sma.php 156
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$sac /Users/saleem/Sites/sma/app/libraries/Sma.php 160
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$decimals /Users/saleem/Sites/sma/app/libraries/Sma.php 165
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$thousands_sep /Users/saleem/Sites/sma/app/libraries/Sma.php 166
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$thousands_sep /Users/saleem/Sites/sma/app/libraries/Sma.php 166
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$decimals_sep /Users/saleem/Sites/sma/app/libraries/Sma.php 167
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$display_symbol /Users/saleem/Sites/sma/app/libraries/Sma.php 168
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$display_symbol /Users/saleem/Sites/sma/app/libraries/Sma.php 170
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$default_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Trying to get property 'symbol' of non-object /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$symbol /Users/saleem/Sites/sma/app/libraries/Sma.php 156
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$sac /Users/saleem/Sites/sma/app/libraries/Sma.php 160
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$decimals /Users/saleem/Sites/sma/app/libraries/Sma.php 165
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$thousands_sep /Users/saleem/Sites/sma/app/libraries/Sma.php 166
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$thousands_sep /Users/saleem/Sites/sma/app/libraries/Sma.php 166
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$decimals_sep /Users/saleem/Sites/sma/app/libraries/Sma.php 167
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$display_symbol /Users/saleem/Sites/sma/app/libraries/Sma.php 168
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$display_symbol /Users/saleem/Sites/sma/app/libraries/Sma.php 170
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Trying to get property 'symbol' of non-object /Users/saleem/Sites/sma/app/libraries/Tec_cart.php 152
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$symbol /Users/saleem/Sites/sma/app/libraries/Sma.php 156
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$sac /Users/saleem/Sites/sma/app/libraries/Sma.php 160
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$decimals /Users/saleem/Sites/sma/app/libraries/Sma.php 165
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$thousands_sep /Users/saleem/Sites/sma/app/libraries/Sma.php 166
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$thousands_sep /Users/saleem/Sites/sma/app/libraries/Sma.php 166
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$decimals_sep /Users/saleem/Sites/sma/app/libraries/Sma.php 167
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$display_symbol /Users/saleem/Sites/sma/app/libraries/Sma.php 168
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$display_symbol /Users/saleem/Sites/sma/app/libraries/Sma.php 170
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Trying to get property 'symbol' of non-object /Users/saleem/Sites/sma/app/libraries/Tec_cart.php 153
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$symbol /Users/saleem/Sites/sma/app/libraries/Sma.php 156
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$sac /Users/saleem/Sites/sma/app/libraries/Sma.php 160
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$decimals /Users/saleem/Sites/sma/app/libraries/Sma.php 165
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$thousands_sep /Users/saleem/Sites/sma/app/libraries/Sma.php 166
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$thousands_sep /Users/saleem/Sites/sma/app/libraries/Sma.php 166
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$decimals_sep /Users/saleem/Sites/sma/app/libraries/Sma.php 167
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$display_symbol /Users/saleem/Sites/sma/app/libraries/Sma.php 168
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$display_symbol /Users/saleem/Sites/sma/app/libraries/Sma.php 170
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Trying to get property 'symbol' of non-object /Users/saleem/Sites/sma/app/libraries/Tec_cart.php 154
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$symbol /Users/saleem/Sites/sma/app/libraries/Sma.php 156
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$sac /Users/saleem/Sites/sma/app/libraries/Sma.php 160
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$decimals /Users/saleem/Sites/sma/app/libraries/Sma.php 165
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$thousands_sep /Users/saleem/Sites/sma/app/libraries/Sma.php 166
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$thousands_sep /Users/saleem/Sites/sma/app/libraries/Sma.php 166
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$decimals_sep /Users/saleem/Sites/sma/app/libraries/Sma.php 167
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$display_symbol /Users/saleem/Sites/sma/app/libraries/Sma.php 168
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$display_symbol /Users/saleem/Sites/sma/app/libraries/Sma.php 170
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$decimals /Users/saleem/Sites/sma/app/libraries/Sma.php 148
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$decimals /Users/saleem/Sites/sma/app/libraries/Sma.php 148
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Trying to get property 'symbol' of non-object /Users/saleem/Sites/sma/app/libraries/Tec_cart.php 155
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$symbol /Users/saleem/Sites/sma/app/libraries/Sma.php 156
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$sac /Users/saleem/Sites/sma/app/libraries/Sma.php 160
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$decimals /Users/saleem/Sites/sma/app/libraries/Sma.php 165
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$thousands_sep /Users/saleem/Sites/sma/app/libraries/Sma.php 166
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$thousands_sep /Users/saleem/Sites/sma/app/libraries/Sma.php 166
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$decimals_sep /Users/saleem/Sites/sma/app/libraries/Sma.php 167
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$display_symbol /Users/saleem/Sites/sma/app/libraries/Sma.php 168
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$display_symbol /Users/saleem/Sites/sma/app/libraries/Sma.php 170
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$captcha /Users/saleem/Sites/sma/app/core/MY_Shop_Controller.php 131
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Trying to get property 'description' of non-object /Users/saleem/Sites/sma/app/core/MY_Shop_Controller.php 165
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Trying to get property 'logo' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/header.php 18
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Trying to get property 'hide_price' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/header.php 69
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Trying to get property 'symbol' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/header.php 73
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Trying to get property 'code' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/header.php 73
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$theme /Users/saleem/Sites/sma/themes/default/shop/views/header.php 115
ERROR - 2020-08-11 18:06:13 --> Severity: Warning --> include(/Users/saleem/Sites/sma/themes//shop/views/user/login_form.php): failed to open stream: No such file or directory /Users/saleem/Sites/sma/themes/default/shop/views/header.php 115
ERROR - 2020-08-11 18:06:13 --> Severity: Warning --> include(): Failed opening '/Users/saleem/Sites/sma/themes//shop/views/user/login_form.php' for inclusion (include_path='.:/usr/local/Cellar/php/7.4.6_1/share/php/pear') /Users/saleem/Sites/sma/themes/default/shop/views/header.php 115
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Trying to get property 'shop_name' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/header.php 136
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Trying to get property 'logo' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/header.php 136
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Trying to get property 'hide_price' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/header.php 142
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Trying to get property 'hide_price' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/header.php 153
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Trying to get property 'hide_price' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/header.php 293
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Trying to get property 'private' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/user/login.php 12
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Trying to get property 'private' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/user/login_form.php 24
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$captcha /Users/saleem/Sites/sma/themes/default/shop/views/user/login_form.php 39
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Trying to get property 'private' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/user/login_form.php 72
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Trying to get property 'private' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/user/login.php 27
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Trying to get property 'private' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/user/login.php 41
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Trying to get property 'description' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/footer.php 23
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Trying to get property 'about_link' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/footer.php 23
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Trying to get property 'phone' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/footer.php 26
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Trying to get property 'email' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/footer.php 27
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Trying to get property 'privacy_link' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/footer.php 30
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Trying to get property 'terms_link' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/footer.php 31
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Trying to get property 'contact_link' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/footer.php 32
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Trying to get property 'payment_text' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/footer.php 39
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Trying to get property 'follow_text' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/footer.php 45
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Trying to get property 'shop_name' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/footer.php 72
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$display_symbol /Users/saleem/Sites/sma/themes/default/shop/views/footer.php 142
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$symbol /Users/saleem/Sites/sma/themes/default/shop/views/footer.php 142
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$decimals /Users/saleem/Sites/sma/themes/default/shop/views/footer.php 142
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$thousands_sep /Users/saleem/Sites/sma/themes/default/shop/views/footer.php 142
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Undefined property: stdClass::$decimals_sep /Users/saleem/Sites/sma/themes/default/shop/views/footer.php 142
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Trying to get property 'products_page' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/footer.php 142
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Trying to get property 'private' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/footer.php 142
ERROR - 2020-08-11 18:06:13 --> Severity: Notice --> Trying to get property 'hide_price' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/footer.php 142
ERROR - 2020-08-11 18:09:33 --> Severity: Warning --> mysqli::real_escape_string(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 393
ERROR - 2020-08-11 18:09:33 --> Severity: Warning --> mysqli::query(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 307
ERROR - 2020-08-11 18:09:33 --> Severity: Warning --> CI_DB_mysqli_driver::error(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 511
ERROR - 2020-08-11 18:09:33 --> Severity: Warning --> CI_DB_mysqli_driver::error(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 511
ERROR - 2020-08-11 18:09:33 --> Query error:  - Invalid query: UPDATE `sma_sessions` SET `timestamp` = 1597140573
WHERE `id` = ''
ERROR - 2020-08-11 18:09:33 --> Severity: Warning --> Unknown: Cannot call session save handler in a recursive manner Unknown 0
ERROR - 2020-08-11 18:09:33 --> Severity: Warning --> Unknown: Failed to write session data using user defined save handler. (session.save_path: ) Unknown 0
ERROR - 2020-08-11 18:09:33 --> Severity: Warning --> mysqli::query(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 307
ERROR - 2020-08-11 18:09:33 --> Severity: Warning --> CI_DB_mysqli_driver::error(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 511
ERROR - 2020-08-11 18:09:33 --> Severity: Warning --> CI_DB_mysqli_driver::error(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 511
ERROR - 2020-08-11 18:09:33 --> Query error:  - Invalid query: SELECT RELEASE_LOCK('1c69c4257778742d50908275c5c64f39') AS ci_session_lock
ERROR - 2020-08-11 18:09:33 --> Severity: Warning --> Cannot modify header information - headers already sent /Users/saleem/Sites/sma/system/core/Common.php 570
ERROR - 2020-08-11 18:09:36 --> Severity: Warning --> Creating default object from empty value /Users/saleem/Sites/sma/app/core/MY_Shop_Controller.php 22
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$theme /Users/saleem/Sites/sma/app/core/MY_Shop_Controller.php 30
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$theme /Users/saleem/Sites/sma/app/core/MY_Shop_Controller.php 31
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$default_currency /Users/saleem/Sites/sma/app/core/MY_Shop_Controller.php 40
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$default_currency /Users/saleem/Sites/sma/app/core/MY_Shop_Controller.php 42
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$dateformat /Users/saleem/Sites/sma/app/core/MY_Shop_Controller.php 64
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Trying to get property 'warehouse' of non-object /Users/saleem/Sites/sma/app/core/MY_Shop_Controller.php 93
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$invoice_view /Users/saleem/Sites/sma/app/core/MY_Shop_Controller.php 102
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$mmode /Users/saleem/Sites/sma/app/controllers/Main.php 11
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$mmode /Users/saleem/Sites/sma/app/controllers/Main.php 121
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$captcha /Users/saleem/Sites/sma/app/controllers/Main.php 129
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$captcha /Users/saleem/Sites/sma/app/controllers/Main.php 152
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Trying to get property 'description' of non-object /Users/saleem/Sites/sma/app/controllers/Main.php 183
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Trying to get property 'private' of non-object /Users/saleem/Sites/sma/app/controllers/Main.php 184
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Trying to get property 'hide0' of non-object /Users/saleem/Sites/sma/app/models/shop/Shop_model.php 104
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Trying to get property 'hide0' of non-object /Users/saleem/Sites/sma/app/models/shop/Shop_model.php 114
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$default_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Trying to get property 'shipping' of non-object /Users/saleem/Sites/sma/app/libraries/Tec_cart.php 254
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$default_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$default_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$default_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Trying to get property 'symbol' of non-object /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$symbol /Users/saleem/Sites/sma/app/libraries/Sma.php 156
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$sac /Users/saleem/Sites/sma/app/libraries/Sma.php 160
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$decimals /Users/saleem/Sites/sma/app/libraries/Sma.php 165
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$thousands_sep /Users/saleem/Sites/sma/app/libraries/Sma.php 166
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$thousands_sep /Users/saleem/Sites/sma/app/libraries/Sma.php 166
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$decimals_sep /Users/saleem/Sites/sma/app/libraries/Sma.php 167
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$display_symbol /Users/saleem/Sites/sma/app/libraries/Sma.php 168
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$display_symbol /Users/saleem/Sites/sma/app/libraries/Sma.php 170
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$default_currency /Users/saleem/Sites/sma/app/libraries/Sma.php 112
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Trying to get property 'symbol' of non-object /Users/saleem/Sites/sma/app/libraries/Sma.php 115
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$symbol /Users/saleem/Sites/sma/app/libraries/Sma.php 156
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$sac /Users/saleem/Sites/sma/app/libraries/Sma.php 160
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$decimals /Users/saleem/Sites/sma/app/libraries/Sma.php 165
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$thousands_sep /Users/saleem/Sites/sma/app/libraries/Sma.php 166
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$thousands_sep /Users/saleem/Sites/sma/app/libraries/Sma.php 166
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$decimals_sep /Users/saleem/Sites/sma/app/libraries/Sma.php 167
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$display_symbol /Users/saleem/Sites/sma/app/libraries/Sma.php 168
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$display_symbol /Users/saleem/Sites/sma/app/libraries/Sma.php 170
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Trying to get property 'symbol' of non-object /Users/saleem/Sites/sma/app/libraries/Tec_cart.php 152
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$symbol /Users/saleem/Sites/sma/app/libraries/Sma.php 156
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$sac /Users/saleem/Sites/sma/app/libraries/Sma.php 160
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$decimals /Users/saleem/Sites/sma/app/libraries/Sma.php 165
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$thousands_sep /Users/saleem/Sites/sma/app/libraries/Sma.php 166
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$thousands_sep /Users/saleem/Sites/sma/app/libraries/Sma.php 166
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$decimals_sep /Users/saleem/Sites/sma/app/libraries/Sma.php 167
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$display_symbol /Users/saleem/Sites/sma/app/libraries/Sma.php 168
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$display_symbol /Users/saleem/Sites/sma/app/libraries/Sma.php 170
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Trying to get property 'symbol' of non-object /Users/saleem/Sites/sma/app/libraries/Tec_cart.php 153
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$symbol /Users/saleem/Sites/sma/app/libraries/Sma.php 156
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$sac /Users/saleem/Sites/sma/app/libraries/Sma.php 160
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$decimals /Users/saleem/Sites/sma/app/libraries/Sma.php 165
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$thousands_sep /Users/saleem/Sites/sma/app/libraries/Sma.php 166
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$thousands_sep /Users/saleem/Sites/sma/app/libraries/Sma.php 166
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$decimals_sep /Users/saleem/Sites/sma/app/libraries/Sma.php 167
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$display_symbol /Users/saleem/Sites/sma/app/libraries/Sma.php 168
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$display_symbol /Users/saleem/Sites/sma/app/libraries/Sma.php 170
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Trying to get property 'symbol' of non-object /Users/saleem/Sites/sma/app/libraries/Tec_cart.php 154
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$symbol /Users/saleem/Sites/sma/app/libraries/Sma.php 156
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$sac /Users/saleem/Sites/sma/app/libraries/Sma.php 160
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$decimals /Users/saleem/Sites/sma/app/libraries/Sma.php 165
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$thousands_sep /Users/saleem/Sites/sma/app/libraries/Sma.php 166
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$thousands_sep /Users/saleem/Sites/sma/app/libraries/Sma.php 166
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$decimals_sep /Users/saleem/Sites/sma/app/libraries/Sma.php 167
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$display_symbol /Users/saleem/Sites/sma/app/libraries/Sma.php 168
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$display_symbol /Users/saleem/Sites/sma/app/libraries/Sma.php 170
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$decimals /Users/saleem/Sites/sma/app/libraries/Sma.php 148
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$decimals /Users/saleem/Sites/sma/app/libraries/Sma.php 148
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Trying to get property 'symbol' of non-object /Users/saleem/Sites/sma/app/libraries/Tec_cart.php 155
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$symbol /Users/saleem/Sites/sma/app/libraries/Sma.php 156
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$sac /Users/saleem/Sites/sma/app/libraries/Sma.php 160
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$decimals /Users/saleem/Sites/sma/app/libraries/Sma.php 165
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$thousands_sep /Users/saleem/Sites/sma/app/libraries/Sma.php 166
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$thousands_sep /Users/saleem/Sites/sma/app/libraries/Sma.php 166
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$decimals_sep /Users/saleem/Sites/sma/app/libraries/Sma.php 167
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$display_symbol /Users/saleem/Sites/sma/app/libraries/Sma.php 168
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$display_symbol /Users/saleem/Sites/sma/app/libraries/Sma.php 170
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$captcha /Users/saleem/Sites/sma/app/core/MY_Shop_Controller.php 131
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Trying to get property 'description' of non-object /Users/saleem/Sites/sma/app/core/MY_Shop_Controller.php 165
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Trying to get property 'logo' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/header.php 18
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Trying to get property 'hide_price' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/header.php 69
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Trying to get property 'symbol' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/header.php 73
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Trying to get property 'code' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/header.php 73
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$theme /Users/saleem/Sites/sma/themes/default/shop/views/header.php 115
ERROR - 2020-08-11 18:09:36 --> Severity: Warning --> include(/Users/saleem/Sites/sma/themes//shop/views/user/login_form.php): failed to open stream: No such file or directory /Users/saleem/Sites/sma/themes/default/shop/views/header.php 115
ERROR - 2020-08-11 18:09:36 --> Severity: Warning --> include(): Failed opening '/Users/saleem/Sites/sma/themes//shop/views/user/login_form.php' for inclusion (include_path='.:/usr/local/Cellar/php/7.4.6_1/share/php/pear') /Users/saleem/Sites/sma/themes/default/shop/views/header.php 115
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Trying to get property 'shop_name' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/header.php 136
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Trying to get property 'logo' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/header.php 136
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Trying to get property 'hide_price' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/header.php 142
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Trying to get property 'hide_price' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/header.php 153
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Trying to get property 'hide_price' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/header.php 293
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Trying to get property 'private' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/user/login.php 12
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Trying to get property 'private' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/user/login_form.php 24
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$captcha /Users/saleem/Sites/sma/themes/default/shop/views/user/login_form.php 39
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Trying to get property 'private' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/user/login_form.php 72
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Trying to get property 'private' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/user/login.php 27
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Trying to get property 'private' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/user/login.php 41
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Trying to get property 'description' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/footer.php 23
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Trying to get property 'about_link' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/footer.php 23
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Trying to get property 'phone' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/footer.php 26
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Trying to get property 'email' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/footer.php 27
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Trying to get property 'privacy_link' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/footer.php 30
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Trying to get property 'terms_link' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/footer.php 31
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Trying to get property 'contact_link' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/footer.php 32
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Trying to get property 'payment_text' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/footer.php 39
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Trying to get property 'follow_text' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/footer.php 45
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Trying to get property 'shop_name' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/footer.php 72
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$display_symbol /Users/saleem/Sites/sma/themes/default/shop/views/footer.php 142
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$symbol /Users/saleem/Sites/sma/themes/default/shop/views/footer.php 142
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$decimals /Users/saleem/Sites/sma/themes/default/shop/views/footer.php 142
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$thousands_sep /Users/saleem/Sites/sma/themes/default/shop/views/footer.php 142
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Undefined property: stdClass::$decimals_sep /Users/saleem/Sites/sma/themes/default/shop/views/footer.php 142
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Trying to get property 'products_page' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/footer.php 142
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Trying to get property 'private' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/footer.php 142
ERROR - 2020-08-11 18:09:36 --> Severity: Notice --> Trying to get property 'hide_price' of non-object /Users/saleem/Sites/sma/themes/default/shop/views/footer.php 142
ERROR - 2020-08-11 18:13:54 --> Severity: Warning --> mysqli::real_escape_string(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 393
ERROR - 2020-08-11 18:13:54 --> Severity: Warning --> mysqli::real_escape_string(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 393
ERROR - 2020-08-11 18:13:54 --> Severity: Warning --> mysqli::real_escape_string(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 393
ERROR - 2020-08-11 18:13:54 --> Severity: Warning --> mysqli::query(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 307
ERROR - 2020-08-11 18:13:54 --> Severity: Warning --> CI_DB_mysqli_driver::error(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 511
ERROR - 2020-08-11 18:13:54 --> Severity: Warning --> CI_DB_mysqli_driver::error(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 511
ERROR - 2020-08-11 18:13:54 --> Query error:  - Invalid query: INSERT INTO `sma_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('', '', 1597140834, '')
ERROR - 2020-08-11 18:13:54 --> Severity: Warning --> Unknown: Cannot call session save handler in a recursive manner Unknown 0
ERROR - 2020-08-11 18:13:54 --> Severity: Warning --> Unknown: Failed to write session data using user defined save handler. (session.save_path: ) Unknown 0
ERROR - 2020-08-11 18:13:54 --> Severity: Warning --> mysqli::query(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 307
ERROR - 2020-08-11 18:13:54 --> Severity: Warning --> CI_DB_mysqli_driver::error(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 511
ERROR - 2020-08-11 18:13:54 --> Severity: Warning --> CI_DB_mysqli_driver::error(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 511
ERROR - 2020-08-11 18:13:54 --> Query error:  - Invalid query: SELECT RELEASE_LOCK('6111b1227ea62bf94d381e43697925e7') AS ci_session_lock
ERROR - 2020-08-11 18:13:54 --> Severity: Warning --> Cannot modify header information - headers already sent /Users/saleem/Sites/sma/system/core/Common.php 570
ERROR - 2020-08-11 18:14:37 --> Severity: Warning --> mysqli::real_escape_string(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 393
ERROR - 2020-08-11 18:14:37 --> Severity: Warning --> mysqli::real_escape_string(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 393
ERROR - 2020-08-11 18:14:37 --> Severity: Warning --> mysqli::query(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 307
ERROR - 2020-08-11 18:14:37 --> Severity: Warning --> CI_DB_mysqli_driver::error(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 511
ERROR - 2020-08-11 18:14:37 --> Severity: Warning --> CI_DB_mysqli_driver::error(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 511
ERROR - 2020-08-11 18:14:37 --> Query error:  - Invalid query: UPDATE `sma_sessions` SET `timestamp` = 1597140877, `data` = ''
WHERE `id` = ''
ERROR - 2020-08-11 18:14:37 --> Severity: Warning --> Unknown: Cannot call session save handler in a recursive manner Unknown 0
ERROR - 2020-08-11 18:14:37 --> Severity: Warning --> Unknown: Failed to write session data using user defined save handler. (session.save_path: ) Unknown 0
ERROR - 2020-08-11 18:14:37 --> Severity: Warning --> mysqli::query(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 307
ERROR - 2020-08-11 18:14:37 --> Severity: Warning --> CI_DB_mysqli_driver::error(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 511
ERROR - 2020-08-11 18:14:37 --> Severity: Warning --> CI_DB_mysqli_driver::error(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 511
ERROR - 2020-08-11 18:14:37 --> Query error:  - Invalid query: SELECT RELEASE_LOCK('6111b1227ea62bf94d381e43697925e7') AS ci_session_lock
ERROR - 2020-08-11 18:14:37 --> Severity: Warning --> Cannot modify header information - headers already sent /Users/saleem/Sites/sma/system/core/Common.php 570
ERROR - 2020-08-11 18:16:23 --> Severity: Warning --> mysqli::real_escape_string(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 393
ERROR - 2020-08-11 18:16:23 --> Severity: Warning --> mysqli::query(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 307
ERROR - 2020-08-11 18:16:23 --> Severity: Warning --> CI_DB_mysqli_driver::error(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 511
ERROR - 2020-08-11 18:16:23 --> Severity: Warning --> CI_DB_mysqli_driver::error(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 511
ERROR - 2020-08-11 18:16:23 --> Query error:  - Invalid query: UPDATE `sma_sessions` SET `timestamp` = 1597140983
WHERE `id` = ''
ERROR - 2020-08-11 18:16:23 --> Severity: Warning --> Unknown: Cannot call session save handler in a recursive manner Unknown 0
ERROR - 2020-08-11 18:16:23 --> Severity: Warning --> Unknown: Failed to write session data using user defined save handler. (session.save_path: ) Unknown 0
ERROR - 2020-08-11 18:16:23 --> Severity: Warning --> mysqli::query(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 307
ERROR - 2020-08-11 18:16:23 --> Severity: Warning --> CI_DB_mysqli_driver::error(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 511
ERROR - 2020-08-11 18:16:23 --> Severity: Warning --> CI_DB_mysqli_driver::error(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 511
ERROR - 2020-08-11 18:16:23 --> Query error:  - Invalid query: SELECT RELEASE_LOCK('6111b1227ea62bf94d381e43697925e7') AS ci_session_lock
ERROR - 2020-08-11 18:16:23 --> Severity: Warning --> Cannot modify header information - headers already sent /Users/saleem/Sites/sma/system/core/Common.php 570
ERROR - 2020-08-11 18:23:16 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) /Users/saleem/Sites/sma/app/models/Site.php 268
ERROR - 2020-08-11 18:38:19 --> Severity: Warning --> mysqli::real_escape_string(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 393
ERROR - 2020-08-11 18:38:19 --> Severity: Warning --> mysqli::real_escape_string(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 393
ERROR - 2020-08-11 18:38:19 --> Severity: Warning --> mysqli::query(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 307
ERROR - 2020-08-11 18:38:19 --> Severity: Warning --> CI_DB_mysqli_driver::error(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 511
ERROR - 2020-08-11 18:38:19 --> Severity: Warning --> CI_DB_mysqli_driver::error(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 511
ERROR - 2020-08-11 18:38:19 --> Query error:  - Invalid query: UPDATE `sma_sessions` SET `timestamp` = 1597142299, `data` = ''
WHERE `id` = ''
ERROR - 2020-08-11 18:38:19 --> Severity: Warning --> Unknown: Cannot call session save handler in a recursive manner Unknown 0
ERROR - 2020-08-11 18:38:19 --> Severity: Warning --> Unknown: Failed to write session data using user defined save handler. (session.save_path: ) Unknown 0
ERROR - 2020-08-11 18:38:19 --> Severity: Warning --> mysqli::query(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 307
ERROR - 2020-08-11 18:38:19 --> Severity: Warning --> CI_DB_mysqli_driver::error(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 511
ERROR - 2020-08-11 18:38:19 --> Severity: Warning --> CI_DB_mysqli_driver::error(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 511
ERROR - 2020-08-11 18:38:19 --> Query error:  - Invalid query: SELECT RELEASE_LOCK('96d0baa134a584f2412d5ea47218192f') AS ci_session_lock
ERROR - 2020-08-11 18:38:19 --> Severity: Warning --> Cannot modify header information - headers already sent /Users/saleem/Sites/sma/system/core/Common.php 570
ERROR - 2020-08-11 18:40:35 --> Severity: Notice --> Trying to get property 'operator' of non-object /Users/saleem/Sites/sma/app/models/Site.php 194
ERROR - 2020-08-11 18:40:35 --> Severity: Notice --> Undefined index: return_purchase_ref /Users/saleem/Sites/sma/app/models/admin/Purchases_model.php 58
ERROR - 2020-08-11 18:40:35 --> Severity: error --> Exception: Object of class stdClass could not be converted to string /Users/saleem/Sites/sma/system/database/DB_driver.php 1471
ERROR - 2020-08-11 18:42:33 --> Severity: Notice --> Undefined index: return_purchase_ref /Users/saleem/Sites/sma/app/models/admin/Purchases_model.php 58
ERROR - 2020-08-11 18:49:17 --> Severity: Warning --> mysqli::real_escape_string(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 393
ERROR - 2020-08-11 18:49:17 --> Severity: Warning --> mysqli::query(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 307
ERROR - 2020-08-11 18:49:17 --> Severity: Warning --> CI_DB_mysqli_driver::error(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 511
ERROR - 2020-08-11 18:49:17 --> Severity: Warning --> CI_DB_mysqli_driver::error(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 511
ERROR - 2020-08-11 18:49:17 --> Query error:  - Invalid query: UPDATE `sma_sessions` SET `timestamp` = 1597142957
WHERE `id` = ''
ERROR - 2020-08-11 18:49:17 --> Severity: Warning --> Unknown: Cannot call session save handler in a recursive manner Unknown 0
ERROR - 2020-08-11 18:49:17 --> Severity: Warning --> Unknown: Failed to write session data using user defined save handler. (session.save_path: ) Unknown 0
ERROR - 2020-08-11 18:49:17 --> Severity: Warning --> mysqli::query(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 307
ERROR - 2020-08-11 18:49:17 --> Severity: Warning --> CI_DB_mysqli_driver::error(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 511
ERROR - 2020-08-11 18:49:17 --> Severity: Warning --> CI_DB_mysqli_driver::error(): Couldn't fetch mysqli /Users/saleem/Sites/sma/system/database/drivers/mysqli/mysqli_driver.php 511
ERROR - 2020-08-11 18:49:17 --> Query error:  - Invalid query: SELECT RELEASE_LOCK('d146a8bb76010cd80442185089396d89') AS ci_session_lock
ERROR - 2020-08-11 18:49:17 --> Severity: Warning --> Cannot modify header information - headers already sent /Users/saleem/Sites/sma/system/core/Common.php 570
