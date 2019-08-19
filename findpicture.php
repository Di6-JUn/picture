<?php
	include "linkdb.php";
	//$path为$_POST到的相簿名
/*	function filesinfo($path){
		if(!isset($path)){
			$path = "picture";
		}

		$dir = '/data/gmtools/test';// .  $path;
		chdir($dir);
		echo getcwd();
		die();
	//遍历目录
		foreach(glob(*) as $v) {
			$files = $v ;
			}
		var_dump($files);

	/*	if($dh =opendir($dir)){
			while(($files = readdir($dh)) !== false){
				var_dump( $files );
			}	
		closedir($dh);
		}	*/
//	}

/**
 * 使用glob 遍历
 * @param $path
 */
function getDir2($path)
{
	$dir= "/data/gmtools/test/" . $path;
    //判断目录是否为空
    if(!file_exists($dir)) {
        return [];
    }

    $fileItem = [];

    //切换如当前目录
    chdir($dir);

    foreach(glob('*') as $v) {
        $newPath = $path . DIRECTORY_SEPARATOR . $v;
 /*       if(is_dir($newPath)) {
            $fileItem = array_merge($fileItem,getDir2($newPath));
        }else if(is_file($newPath)) {
	}
*/
            $fileItem[] = $newPath;
        
    }

    return $fileItem;
}


/*
//picture的地址存入数据库
function connect_db($filesinfo){
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
		}	
	}
	catch(PDOException $e)
	{
		echo $sql . "<br>" .$e -> getMessage();
	}
}
*/
//取出picture在数据库的地址
/*function select(){
	$severname = '172.16.70.26';
        $username = 'root';
        $password = '';
        $dbname='cc';

	try {
	
		$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
		 //设置PDO错误为异常
		 $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERMODE_EXCEPTION);
		
	
		$sql= "SELECT * FROM picture_address";
		$retval = PDO::query($sql , $conn);
		return $retval;
	}

}
*/
?>
