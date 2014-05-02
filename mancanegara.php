<html>
<head>
<style>
p.padding
{
padding-top:25px;
padding-bottom:25px;
padding-right:50px;
padding-left:50px;
color:#612915;
}
</style>
</head>
<body>
<p class="padding">
<h1>Breaking News</h1>

<?php
$html = "";
$url = "http://news.yahoo.com/rss/world;_ylt=AqhnSDxRPLJbHuZf6V8r2u65scB_;_ylu=X3oDMTFqbTQ3ajl2BG1pdANSU1MgU2l0ZUluZGV4IFdvcmxkBHBvcwM0BHNlYwNNZWRpYVJTU0VkaXRvcmlhbA--;_ylg=X3oDMTFlamZvM2ZlBGludGwDdXMEbGFuZwNlbi11cwRwc3RhaWQDBHBzdGNhdAMEcHQDc2VjdGlvbnM-;_ylv=3";
$xml = simplexml_load_file($url);
 
for($i = 0; $i < 5; $i++){
 
    $title = $xml->channel->item[$i]->title;
    $link = $xml->channel->item[$i]->link;
    $description = $xml->channel->item[$i]->description;
    $pubDate = $xml->channel->item[$i]->pubDate;
 
    $html .= "<a href='$link'><h3>$title</h3></a>";
    $html .= "$description";
    $html .= "<br />$pubDate<hr />";
}
echo $html;
?>
 </p>
 </body>
 </html>
