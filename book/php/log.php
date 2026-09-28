<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php 
	function writeLog( $message )
	{
		// 로그 파일 이름 : ex) /var/www/html/book/php/log.txt, /home/book/php/log.txt
        	$logFileName = "/var/www/html/book/php/log.txt";
        	$logFile = fopen( $logFileName, "a" );
		if( $logFile )
		{
			// 로그 데이터 출력
			session_start();
			fwrite( $logFile, "\nTime:\t".date('Y-m-d H:i:s')	// 접속 시간
				."\tSessionID:\t".session_id()			// 접속 ID
				."\tURI:\t".$_SERVER['PHP_SELF']		// 현재 페이지
				."\tPrevious:\t".$_SERVER["HTTP_REFERER"] 	// 접속 경로(이전페이지)
				."\tBrowser:\t".$_SERVER['HTTP_USER_AGENT'] 	// 접속 브라우저	
				."\tMessage:\t".$message );
        		fclose( $logFile );
		}
		else
		{
			$error = error_get_last();
			echo "[파일열기오류] ".$error['message'];
		}
	}
?>