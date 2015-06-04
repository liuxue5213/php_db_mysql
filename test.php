<meta charset='utf-8'>
<?php
/**
 * @Author: john scott
 * @Date:   2015-06-04 14:35:41
 * @Last Modified by:   anchen
 * @Last Modified time: 2015-06-04 15:58:43
 */

require 'mysql_db_class.php';

//$hj = new M("test");
//增
// echo $hj->insert(array("NULL","1@qq.com","xxx"));
// echo $hj->insert(array("email"=>"12@qq.com","password"=>"cccc"));
// echo $hj->insert("NULL,'123@qq.com','cde'");

//查
//查看所有数据
// $arr = $hj->select();
// print_r($arr);
//查看id大于3且id小于6 的id 和email 字段 的所有数据
// $arr = $hj->select("Time_zone_id<6","Name");
// print_r($arr);
// //获取数据库中一共有多少条记录
// $rt = $hj->select("1","*","count");
// echo $rt;

// 改
// $b = $hj->update("id=1","email = '1234@qq.com'");
// echo $b;
// $b = $hj->update("id>3 and id<6",array("email"=>"1234@qq.com"));
// echo $b;

// 删
// $b = $hj->delete("id>3");
// echo $b;
// 
// 执行查询sql语句
// $rt=$hj->select_sql('select * from db,user where db.id=user.id');
// print_r($rt);


//关闭
// $hj->close();
