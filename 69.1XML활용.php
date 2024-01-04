<?php

$myxml = file_get_contents('https://feeds.feedburner.com/zdkorea');

// echo $myxml;

$xmldom = simplexml_load_string($myxml);

// print_r($xmldom);
// exit;

echo "<h1>".$xmldom->channel->title."</h1>";
echo "<h2>".$xmldom->channel->description."</h2>";

$i= 0;
foreach($xmldom->channel->item AS $row){
    echo "<a href='{$row->link}'>".$row->title. "</a> 
    [$row->pubDate]
    
    <br>" ;
   $i++;
   if($i == 6){
    exit;
   }
    
}
?>