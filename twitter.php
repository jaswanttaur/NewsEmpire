<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>PHP JSON installation and json_decode() function | JSON tutorial | w3resource</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php        
$userid = 'tenthgeek'; //your handle
$count = '10';
$responseJson = file_get_contents('http://api.twitter.com/1/statuses/user_timeline.json?screen_name='.$userid.'&include_rts=1&count='.$count);

if ($responseJson) {
  $response = json_decode($responseJson);
}   

echo '<ul>';
foreach ($response as $tweet) {
    $tweet_text = $tweet->text; //get the tweet
    
    // make links link to URL
    $tweet_text = preg_replace("#(^|[\n ])([\w]+?://[\w\#$%&~/.\-;:=,?@\[\]+]*)#is", "\\1<a href='\\2'>\\2</a>", $tweet_text); 
    
    // make hashtags link to a search for that hashtag
    $tweet_text = preg_replace("/#([a-z_0-9]+)/i", "<a href=\"http://twitter.com/search/$1\">$0</a>", $tweet_text);
    
    // make mention link to actual twitter page of that person
    $tweet_text = preg_replace("/@([a-z_0-9]+)/i", "<a href=\"http://twitter.com/$1\">$0</a>", $tweet_text);
    
    // display each tweet in a list item
    echo "<li>" . $tweet_text . "</li>\n";
} 
echo '</ul>';
?>
</body>
</html>