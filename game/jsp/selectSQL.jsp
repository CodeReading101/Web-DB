<%@ page language="java" import="java.sql.*, javax.sql.DataSource" contentType= "text/html;charset=utf8" pageEncoding="utf8"%>
<% request.setCharacterEncoding("UTF-8");%>
<%@ include file="./SQLconstants.jsp"%>
<HTML>
	<BODY>
		<input type="button" value="Tetris" onClick="location.href='Tetris.html'">		
		<input type="button" value="Snake" onClick="location.href='Snake.html'">		
		<BR>
		<BR> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<B><%=request.getParameter( "title" )%></B><BR><BR>  
		<TABLE border=1 width=600 cellspacing=2 cellpadding=7 style="text-align:center;" >
			<TR>
				<TD>RANK</TD>
				<TD>SCORE</TD>
				<TD>NAME</TD>
			</TR>
<%
	try
	{
		// MySQL 드라이버 연결
		Class.forName( jdbc_driver ); 
		Connection con = DriverManager.getConnection( mySQL_database, mySQL_id, mySQL_password ); 
		Statement stmt = con.createStatement();

		// MySQL 검색 실행 및 결과 출력
		String query = "select * from game where title = '" + request.getParameter( "title" ) + "' order by score desc;";
		ResultSet result = stmt.executeQuery( query );
		for( int i = 1; result.next(); i++ )
		{		
			out.print( "<TR><TD>" + i 
					+ "</TD><TD>" + result.getString( "score" )
					+ "</TD><TD>"+ result.getString( "name" ) 
					+ "</TD></TR>" );
		}

		// MySQL 드라이버 연결 해제
		result.close(); 
		stmt.close();
		con.close();
	}
	// 예외 처리
	catch( SQLException e )
	{
		out.print( e.getMessage() );
	}
	catch( Exception e ) 
	{
		out.print( e.getMessage() );
	}    
%>
		</TABLE>
	</BODY>
</HTML>
