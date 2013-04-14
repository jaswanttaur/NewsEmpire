<!doctype html>
<html>
  
  <head>
    <title>News Empire</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <link rel="stylesheet" href="themes/amelia/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css">
    <link rel="stylesheet" href="https://djyhxgczejc94.cloudfront.net/builds/80037b02082b29f5f9cea127cab2a4ba4365ec67.css">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/reveal.css" rel="stylesheet" type="text/css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.reveal.js"></script>

    
    		<style type="text/css">
			body { font-family: "HelveticaNeue","Helvetica-Neue", "Helvetica", "Arial", sans-serif; }
		</style>
  </head>
  
  

<body>
    <title>Technology</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <link rel="stylesheet" href="themes/amelia/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css">
    <link rel="stylesheet" href="https://djyhxgczejc94.cloudfront.net/builds/80037b02082b29f5f9cea127cab2a4ba4365ec67.css">
    <link rel="stylesheet" href="css/divshot-util.css">
    <link rel="stylesheet" href="css/divshot-canvas.css">
    <div class="navbar navbar-fixed-top" autocomplete="off">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="#">NewsEmpire</a>
          <div class="navbar-content">
            <ul class="nav " style=""></ul>
          </div>
          <ul class="nav pull-left nav-tabs">
            <li>
              <a href="index.php">Technology</a> 
            </li>
            <li>
              <a href="entertainment.php">Entertainment</a> 
            </li>
            <li>
              <a href="sports.php">Sports</a> 
            </li>
            <li>
              <a href="india.php">India News</a> 
            </li>
            <li>
              <a href="world.php">World News</a> 
            </li>
            <li>
              <a href="mobile.php">Mobile</a> 
            </li>
            <li>
              <a href="programming.php">Programming</a> 
            </li>
            <li class="active">
              <a href="design.php">Design</a> 
            </li>
            <li class="pull-left">
              <a href="development.php">Development</a> 
            </li>
            <li>
              <a href="quotes.php">Quotes</a> 
            </li>
          </ul>
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>
    <div class="container">
      <a class="btn btn-large btn-primary btn-block visible-phone" href="#"><span class="btn-label">Sign Up Today!</span></a>
      <div class="row main-features">
        <div class="span4">
          <div class="well well-large" autocomplete="off">
            <h3>Smashing Magazine</h3>
            <p><?php        
$userid = 'smashingmag'; //your handle
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
?></p>
            <a class="btn pull-right btn-primary" href="#" data-reveal-id="smashingmag">Read More<br></a>       
            
        </div>
        </div>
        <div class="span4">
          <div class="well well-large" autocomplete="off">
            <h3>RE Web Design</h3>
            <p><?php        
$userid = 'Reencoded'; //your handle
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
?></p>
            <a class="btn pull-right btn-primary" href="#" data-reveal-id="Reencoded">Read More<br></a>
          </div>
        </div>
        <div class="span4">
          <div class="well well-large" autocomplete="off">
<h3>Web Design Fan</h3>
            <p><?php        
$userid = 'webdesignfan'; //your handle
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
?></p>
            <a class="btn pull-right btn-primary" href="#" data-reveal-id="webdesignfan">Read More<br></a>
          </div>
        </div>
        
<div style="clear:both" > </div>
		<div class="span4">
          <div class="well well-large" autocomplete="off">
<h3>web design news</h3>
            <p><?php        
$userid = 'webdesign_news'; //your handle
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
?></p>
            <a class="btn pull-right btn-primary" href="#" data-reveal-id="webdesign_news">Read More<br></a>
          </div>
        </div>
        
        <div class="span4">
          <div class="well well-large" autocomplete="off">
<h3>WebUpd8 -Ubuntu blog</h3>
            <p><?php        
$userid = 'WebUpd8'; //your handle
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
?></p>
            <a class="btn pull-right btn-primary" href="#" data-reveal-id="WebUpd8">Read More<br></a>
          </div>
        </div>
        
        <div class="span4">
          <div class="well well-large" autocomplete="off">
<h3>Total Web Design</h3>
            <p><?php        
$userid = 'totalwebdesign'; //your handle
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
?></p>
            <a class="btn pull-right btn-primary" href="#" data-reveal-id="totalwebdesign">Read More<br></a>
          </div>
        </div>
        
      </div>
    </div>
    <ul class="pager"></ul>
    <div class="pagination pull-left pagination-right"></div>
    <div class="pagination pagination-centered">
      <ul>
        <li>
          <a href="index.php">Technology</a> 
        </li>
        <li>
          <a href="entertainment.php">Entertainment</a> 
        </li>
        <li>
          <a href="sports.php">Sports</a> 
        </li>
        <li>
          <a href="india">India News</a> 
        </li>
        <li>
          <a href="world.php">World News</a> 
        </li>
        <li>
          <a href="mobile.php">Mobile</a> 
        </li>        
        <li>
          <a href="programming.php">Programming</a> 
        </li>        
        <li>
          <a href="design.php">Design</a> 
        </li>
        <li>
          <a href="development.php">Development</a> 
        </li>
        <li>
          <a href="quotes.php">Quotes</a> 
        </li>
      </ul>
    </div>

</body>

</html>




  <div id="smashingmag" class="reveal-modal textColor">
			<h1>Smashing Magazine</h1>
			<p><?php        
$userid = 'smashingmag'; //your handle
$count = '50';
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
?></p>
			
</div>

<div id="Reencoded" class="reveal-modal textColor">
			<h1>RE Web Design</h1>
			<p><?php        
$userid = 'Reencoded'; //your handle
$count = '50';
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
?></p>
			
</div>


<div id="webdesignfan" class="reveal-modal textColor">
			<h1>Web Design Fan</h1>
			<p><?php        
$userid = 'webdesignfan'; //your handle
$count = '50';
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
?></p>
			
</div>

<div id="webdesign_news" class="reveal-modal textColor">
			<h1>web design news</h1>
			<p><?php        
$userid = 'webdesign_news'; //your handle
$count = '50';
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
?></p>
			
</div>

<div id="WebUpd8" class="reveal-modal textColor">
			<h1>WebUpd8 -Ubuntu blog</h1>
			<p><?php        
$userid = 'WebUpd8'; //your handle
$count = '50';
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
?></p>
			
</div>

<div id="totalwebdesign" class="reveal-modal textColor">
			<h1>Total Web Design</h1>
			<p><?php        
$userid = 'totalwebdesign'; //your handle
$count = '50';
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
?></p>
			
</div>

