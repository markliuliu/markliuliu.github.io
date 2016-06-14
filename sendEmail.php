	<?php 
			
				ini_set('display_errors',true);
				ini_set('error_reporting', E_ALL);
				echo ini_set('SMTP','msa.hinet.net');
				echo ini_get('SMTP');
				//phpinfo();
				$MailTo    = "markliu0000@gmail.com"; 
				$MailTitle = "測試信"; 
				$MailText  = $_POST["content"]; 
				$MailFrom  = "From:markliu0000@gmail.com"; 
				$Form      = "Content-Type: text/html; charset='big5';\n"; 
				mail($MailTo, $MailTitle, $MailText, $MailFrom); 
				
				
			
	?>