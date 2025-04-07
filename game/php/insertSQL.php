<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php 
	// 이전 페이지에서 전달 받은 메시지 확인
	$name = $_POST['name'];
	$title = $_POST['title'];
	$score= $_POST['score'];

	// MySQL 드라이버 연결 
	include("./SQLconstants.php");
	$conn = mysqli_connect( $mySQL_host, $mySQL_id, $mySQL_password, $mySQL_database ) or die( "Can't access DB" );

	// MySQL 책 추가 실행 	
	$query = "INSERT INTO game( name, title, score ) VALUES ( '".$name."', '".$title."', '".$score."');"; 
	$result = mysqli_query( $conn, $query );
	if( !$result ) 
	{	
		echo "등록 성공!";
	} 
	else 
	{
		echo "등록 실패!";
	} 

	// MySQL 드라이버 연결 해제
	mysqli_close( $conn );
?>

<form name = "frm" method = "post" action = "./selectSQL.php" >
	<input type = 'hidden' name = 'title' value = '<?php echo $title;?>' >
</form>
<script language="javascript">
	document.frm.submit();
</script>
