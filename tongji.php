<?php
    include_once("shangmian.php");
?>

<?php
$income=0;
$spending=0;
$day0s=0;
$day0z=0;
$day1s=0;
$day1z=0;
$day2s=0;
$day2z=0;
$day3s=0;
$day3z=0;
$day4s=0;
$day4z=0;
$day5s=0;
$day5z=0;
$day6s=0;
$day6z=0;
$day7s=0;
$day7z=0;
$week0s=0;
$week0z=0;
$week1s=0;
$week1z=0;
$week2s=0;
$week2z=0;
$week3s=0;
$week3z=0;
$week4s=0;
$week4z=0;
$month0s=0;
$month0z=0;
$month1s=0;
$month1z=0;
$year0s=0;
$year0z=0;
?>

<table width='100%' border='0' align='left' cellpadding='5' cellspacing='1' bgcolor='#B3B3B3' class='table table-striped table-bordered'>
                <tr ><th colspan='9' style="text-align:center"><font color="green"><?php echo date("Y-m-d")?> &nbsp; ....................... &nbsp;<?php echo date("Y-m-d")?></font></th></tr>
				
				<tr>
                <th bgcolor='#EBEBEB' width="10%">统计</th>
				
                <th bgcolor='#EBEBEB'><?php echo date("d");?>日</th>
                <th bgcolor='#EBEBEB'><?php echo date("d",strtotime('-1 day'))?>日</th>
                <th bgcolor='#EBEBEB'><?php echo date("d",strtotime('-2 day'))?>日</th>
                <th bgcolor='#EBEBEB'><?php echo date("d",strtotime('-3 day'))?>日</th>
                <th bgcolor='#EBEBEB'><?php echo date("d",strtotime('-4 day'))?>日</th>
                <th bgcolor='#EBEBEB'><?php echo date("d",strtotime('-5 day'))?>日</th>
                <th bgcolor='#EBEBEB'><?php echo date("d",strtotime('-6 day'))?>日</th>
                <th bgcolor='#EBEBEB'><?php echo date("d",strtotime('-7 day'))?>日</th>
                </tr>
				<tr>
					<td align='left' width="20%" bgcolor='#FFFFFF'><font color="red">支出</font></td>
					<td align='left' width="10%" bgcolor='#FFFFFF'><font color="red" id="day0z"></font></td>
					<td align='left' width="10%" bgcolor='#FFFFFF'><font color="red" id="day1z"></font></td>
					<td align='left' width="10%" bgcolor='#FFFFFF'><font color="red" id="day2z"></font></td>
					<td align='left' width="10%" bgcolor='#FFFFFF'><font color="red" id="day3z"></font></td>
					<td align='left' width="10%" bgcolor='#FFFFFF'><font color="red" id="day4z"></font></td>
					<td align='left' width="10%" bgcolor='#FFFFFF'><font color="red" id="day5z"></font></td>
					<td align='left' width="10%" bgcolor='#FFFFFF'><font color="red" id="day6z"></font></td>
					<td align='left' width="10%" bgcolor='#FFFFFF'><font color="red" id="day7z"></font></td>
                </tr>
				<tr>
					<td align='left' width="20%" bgcolor='#FFFFFF'><font color="MediumSeaGreen">收入</font></td>
					<td align='left' width="10%" bgcolor='#FFFFFF'><font color="MediumSeaGreen" id="day0s"></font></td>
					<td align='left' width="10%" bgcolor='#FFFFFF'><font color="MediumSeaGreen" id="day1s"></font></td>
					<td align='left' width="10%" bgcolor='#FFFFFF'><font color="MediumSeaGreen" id="day2s"></font></td>
					<td align='left' width="10%" bgcolor='#FFFFFF'><font color="MediumSeaGreen" id="day3s"></font></td>
					<td align='left' width="10%" bgcolor='#FFFFFF'><font color="MediumSeaGreen" id="day4s"></font></td>
					<td align='left' width="10%" bgcolor='#FFFFFF'><font color="MediumSeaGreen" id="day5s"></font></td>
					<td align='left' width="10%" bgcolor='#FFFFFF'><font color="MediumSeaGreen" id="day6s"></font></td>
					<td align='left' width="10%" bgcolor='#FFFFFF'><font color="MediumSeaGreen" id="day7s"></font></td>
                </tr>
				<tr>
					<th width="20%" bgcolor='#EBEBEB'>统计</th>
					<th width="10%" bgcolor='#EBEBEB'>本周</th>
					<th width="10%" bgcolor='#EBEBEB'>上周</th>
					<th width="10%" bgcolor='#EBEBEB'>2周</th>
					<th width="10%" bgcolor='#EBEBEB'>3周</th>
					<th width="10%" bgcolor='#EBEBEB'>4周</th>
					<th width="10%" bgcolor='#EBEBEB'>本月</th>
					<th width="10%" bgcolor='#EBEBEB'>上月</th>
					<th width="10%" bgcolor='#EBEBEB'>本年</th>
                </tr>
                <tr>
					<td align='left' width="20%" bgcolor='#FFFFFF'><font color="red">支出</font></td>
					<td width="10%" align='left' bgcolor='#FFFFFF'><font color="red" id="week0z"></font></td>
					<td width="10%" align='left' bgcolor='#FFFFFF'><font color="red" id="week1z"></font></td>
					<td width="10%" align='left' bgcolor='#FFFFFF'><font color="red" id="week2z"></font></td>
					<td width="10%" align='left' bgcolor='#FFFFFF'><font color="red" id="week3z"></font></td>
					<td width="10%" align='left' bgcolor='#FFFFFF'><font color="red" id="week4z"></font></td>
					<td width="10%" align='left' bgcolor='#FFFFFF'><font color="red" id="month0z"></font></td>
					<td width="10%" align='left' bgcolor='#FFFFFF'><font color="red" id="month1z"></font></td>
					<td width="10%" align='left' bgcolor='#FFFFFF'><font color="red" id="year0z"></font></td>
				</tr>
				<tr>
					<td align='left' width="20%" bgcolor='#FFFFFF'><font color="MediumSeaGreen">收入</font></td>
					<td width="10%" align='left' bgcolor='#FFFFFF'><font color="MediumSeaGreen" id="week0s"></font></td>
					<td width="10%" align='left' bgcolor='#FFFFFF'><font color="MediumSeaGreen" id="week1s"></font></td>
					<td width="10%" align='left' bgcolor='#FFFFFF'><font color="MediumSeaGreen" id="week2s"></font></td>
					<td width="10%" align='left' bgcolor='#FFFFFF'><font color="MediumSeaGreen" id="week3s"></font></td>
					<td width="10%" align='left' bgcolor='#FFFFFF'><font color="MediumSeaGreen" id="week4s"></font></td>
					<td width="10%" align='left' bgcolor='#FFFFFF'><font color="MediumSeaGreen" id="month0s"></font></td>
					<td width="10%" align='left' bgcolor='#FFFFFF'><font color="MediumSeaGreen" id="month1s"></font></td>
					<td width="10%" align='left' bgcolor='#FFFFFF'><font color="MediumSeaGreen" id="year0s"></font></td>
                </tr>  

				<tr>
					<td align='left' width="20%" bgcolor='#FFFFFF'><font color="balck">结余</font></td>
					<td width="10%" align='left' bgcolor='#FFFFFF'><font color="balck" id="sweek0"></font></td>
					<td width="10%" align='left' bgcolor='#FFFFFF'><font color="balck" id="sweek1"></font></td>
					<td width="10%" align='left' bgcolor='#FFFFFF'><font color="balck" id="sweek2"></font></td>
					<td width="10%" align='left' bgcolor='#FFFFFF'><font color="balck" id="sweek3"></font></td>
					<td width="10%" align='left' bgcolor='#FFFFFF'><font color="balck" id="sweek4"></font></td>
					<td width="10%" align='left' bgcolor='#FFFFFF'><font color="balck" id="smonth0"></font></td>
					<td width="10%" align='left' bgcolor='#FFFFFF'><font color="balck" id="smonth1"></font></td>
					<td width="10%" align='left' bgcolor='#FFFFFF'><font color="balck" id="syear0"></font></td>
                </tr>  				
