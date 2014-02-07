<?php include('excel_reader2.php');
mysql_connect("localhost","root","25%hclacid");
mysql_select_db("mudoven");
$newFile = 'menu.xls';
$filedata = readExcel($newFile);
echo "<pre>";
print_r($filedata->data);
foreach($filedata->data as $data)
{
	$sqlcat = "SELECT * FROM  `category` WHERE category_name like '".$data[0]."'";
	$qcat=mysql_query($sqlcat);
	$varcat= mysql_fetch_assoc($qcat);
	$num = mysql_num_rows($qcat);
	if($num>0)
	{
		$catid = $varcat['id'];
	}
	else{
		$sql_insert = "INSERT INTO `category`(category_name) VALUES('".$data[0]."')";
		$q_insert = mysql_query($sql_insert);
		$catid = mysql_insert_id();
	}
	
	
	$sqltitle = "SELECT * FROM  `title` WHERE title like '".$data[1]."' AND category_id = ".$catid;
	$qtitle=mysql_query($sqltitle);
	echo mysql_error();
	$vartitle= mysql_fetch_assoc($qtitle);
	$num = mysql_num_rows($qtitle);
	if($num>0)
	{
		$titleid = $vartitle['id'];
	}
	else{
		$sql_insert1 = "INSERT INTO `title`(`title`,`category_id`) VALUES('".$data[1]."','".$catid."')";
		$t_insert1 = mysql_query($sql_insert1);
		$titleid = mysql_insert_id();
	}
	
	
		
	$sqlitems = "SELECT * FROM  `items` WHERE item_name like '".$data[2]."' AND category_id = '".$catid."' AND title_id='".$titleid."'";
	$qitems=mysql_query($sqlitems);
	echo mysql_error();
	$varitems= mysql_fetch_assoc($qitems);
	$num = mysql_num_rows($qitems);
	if($num>0)
	{
		$itemsid = $varitems['id'];
	}
	else{
		$sql_insert2 = "INSERT INTO `items`(`item_name`,`category_id`,`title_id`) VALUES('".$data[2]."','".$catid."','".$titleid."')";
		$t_insert2 = mysql_query($sql_insert2);
		$itemsid = mysql_insert_id();
	}


	
	
}

?>