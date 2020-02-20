<?php 
if (strpos(getallheaders()['User-Agent'],'iPhone')){ 
  header( "Location: http://iphone.partner-demo.apps.cluster-beijing-4af7.beijing-4af7.example.opentlc.com/" );
}
else {
  header( "Location: http://android.partner-demo.apps.cluster-beijing-4af7.beijing-4af7.example.opentlc.com/" );
}

exit;
?> 