</table>
<!--day0-->  
<?php
//day0
$k=date("Y-m-d");
$sqltime=" actime >".strtotime($k." 0:0:0")." and actime <".strtotime($k." 23:59:59");
$query_sql = "SELECT * FROM jizhang_account where ".$sqltime." and jiid='$_SESSION[uid]'";
$query=mysql_query($query_sql);
while($row = mysql_fetch_array($query)){
              		$sql="select * from jizhang_account_class where classid= $row[acclassid] and ufid='$_SESSION[uid]'";
				$classquery=mysql_query($sql);
				$classinfo = mysql_fetch_array($classquery);
		  		
				if($classinfo[classtype]==1){
					$day0s=$day0s+$row[acmoney];
				}else{
					$day0z=$day0z+$row[acmoney];
				}
				}  ?>
				
<!--day1--> 				
<?php
//day1
$k=date("Y-m-d",strtotime('-1 day'));
$sqltime=" actime >".strtotime($k." 0:0:0")." and actime <".strtotime($k." 23:59:59");
$query_sql = "SELECT * FROM jizhang_account where ".$sqltime." and jiid='$_SESSION[uid]'";
$query=mysql_query($query_sql);
              
              		while($row = mysql_fetch_array($query)){
              		$sql="select * from jizhang_account_class where classid= $row[acclassid] and ufid='$_SESSION[uid]'";
				$classquery=mysql_query($sql);
				$classinfo = mysql_fetch_array($classquery);
				if($classinfo[classtype]==1){
					$day1s=$day1s+$row[acmoney];
				}else{
					$day1z=$day1z+$row[acmoney];
				}
				}  ?>
				
