<?php
$mysql = mysqli_connect('server', 'username', 'password', 'databases'); //Mysqlサーバーへ接続
var_dump(get_resource_type($mysql)); //Mysql link