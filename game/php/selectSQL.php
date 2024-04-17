<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<HTML>
	<BODY>
		<input type="button" value="Tetris" onClick="location.href='Tetris.html'">		
		<input type="button" value="Snake" onClick="location.href='Snake.html'">		
		<BR>
		<BR> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<B><?php echo $_POST['title']; ?></B><BR><BR>  
		<TABLE border=1 width=600 cellspacing=2 cellpadding=7 style="text-align:center;" >
			<TR>
				<TD>RANK</TD>
				<TD>SCORE</TD>
				<TD>NAME</TD>
			</TR>

<?php 
	// MySQL 드라이버 연결 
	include("./SQLconstants.php");
	$conn = mysqli_connect($mySQL_host,$mySQL_id,$mySQL_password,$mySQL_database) or die ("Can't access DB");

	// MySQL 책 검색 실행 및 결과 출력
	$query = "select * from game where title = '".$_POST['title']."' order by score desc;";
	$resultSet = mysqli_query( $conn, $query );
	for( $rank=1; $result = mysqli_fetch_array( $resultSet ); $rank++ )
	{
		echo "\n<TR><TD>".$rank;
		echo "\n</TD><TD>".$result['score'];
		echo "\n</TD><TD>".$result['name'];
		echo "\n</TD></TR>";
	}

	// MySQL 드라이버 연결 해제
	mysqli_free_result( $resultSet );
	mysqli_close( $conn );
?>
		</TABLE>
	</BODY>
</HTML>