<!--day2--> 			
<?php
//day2
$k=date("Y-m-d",strtotime('-2 day'));
$sqltime=" actime >".strtotime($k." 0:0:0")." and actime <".strtotime($k." 23:59:59");
$query_sql = "SELECT * FROM jizhang_account where ".$sqltime." and jiid='$_SESSION[uid]'";
$query=mysql_query($query_sql);
              
              		while($row = mysql_fetch_array($query)){
              		$sql="select * from jizhang_account_class where classid= $row[acclassid] and ufid='$_SESSION[uid]'";
				$classquery=mysql_query($sql);
				$classinfo = mysql_fetch_array($classquery);
				if($classinfo[classtype]==1){
					$day2s=$day2s+$row[acmoney];
				}else{
					$day2z=$day2z+$row[acmoney];
				}
				}  ?>
				
<!--day3--> 			
<?php
//day3
$k=date("Y-m-d",strtotime('-3 day'));
$sqltime=" actime >".strtotime($k." 0:0:0")." and actime <".strtotime($k." 23:59:59");
$query_sql = "SELECT * FROM jizhang_account where ".$sqltime." and jiid='$_SESSION[uid]'";
$query=mysql_query($query_sql);
              
              		while($row = mysql_fetch_array($query)){
              		$sql="select * from jizhang_account_class where classid= $row[acclassid] and ufid='$_SESSION[uid]'";
				$classquery=mysql_query($sql);
				$classinfo = mysql_fetch_array($classquery);
				if($classinfo[classtype]==1){
					$day3s=$day3s+$row[acmoney];
				}else{
					$day3z=$day3z+$row[acmoney];
				}
				}  ?>
				
<!--day4--> 
<?php
//day4
$k=date("Y-m-d",strtotime('-4 day'));
$sqltime=" actime >".strtotime($k." 0:0:0")." and actime <".strtotime($k." 23:59:59");
$query_sql = "SELECT * FROM jizhang_account where ".$sqltime." and jiid='$_SESSION[uid]'";
$query=mysql_query($query_sql);
              
              		while($row = mysql_fetch_array($query)){
              		$sql="select * from jizhang_account_class where classid= $row[acclassid] and ufid='$_SESSION[uid]'";
				$classquery=mysql_query($sql);
				$classinfo = mysql_fetch_array($classquery);
				if($classinfo[classtype]==1){
					$day4s=$day4s+$row[acmoney];
				}else{
					$day4z=$day4z+$row[acmoney];
				}
				}  ?>
				
