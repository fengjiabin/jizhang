<?php
    include_once("shangmian.php");
?>
		<script>
		window.onload=function() {
var oTxt1=document.getElementById('zhuan');
var oBtn1=document.getElementById('zhuan1');
oBtn1.onclick=function() {
location.href="view.php?p="+oTxt1.value+"";
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
$pagesize = 20;

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

//循环输出各页数目及连接	echo ' <a href="view.php?p=',$i-1,'">上一页</a>';

echo " <li><a href='view.php?p=1'>首页</a></li>";
echo "<li><a href='view.php?p=$pagenum'>尾页</a></li>";
if ($pagenum > 1) {
    for($i=1;$i<=$pagenum;$i++) {
        if($i==$p) {
			if($i!=1){
            echo '<li><a href="view.php?p=',$i-1,'">&laquo;</a></li>';
			}
        } 
    }
}

if ($pagenum > 1) {
    for($i=1;$i<$pagenum;$i++) {
        if($i==$p) {
            echo '<li><a href="view.php?p=',$i+1,'">&raquo;</a></li>';
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
                    pagingDivInnerHTML += "<li><a href='view.php?p=" + i + "' onclick='pagingConstruct(" + i + ")'>" + i + "</a></li>";  
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