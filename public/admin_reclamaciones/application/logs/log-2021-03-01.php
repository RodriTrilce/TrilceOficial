<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-03-01 00:00:44 --> Severity: error --> Exception: syntax error, unexpected '=>' (T_DOUBLE_ARROW), expecting ',' or ')' C:\xampp\htdocs\ceba_intranet\application\models\admin\User_model.php 16
ERROR - 2021-03-01 00:00:55 --> Severity: error --> Exception: syntax error, unexpected '=', expecting ',' or ')' C:\xampp\htdocs\ceba_intranet\application\models\admin\User_model.php 16
ERROR - 2021-03-01 00:02:02 --> Query error: Column 'id_perfil' in where clause is ambiguous - Invalid query: SELECT *
FROM `tab_usuario`
JOIN `tab_perfil` ON `tab_perfil`.`id_perfil` = `tab_usuario`.`id_perfil`
WHERE `id_perfil` = '1'
ORDER BY `id_usuario` DESC
ERROR - 2021-03-01 00:18:24 --> Severity: error --> Exception: C:\xampp\htdocs\ceba_intranet\application\models/admin/Student_model.php exists, but doesn't declare class Student_model C:\xampp\htdocs\ceba_intranet\system\core\Loader.php 336
ERROR - 2021-03-01 00:18:51 --> Severity: Notice --> Undefined variable: all_users C:\xampp\htdocs\ceba_intranet\application\views\admin\students\student_list.php 26
ERROR - 2021-03-01 00:18:51 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\ceba_intranet\application\views\admin\students\student_list.php 26