<!--day5--> 
<?php
//day5
$k=date("Y-m-d",strtotime('-5 day'));
$sqltime=" actime >".strtotime($k." 0:0:0")." and actime <".strtotime($k." 23:59:59");
$query_sql = "SELECT * FROM jizhang_account where ".$sqltime." and jiid='$_SESSION[uid]'";
$query=mysql_query($query_sql);
              
              		while($row = mysql_fetch_array($query)){
              		$sql="select * from jizhang_account_class where classid= $row[acclassid] and ufid='$_SESSION[uid]'";
				$classquery=mysql_query($sql);
				$classinfo = mysql_fetch_array($classquery);
				if($classinfo[classtype]==1){
					$day5s=$day5s+$row[acmoney];
				}else{
					$day5z=$day5z+$row[acmoney];
				}
				}  ?>
				
<!--day6--> 
<?php
//day6
$k=date("Y-m-d",strtotime('-6 day'));
$sqltime=" actime >".strtotime($k." 0:0:0")." and actime <".strtotime($k." 23:59:59");
$query_sql = "SELECT * FROM jizhang_account where ".$sqltime." and jiid='$_SESSION[uid]'";
$query=mysql_query($query_sql);
              
              		while($row = mysql_fetch_array($query)){
              		$sql="select * from jizhang_account_class where classid= $row[acclassid] and ufid='$_SESSION[uid]'";
				$classquery=mysql_query($sql);
				$classinfo = mysql_fetch_array($classquery);
				if($classinfo[classtype]==1){
					$day6s=$day6s+$row[acmoney];
				}else{
					$day6z=$day6z+$row[acmoney];
				}
				}  ?>
				
<!--day7--> 
<?php
//day7
$k=date("Y-m-d",strtotime('-7 day'));
$sqltime=" actime >".strtotime($k." 0:0:0")." and actime <".strtotime($k." 23:59:59");
$query_sql = "SELECT * FROM jizhang_account where ".$sqltime." and jiid='$_SESSION[uid]'";
$query=mysql_query($query_sql);
              
              		while($row = mysql_fetch_array($query)){
              		$sql="select * from jizhang_account_class where classid= $row[acclassid] and ufid='$_SESSION[uid]'";
				$classquery=mysql_query($sql);
				$classinfo = mysql_fetch_array($classquery);
				if($classinfo[classtype]==1){
					$day7s=$day7s+$row[acmoney];
				}else{
					$day7z=$day7z+$row[acmoney];
				}
				}  ?>
				
<!--week0-->
<?php
//week0
$k=date("Y-m-d",mktime(0, 0 , 0,date("m"),date("d")-date("w")+1,date("Y")));
$j=date("Y-m-d",mktime(23,59,59,date("m"),date("d")-date("w")+7,date("Y")));

$sqltime=" actime >".strtotime($k." 0:0:0")." and actime <".strtotime($j." 23:59:59");
$query_sql = "SELECT * FROM jizhang_account where ".$sqltime." and jiid='$_SESSION[uid]' " ;
$query=mysql_query($query_sql);
              
              		while($row = mysql_fetch_array($query)){
              		$sql="select * from jizhang_account_class where classid= $row[acclassid] and ufid='$_SESSION[uid]'";
				$classquery=mysql_query($sql);
				$classinfo = mysql_fetch_array($classquery);
			
				
				if($classinfo[classtype]==1){
					$week0s=$week0s+$row[acmoney];
				}else{
					$week0z=$week0z+$row[acmoney];
				}

		
				
				} ?>

<!--week1-->
<?php
//week1
$k=date("Y-m-d",mktime(0, 0 , 0,date("m"),date("d")-date("w")+1-7,date("Y")));
$j=date("Y-m-d",mktime(23,59,59,date("m"),date("d")-date("w")+7-7,date("Y")));

$sqltime=" actime >".strtotime($k." 0:0:0")." and actime <".strtotime($j." 23:59:59");
$query_sql = "SELECT * FROM jizhang_account where ".$sqltime." and jiid='$_SESSION[uid]'";
$query=mysql_query($query_sql);
	while($row = mysql_fetch_array($query)){
		$sql="select * from jizhang_account_class where classid= $row[acclassid] and ufid='$_SESSION[uid]'";
		$classquery=mysql_query($sql);
		$classinfo = mysql_fetch_array($classquery);
		if($classinfo[classtype]==1){
			$week1s=$week1s+$row[acmoney];
			}else{
				$week1z=$week1z+$row[acmoney];
				}
				} ?>
				
