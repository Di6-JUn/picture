<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="keywords" content="C.C.,c.c.,cc">
	<meta name="viewprot" content="width=device-width, initial-scale=1.0">
	<title>c.c.的主页 </title>
</head>
<!--标题向右20%
<script>
	h1{
		matgin-right:20%;
	}
</script>
-->
<body>
<div>
<!--
	<h1>I love C.C. forever</h1>
-->
</div>
<?php
	include 'findpicture.php';

	$path = "picture";
	$filesinfo=getDir2($path);
//	print_r($filesinfo);
//	echo "<img src='picture/749ce88cgy1fcmiehxuncj20i20rpgxm.jpg'>";


//用数组输出图片
/*	foreach($filesinfo as $v){
		echo("<img src=" . $v .">");

	}
*/
//存入数据库
/*	connect_db($filesinfo);

         $severname = '172.16.70.26';
        $username = 'root';
        $password = '';
        $dbname='cc';
        try {

                $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
         //设置PDO错误为异常
                 $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERMODE_EXCEPTION);

                foreach($filesinfo as $key => $v)
                {
                $sql = " INSERT INTO picture_address".
                        "(id,address)".
                        "VALUES ".
                        "('$key','$v')";
                 // use exec() because no results are returned 
		$conn -> exec($sql);
       //         var_dump($conn);
		}
        }
        catch(PDOException $e)
        {
                echo $sql . "<br>" .$e -> getMessage();
        }
*/
//用数据库输出图片
//分页
//	function show_picture(){
		$page_no = $_GET["page_no"];//确定那一页
		$page_size =2; //显示数目
		$page_no = $page_no<1?1:$page_no;//判断是否为首次访问网页
		$start =($page_no - 1 ) * $page_size;//确定结果集哪一条数据开始
		
		$sql = "SELECT address FROM picture_address order by id limit $start" . "," .$page_size;
		$sql_1="select count(*) from picture_address";
	
		foreach($conn -> query($sql) as $v){	
	//	print_r ($v);	//有问题：输出Array ( [address] => picture/749ce88cgy1fc8vdbzom0j20i20tjqii.jpg [0] => picture/749ce88cgy1fc8vdbzom0j20i20tjqii.jpg ) 
	
		echo ("<img src=" . $v['address'] .">");
		}
		
		$url="";
		$params ="";
		$row_count=$conn ->query($sql_1) ->fetchColumn();
        //      var_dump( $row_count);
		$link= "index.php?1";
		$offset = 2;

		if($link != ""){
                        $pos = strpos($link,"?");

                        if($pos ===false ){
                                $url = $link;
                        }else{
                                $url=substr($link,0,$pos);
                                $params=substr($link,$pos+1);
                        }
                }

                $navibar = "<div class=\"pagination\"><ul>";
               // $offset=self::OFFSET;
                //$page_size=10;
                $total_page=$row_count%$page_size==0?$row_count/$page_size:ceil($row_count/$page_size);

                $page_no=$page_no<1?1:$page_no;
                $page_no=$page_no>($total_page)?($total_page):$page_no;
                if ($page_no > 1){
                        $navibar .= "<ul><a href=\"$url?$params&page_no=1\">first page</a></ul>\n <ul><a href=\"$url?$params&page_no=".($page_no-1)." \">previous page </a><span class='pipe'>|</span>\n";
                }
                /**** 显示页数 分页栏显示11页，前5条...当前页...后5条 *****/
                $start_page = $page_no -$offset;
                $end_page =$page_no+$offset;
                if($start_page<1){
                        $start_page=1;
                }
                if($end_page>$total_page){
                        $end_page=$total_page;
                }
                for($i=$start_page;$i<=$end_page;$i++){
                        if($i==$page_no)
                        {
                                $navibar.= "<span> $i </span><span class='pipe'>|</span>";
                        }
                        else
                        {
                                $navibar.= "<a href=\" $url?$params&page_no=$i \"> $i </a><span class='pipe'>|</span>";
                        }
                }

                if ($page_no < $total_page){
                        $navibar .= "<a href=\"$url?$params&page_no=".($page_no+1)."\"> next page</a><ul><a href=\"$url?$params&page_no=$total_page\">last page</a></ul> ";
                }
                if($total_page>0){
                        $navibar.="<ul><a>".$page_no ."/". $total_page. "</a></ul>";
                }
		 $navibar.="<ul><a>total:" . $row_count."</a></ul>";
                $jump ="";
                //$jump ="<li><form action='$url' method='GET' name='jumpForm'><input type='text' name='page_no' value='$page_no'></form></li>";

                $navibar.=$jump;
                $navibar.="</ul></div>";

       		echo  $navibar;	
//	}


?>
</body>
</html>
