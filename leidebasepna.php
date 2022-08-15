
	<?php
  
// The location of the PDF file
// on the server
$filename = "leidebase/lbpna.pdf";
  
// Header content type
header("Content-type: application/pdf");
  
header("Content-Length: " . filesize($filename));
  
// Send the file to the browser.
readfile($filename);
?> 

								
		