<!--week2-->
<?php
//week2
$k=date("Y-m-d",mktime(0, 0 , 0,date("m"),date("d")-date("w")+1-14,date("Y")));
$j=date("Y-m-d",mktime(23,59,59,date("m"),date("d")-date("w")+7-14,date("Y")));

$sqltime=" actime >".strtotime($k." 0:0:0")." and actime <".strtotime($j." 23:59:59");
$query_sql = "SELECT * FROM jizhang_account where ".$sqltime." and jiid='$_SESSION[uid]'";
$query=mysql_query($query_sql);
	while($row = mysql_fetch_array($query)){
		$sql="select * from jizhang_account_class where classid= $row[acclassid] and ufid='$_SESSION[uid]'";
		$classquery=mysql_query($sql);
		$classinfo = mysql_fetch_array($classquery);
		if($classinfo[classtype]==1){
			$week2s=$week2s+$row[acmoney];
			}else{
				$week2z=$week2z+$row[acmoney];
				}
				} ?>
				
<!--week3-->				
<?php
//week3
$k=date("Y-m-d",mktime(0, 0 , 0,date("m"),date("d")-date("w")+1-21,date("Y")));
$j=date("Y-m-d",mktime(23,59,59,date("m"),date("d")-date("w")+7-21,date("Y")));

$sqltime=" actime >".strtotime($k." 0:0:0")." and actime <".strtotime($j." 23:59:59");
$query_sql = "SELECT * FROM jizhang_account where ".$sqltime." and jiid='$_SESSION[uid]'";
$query=mysql_query($query_sql);
	while($row = mysql_fetch_array($query)){
		$sql="select * from jizhang_account_class where classid= $row[acclassid] and ufid='$_SESSION[uid]'";
		$classquery=mysql_query($sql);
		$classinfo = mysql_fetch_array($classquery);
		if($classinfo[classtype]==1){
			$week3s=$week3s+$row[acmoney];
			}else{
				$week3z=$week3z+$row[acmoney];
				}
				} ?>
				
<!--week4-->				
<?php
//week4
$k=date("Y-m-d",mktime(0, 0 , 0,date("m"),date("d")-date("w")+1-28,date("Y")));
$j=date("Y-m-d",mktime(23,59,59,date("m"),date("d")-date("w")+7-28,date("Y")));

$sqltime=" actime >".strtotime($k." 0:0:0")." and actime <".strtotime($j." 23:59:59");
$query_sql = "SELECT * FROM jizhang_account where ".$sqltime." and jiid='$_SESSION[uid]'";
$query=mysql_query($query_sql);
	while($row = mysql_fetch_array($query)){
		$sql="select * from jizhang_account_class where classid= $row[acclassid] and ufid='$_SESSION[uid]'";
		$classquery=mysql_query($sql);
		$classinfo = mysql_fetch_array($classquery);
		if($classinfo[classtype]==1){
			$week4s=$week4s+$row[acmoney];
			}else{
				$week4z=$week4z+$row[acmoney];
				}
				} ?>
				
				
<!--month0-->
<?php
//当月收付统计
$t = time();
$tk = mktime(0,0,0,date("m",$t),1,date("Y",$t));
$tj=mktime(23,59,59,date("m",$t),date("t"),date("Y",$t));
$j=date("Y-m-d",$tj);
$k=date("Y-m-d",$tk);

$sqltime=" actime >".strtotime($k." 0:0:0")." and actime <".strtotime($j." 23:59:59");
$query_sql = "SELECT * FROM jizhang_account where ".$sqltime." and jiid='$_SESSION[uid]' ";
$query=mysql_query($query_sql);
              
              		while($row = mysql_fetch_array($query)){
              		$sql="select * from jizhang_account_class where classid= $row[acclassid] and ufid='$_SESSION[uid]'";
				$classquery=mysql_query($sql);
				$classinfo = mysql_fetch_array($classquery);
		  
			
				
				if($classinfo[classtype]==1){
					$month0s=$month0s+$row[acmoney];
				}else{
					$month0z=$month0z+$row[acmoney];
				}

		
				
				} ?>
				
