<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<HTML>
	<BODY>
		<BR> 
		<form name = "formm" method = "post" action = "./deleteSQL.php">				
			&nbsp; &nbsp; &nbsp; 
			삭제할 책 ID : <INPUT TYPE="text" NAME="id" SIZE="60"> 
		</form>  
		 &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  
		 <INPUT TYPE="button" value="삭제" onClick="javascript:document.formm.submit();"> &nbsp; 
		<BR><BR>  

		<!-- 삭제 후보 책 목록 출력 -->
		<?php include("./selectSQL.php"); ?>
	</BODY>
</HTML>
 