<?php 
if (strpos(getallheaders()['User-Agent'],'iPhone')){ 
 echo '去iphone页面'; 
}
else {
 echo '去Android页面'; 
}
echo "---------------------------------------------";
echo getallheaders()['User-Agent'];
?> 