<!--month1-->
<?php
//前月收付统计
$t = time();
$tk = mktime(0,0,0,date("m",$t)-1,1,date("Y",$t));
$tj=mktime(23,59,59,date("m",$t)-1,date("t",$t3),date("Y",$t));
$j=date("Y-m-d",$tj);
$k=date("Y-m-d",$tk);

$sqltime=" actime >".strtotime($k." 0:0:0")." and actime <".strtotime($j." 23:59:59");
$query_sql = "SELECT * FROM jizhang_account where ".$sqltime." and jiid='$_SESSION[uid]' ";
$query=mysql_query($query_sql);
              
              		while($row = mysql_fetch_array($query)){
              		$sql="select * from jizhang_account_class where classid= $row[acclassid] and ufid='$_SESSION[uid]'";
				$classquery=mysql_query($sql);
				$classinfo = mysql_fetch_array($classquery);
		  
			
				
				if($classinfo[classtype]==1){
					$month1s=$month1s+$row[acmoney];
				}else{
					$month1z=$month1z+$row[acmoney];
				}

		
				
				} ?>
				
<!--year0-->				
<?php
//年收付统计
$t = time();
$tk = mktime(0,0,0,1,1,date("Y",$t));
$tj=mktime(23,59,59,12,31,date("Y",$t));
$j=date("Y-m-d",$tj);
$k=date("Y-m-d",$tk);

$sqltime=" actime >".strtotime($k." 0:0:0")." and actime <".strtotime($j." 23:59:59");
$query_sql = "SELECT * FROM jizhang_account where ".$sqltime." and jiid='$_SESSION[uid]' ";
$query=mysql_query($query_sql);
while($row = mysql_fetch_array($query)){
	$sql="select * from jizhang_account_class where classid= $row[acclassid] and ufid='$_SESSION[uid]'";
	$classquery=mysql_query($sql);
	$classinfo = mysql_fetch_array($classquery);
	if($classinfo[classtype]==1){
		$year0s=$year0s+$row[acmoney];
		}else{
			$year0z=$year0z+$row[acmoney];
			}
			} ?>
			

<script language="javascript">
document.getElementById("day0z").innerHTML="<?=$day0z ?>"
document.getElementById("day0s").innerHTML="<?=$day0s ?>"
document.getElementById("day1z").innerHTML="<?=$day1z ?>"
document.getElementById("day1s").innerHTML="<?=$day1s ?>"
document.getElementById("day2z").innerHTML="<?=$day2z ?>"
document.getElementById("day2s").innerHTML="<?=$day2s ?>"
document.getElementById("day3z").innerHTML="<?=$day3z ?>"
document.getElementById("day3s").innerHTML="<?=$day3s ?>"
document.getElementById("day4z").innerHTML="<?=$day4z ?>"
document.getElementById("day4s").innerHTML="<?=$day4s ?>"
document.getElementById("day5z").innerHTML="<?=$day5z ?>"
document.getElementById("day5s").innerHTML="<?=$day5s ?>"
document.getElementById("day6z").innerHTML="<?=$day6z ?>"
document.getElementById("day6s").innerHTML="<?=$day6s ?>"
document.getElementById("day7z").innerHTML="<?=$day7z ?>"
document.getElementById("day7s").innerHTML="<?=$day7s ?>"
document.getElementById("week0z").innerHTML="<?=$week0z ?>"
document.getElementById("week0s").innerHTML="<?=$week0s ?>"
document.getElementById("sweek0").innerHTML="<?=$week0s-$week0z ?>"
document.getElementById("week1z").innerHTML="<?=$week1z ?>"
document.getElementById("week1s").innerHTML="<?=$week1s ?>"
document.getElementById("sweek1").innerHTML="<?=$week1s-$week1z ?>"
document.getElementById("week2z").innerHTML="<?=$week2z ?>"
document.getElementById("week2s").innerHTML="<?=$week2s ?>"
document.getElementById("sweek2").innerHTML="<?=$week2s-$week2z ?>"
document.getElementById("week3z").innerHTML="<?=$week3z ?>"
document.getElementById("week3s").innerHTML="<?=$week3s ?>"
document.getElementById("sweek3").innerHTML="<?=$week3s-$week3z ?>"
document.getElementById("week4z").innerHTML="<?=$week4z ?>"
document.getElementById("week4s").innerHTML="<?=$week4s ?>"
document.getElementById("sweek4").innerHTML="<?=$week4s-$week4z ?>"
document.getElementById("month0z").innerHTML="<?=$month0z ?>"
document.getElementById("month0s").innerHTML="<?=$month0s ?>"
document.getElementById("smonth0").innerHTML="<?=$month0s-$month0z ?>"
document.getElementById("month1z").innerHTML="<?=$month1z ?>"
document.getElementById("month1s").innerHTML="<?=$month1s ?>"
document.getElementById("smonth1").innerHTML="<?=$month1s-$month1z ?>"
document.getElementById("year0z").innerHTML="<?=$year0z ?>"
document.getElementById("year0s").innerHTML="<?=$year0s ?>"
document.getElementById("syear0").innerHTML="<?=$year0s-$year0z ?>"
</script>

