<?php
$output=array();
$ret=null;

// established connections
$command='ss -t4';
exec ( $command, $output, $ret );
  foreach ($output as $line){
    print $line."<br>\n";
  }

// loadaverage
$command='top -n 1 | grep "load average" | awk "{ print $11 }" | sed "s/,$//"';
exec ( $command, $output, $ret );
  foreach ($output as $line){
    print $line."<br>\n";
  }
?>
