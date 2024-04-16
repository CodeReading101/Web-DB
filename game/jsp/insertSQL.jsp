<%@ page language="java" import="java.sql.*, javax.sql.DataSource" contentType= "text/html;charset=utf8" pageEncoding="utf8"%>
<%@ include file="SQLconstants.jsp"%>
<% 
	// 이전 페이지에서 전달 받은 메시지 확인
	request.setCharacterEncoding("UTF-8");
	String name = request.getParameter( "name" );
 	String title= request.getParameter( "title" );
	String score = request.getParameter( "score" );
	try
	{
		// MySQL 드라이버 연결 
		Class.forName( jdbc_driver ); 
		Connection con = DriverManager.getConnection( mySQL_database, mySQL_id, mySQL_password ); 
		Statement stmt = con.createStatement();

		// MySQL 점수 등록 실행 	
		String query = "insert into game( name, title, score ) values ( '" + name + "', '" + title + "', '" + score + "');"; 
		query = new String( query.getBytes("utf-8") );
		if ( stmt.executeUpdate( query ) > 0 )
		{
			out.print( "등록 성공!" );
		}
		else 
		{
			out.print( "등록 실패!" );
		}

		// MySQL 드라이버 연결 해제
		stmt.close();
		con.close();
	} 
	// 예외 처리
	catch(SQLException e)
	{
		out.print( e.getMessage() );
	}
	catch( Exception e ) 
	{
		out.print( e.getMessage() );
	}   
%>

<!-- 다음 페이지(selectSQL.jsp)로 이동 -->
<form name = "frm" method = "post" action = "./selectSQL.jsp" >
	<input type = 'hidden' name = 'title' value = '<%=title%>' >
</form>
<script language="javascript">
	document.frm.submit();
</script>


