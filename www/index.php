<?php
// Oscilate between healthy and unhealthy state
if( time()%20 < 10 ){
  http_response_code(403);
}
echo "Server ". $_SERVER['SERVER_SIGNATURE'] . "\n";
?>
