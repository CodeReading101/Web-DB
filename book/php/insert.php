<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<HTML>
	<BODY>
		<br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<b> - 새 책 등록 - </b>
		<br> 
		<form name = "formm" method = "post" action = "./insertSQL.php">				
			<br> I &nbsp; &nbsp; D &nbsp;:  <INPUT TYPE = "text" name = "id" SIZE="60" >
			<br> 제 &nbsp; 목 : <INPUT TYPE = "text" NAME = "title" SIZE="60" >
			<br> 저 &nbsp; 자 : <INPUT TYPE = "text" NAME = "author" SIZE="60" >
			<br> 출판사 : <INPUT TYPE = "text" NAME = "publisher" SIZE="60" >
			<br> 출판일 : <INPUT TYPE = "text" NAME = "date" SIZE="60" >
			<br> 이미지 : <INPUT TYPE = "text" NAME = "image" SIZE="60" >
		</form>  
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
		<INPUT TYPE="button" value="등록" onClick="javascript:document.formm.submit();"> &nbsp; 
	</BODY>
</HTML>

<?php 
	// 로그 데이터 추출
	include("./log.php");
	writeLog( "새 책을 등록합니다" );
?>
