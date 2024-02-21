<%@ page language="java" import="java.io.*, java.time.*" contentType= "text/html;charset=utf8" pageEncoding="utf8"%>
<%!
	public void writeLog( String message, HttpServletRequest request, HttpSession session )
	{
		try 
		{
			// �α� ���� : ex) /var/lib/tomcat8/webapps/ROOT/book/jsp/log.txt, /usr/local/tomcat/webapps/ROOT/book/jsp/log.txt
			final String logFileName = "/usr/local/tomcat/webapps/ROOT/book/jsp/log.txt";	 
			BufferedWriter writer = new BufferedWriter( new FileWriter( logFileName, true ) );

			// �α� ������ ���
			writer.append( "\nTime:\t" + LocalDate.now() + " " + LocalTime.now() 	// ���� �ð�	
				+ "\tSessionID:\t" + session.getId()				// ���� ID	
				+ "\tURI:\t" + request.getRequestURI()				// ���� ������ 
				+ "\tPrevious:\t" + request.getHeader("referer") 		// ���� ���(����������)
				+ "\tBrowser:\t" + request.getHeader("User-Agent") 		// ���� ������	
				+ "\tMessage:\t" + message );

			writer.close();
		} 
		// ���� ó��
		catch (IOException e) 
		{
			e.printStackTrace();
		}
	}
%>