<script>
		window.onload=function() {
var oTxt1=document.getElementById('zhuan');
var oBtn1=document.getElementById('zhuan1');
oBtn1.onclick=function() {
location.href="tongji.php?p="+oTxt1.value+"";
}
}
</script>
<?php

if($_POST[Submit]){ 
echo "";
}else{
    if ($conn) {
mysql_select_db("jizhang");
        if (!$_GET[id]) {
            //$result = mysql_query("select * from jizhang");

//每页显示的数
$pagesize = 15;

//确定页数 p 参数
$p = $_GET['p']?$_GET['p']:1;

//数据指针
$offset = ($p-1)*$pagesize;

//查询本页显示的数据
$query_sql = "SELECT * FROM jizhang_account where jiid='$_SESSION[uid]' ORDER BY actime DESC LIMIT  $offset , $pagesize";

$query=mysql_query($query_sql);


//echo $query_sql;

            echo "<table width='100%' border='0' align='left' cellpadding='5' cellspacing='1' bgcolor='#B3B3B3' class='table table-striped table-bordered'>
                <tr>
                <th bgcolor='#EBEBEB'>账目</th>
                <th bgcolor='#EBEBEB'>收支</th>
                <th bgcolor='#EBEBEB'>金额</th>
                <th bgcolor='#EBEBEB'>时间</th>
                <th bgcolor='#EBEBEB'>备注</th>
                </tr>";
             
             if($result === FALSE) {
    die(mysql_error()); // TODO: better error handling
}

			while($row = mysql_fetch_array($query)){
				$sql="select * from jizhang_account_class where classid= $row[acclassid] and ufid='$_SESSION[uid]'";
				$classquery=mysql_query($sql);
				$classinfo = mysql_fetch_array($classquery);
                echo "<tr>";
                if($classinfo[classtype]==1){
                echo "<td align='left' bgcolor='#FFFFFF'><font color='MediumSeaGreen'>" . $classinfo['classname'] . "</font></td>";
                echo "<td align='left' bgcolor='#FFFFFF'><font color='MediumSeaGreen'>" . $row['acmoney'] . "</font></td>";
                echo "<td align='left' bgcolor='#FFFFFF'><font color='MediumSeaGreen'>收入</font></td>";
                echo "<td align='left' bgcolor='#FFFFFF'><font color='MediumSeaGreen'>".date("m-d",$row[actime])."</font></td>";
                echo "<td align='left' bgcolor='#FFFFFF'><font color='MediumSeaGreen'>". $row[acremark] ."</font></td>";
                }else{
                echo "<td align='left' bgcolor='#FFFFFF'><font color='red'>" . $classinfo['classname'] . "</font></td>";
                echo "<td align='left' bgcolor='#FFFFFF'><font color='red'>" . $row['acmoney'] . "</font></td>";
                echo "<td align='left' bgcolor='#FFFFFF'><font color='red'>支出</font></td>";
               echo "<td align='left' bgcolor='#FFFFFF'><font color='red'>".date("m-d",$row[actime])."</font></td>";
               echo "<td align='left' bgcolor='#FFFFFF'><font color='red'>". $row[acremark] ."</font></td>";
                }
				echo "</tr>";
            }
         echo "</table>";


echo "<table width='100%' border='0' align='left' cellpadding='5' cellspacing='1' bgcolor='#B3B3B3' class='table table-striped table-bordered'>
                <tr><td align='left' width='100%' bgcolor='#FFFFFF'>";
//分页代码
//计算总数
$count_result = mysql_query("SELECT count(*) as count FROM jizhang_account where jiid='$_SESSION[uid]'");
$count_array = mysql_fetch_array($count_result);

//计算总的页数
$pagenum=ceil($count_array['count']/$pagesize);
echo "<ul class='pagination'>";
echo '<li class="disabled"><a href="#">共',$count_array['count'],'条 <span id="total" style="display:none">',$pagenum,'</span></a></li>'; //后面共几页

if ($pagenum > 1) {
    for($i=1;$i<$pagenum;$i++) {
        if($i==$p) {
            echo "<span id='pagingText' style='display:none'>$i</span>";
    }
}
}

//循环输出各页数目及连接	echo ' <a href="tongji.php?p=',$i-1,'">上一页</a>';

echo " <li><a href='tongji.php?p=1'>首页</a></li>";
echo "<li><a href='tongji.php?p=$pagenum'>尾页</a></li>";
if ($pagenum > 1) {
    for($i=1;$i<=$pagenum;$i++) {
        if($i==$p) {
			if($i!=1){
            echo '<li><a href="tongji.php?p=',$i-1,'">&laquo;</a></li>';
			}
        } 
    }
}

if ($pagenum > 1) {
    for($i=1;$i<$pagenum;$i++) {
        if($i==$p) {
            echo '<li><a href="tongji.php?p=',$i+1,'">&raquo;</a></li>';
    }
}
}

echo "</ul>";
echo "<ul class='pagination' id='pagingDiv'><ul/>";
echo "</td>";
//echo "<td align='right' width='10%' bgcolor='#FFFFFF'><input type='text' name='zhuan' id='zhuan' style='width:35px'/> <input type='submit' name='go' id='go' value='go' /></td>"; //跳转页面

echo "</form>";
echo "</table>";
        }
		
		}
        //显示列表的内容
       
}
?>

   <script language="javascript">  
    //首先获取当前的总页数，一般是后台传递过来的，这里假定40页。  
    var total = document.getElementById("total").innerHTML;  
    //id="pagingDiv"的div通过pagingConstruct函数构造，比如加载网页是第1页的 
	var url= window.location.href;
