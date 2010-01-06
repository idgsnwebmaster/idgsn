<?php 
# Generate local static copies of dynamic RSS feeds for Widget
function writefeed(){
	global $rssurl, $localfile;
	$contents=file_get_contents($rssurl); //fetch RSS feed
	$contents = eregi_replace($rssurl, "http://www.idgtechnetwork.com/".$localfile, $contents);
	$fp=fopen($localfile, "w");
	fwrite($fp, $contents); //write contents of feed to cache file
	fclose($fp);
}

/*
Feed sources:
http://rssator.vermonster.com/channels/6-Networking/1-White_Papers.rss
http://rssator.vermonster.com/channels/9-Dell_White_Papers/1-White_Papers.rss
*/
$rsslist=array(
"6-Networking-White_Papers" => "http://rssator.vermonster.com/channels/6-Networking/1-White_Papers.rss",
"9-Dell-White_Papers" => "http://rssator.vermonster.com/channels/9-Dell_White_Papers/1-White_Papers.rss"
);

reset($rsslist);
while (list($key, $val) = each($rsslist)) {
    #echo "$key => $val\n";
	$rssurl=$val;
	$localfile= "feeds/" . $key . ".rss";
	writefeed();
}
?>