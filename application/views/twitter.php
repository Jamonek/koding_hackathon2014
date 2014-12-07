$twitterUsername = "Team_Goats";
$amountToShow = 3;
$twitterRssFeedUrl = 'https://api.twitter.com/1/statuses/user_timeline.rss?screen_name='.$twitterUsername.'&count='.$amountToShow;

$twitterPosts = false;
$xml = @simplexml_load_file($twitterRssFeedUrl);
if(is_object($xml)){
    foreach($xml->channel->item as $twit){
    if(is_array($twitterPosts) && count($twitterPosts)==$amountToShow){
    break;
}
$d['title'] = stripslashes(htmlentities($twit->title,ENT_QUOTES,'UTF-8'));
$description = stripslashes(htmlentities($twit->description,ENT_QUOTES,'UTF-8'));
if(strtolower(substr($description,0,strlen($twitterUsername))) == strtolower($twitterUsername)){
    $description = substr($description,strlen($twitterUsername)+1);
}
$d['description'] = $description;
$d['pubdate'] = strtotime($twit->pubDate);
$d['guid'] = stripslashes(htmlentities($twit->guid,ENT_QUOTES,'UTF-8'));
$d['link'] = stripslashes(htmlentities($twit->link,ENT_QUOTES,'UTF-8'));
$twitterPosts[]=$d;
}
}else{

die('Can`t fetch the feed you requested');
}