var index = +url.substring(url.lastIndexOf('=') + 1);
if (index > 0){
    pagingConstruct(index);
}else {
	pagingConstruct(1);
}

    //形式参数paging是指当前页  
    function pagingConstruct(paging){  
        //先更新一下行内文本  
        document.getElementById("pagingText").innerHTML = paging;  
        var pagingDivInnerHTML = "";  
        //这里是加载省略号的flag  
        var isHiddenExist = 0; 
        //从第1页读到第40页。  
        for (var i = 1; i <= total; i++) {  
            //如果读到当前页，就仅仅加载一个文本，不放链接  
            if (i == paging) {  
                pagingDivInnerHTML += "<li class='active'><a href='#'>" + i + "</a></li>";  
            }  
            else {  
                //如果是页首，中间页，页尾，当前页的前后三页则不省略。 
				//if (i < 4 || i < (paging + 3) && i > (paging - 3)|| i > (total / 2 - 2) && i < (total / 2 + 2) || i > (total - 1)) { 
                if (i < 2 || i < (paging + 4) && i > (paging - 4) || i > (total - 1)) {  
                    pagingDivInnerHTML += "<li><a href='tongji.php?p=" + i + "' onclick='pagingConstruct(" + i + ")'>" + i + "</a></li>";  
                    isHiddenExist = 0;  
                }  
                //否则就构造...  
                else {  
                    if (isHiddenExist == 0) {  
                        pagingDivInnerHTML += "";  //引号里面放这个<li><a href='#'>...</a></li>显示...
                        isHiddenExist = 1;  
                    }  
                }  
            }  
        }  
        //把构造的内容放上去pagingDiv  
        document.getElementById("pagingDiv").innerHTML = pagingDivInnerHTML;  
    }  
</script> 
  

		  <?php
		
		  	if(!$_POST[Submit]){  
		  		
				 include_once("xiamian.php");
				exit();
				
		  	}

		  ?>
		  
		  
		  
</div>


<?php
    include_once("xiamian.php");
?>