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
            <li  class="active">
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
            <li >
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
            <h3>Times of India</h3>
            <p><?php        
$userid = 'timesofindia'; //your handle
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
            <a class="btn pull-right btn-primary" href="#" data-reveal-id="timesofindia">Read More<br></a>       
            
        </div>
        </div>
        <div class="span4">
          <div class="well well-large" autocomplete="off">
            <h3>MSN India</h3>
            <p><?php        
$userid = 'msnindia'; //your handle
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
            <a class="btn pull-right btn-primary" href="#" data-reveal-id="msnindia">Read More<br></a>
          </div>
        </div>
        <div class="span4">
          <div class="well well-large" autocomplete="off">
<h3>Yahoo! India</h3>
            <p><?php        
$userid = 'YahooIndia'; //your handle
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
            <a class="btn pull-right btn-primary" href="#" data-reveal-id="YahooIndia">Read More<br></a>
          </div>
        </div>
        
<div style="clear:both" > </div>
		<div class="span4">
          <div class="well well-large" autocomplete="off">
<h3>NDTV</h3>
            <p><?php        
$userid = 'ndtv'; //your handle
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
            <a class="btn pull-right btn-primary" href="#" data-reveal-id="ndtv">Read More<br></a>
          </div>
        </div>
        
        <div class="span4">
          <div class="well well-large" autocomplete="off">
<h3>CNN-IBN News</h3>
            <p><?php        
$userid = 'ibnlive'; //your handle
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
            <a class="btn pull-right btn-primary" href="#" data-reveal-id="ibnlive">Read More<br></a>
          </div>
        </div>
        
        <div class="span4">
          <div class="well well-large" autocomplete="off">
<h3>India Today</h3>
            <p><?php        
$userid = 'IndiaToday'; //your handle
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
            <a class="btn pull-right btn-primary" href="#" data-reveal-id="IndiaToday">Read More<br></a>
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




  <div id="timesofindia" class="reveal-modal textColor">
			<h1>Times of India</h1>
			<p><?php        
$userid = 'timesofindia'; //your handle
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

<div id="msnindia" class="reveal-modal textColor">
			<h1>MSN India</h1>
			<p><?php        
$userid = 'msnindia'; //your handle
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


<div id="YahooIndia" class="reveal-modal textColor">
			<h1>Yahoo! India</h1>
			<p><?php        
$userid = 'YahooIndia'; //your handle
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

<div id="ndtv" class="reveal-modal textColor">
			<h1>NDTV</h1>
			<p><?php        
$userid = 'ndtv'; //your handle
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

<div id="ibnlive" class="reveal-modal textColor">
			<h1>CNN-IBN News</h1>
			<p><?php        
$userid = 'ibnlive'; //your handle
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

<div id="IndiaToday" class="reveal-modal textColor">
			<h1>India Today</h1>
			<p><?php        
$userid = 'IndiaToday'; //your handle
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

