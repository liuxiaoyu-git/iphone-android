<?php 
foreach (getallheaders() as $name => $value) { 
	echo "$name: $value <br>"; 
} 
?> 

<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>Hello World</p>'; ?> 
 </body>
</html>
