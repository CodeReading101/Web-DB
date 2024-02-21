<%@ page language="java" contentType= "text/html;charset=utf8" pageEncoding="utf8"%>
<HTML>
	<BODY> 
		<!-- 화면구성 -->
		<BR> 
		<form name = "formm" method = "post" action = "./deleteSQL.jsp">				
			&nbsp; &nbsp; &nbsp; 
			삭제할 책 ID : <INPUT TYPE="text" NAME="id" SIZE="60"> 
		</form>  
		 &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  
		 <INPUT TYPE="button" value="삭제" onClick="javascript:document.formm.submit();"> &nbsp; 
		<BR><BR>   
	
		<!-- 삭제 후보 책 목록 출력 -->
		<%@ include file="./selectSQL.jsp"%>
	</BODY>
</HTML>
 