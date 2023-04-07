<?php
//Configuration
	include "libs/remove-unicode.php";
	//include "libs/PHPExcel/IOFactory.php";
//Session

//Site Redirect	
	$ctrl="ctrls/c_index.php";
	$site="";

	if(isset($_GET["ctrl"]))
		$site=$_GET["ctrl"];

//Division Manage:	
	switch ($site)
	{
		//Main
			case "TrangChu":
				$ctrl="trangchu.php";
				break;
			case "DatVe":
				$ctrl="datve.php";
				break;
			case "HuongDan":
				$ctrl="huongdan.php";
				break;
			case "DangKy":
				$ctrl="dangky.php";
				break;
			case "LienHe":
				$ctrl="lienhe.php";
				break;	
		default:
			$ctrl="trangchu.php";
			
			break;

	}
	
//Head		
	include "header.php";
//Body	

//	{
		include $ctrl; //Nếu có đăng nhập thì mới điều hướng về các tuỳ chọn
//	}
//Footer
	include "footer.php";
?>


