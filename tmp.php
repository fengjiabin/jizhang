<?php 
$link=mysql_connect("192.168.1.10","root","123459"); 
if(!$link) echo "FAILD!连接错误，用户名密码不对"; 
else echo "OK!可以连接"; 
?> 