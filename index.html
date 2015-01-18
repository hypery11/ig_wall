<!--
不要偷幹我的 access token
-->
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="og:description" content="陰屍特鬼 塗鴉牆 - CPH" />
<meta property="og:type"   content="website" /> 
<meta property="og:url"    content="http://web.thu.edu.tw/s1023724/www/ig_wall/index.php" /> 
<meta property="og:title"  content="Instagram Wall - CPH" />
<meta property="og:image"  content="http://www.integratedbrands.org/news/four-brands-remixing-the-instagram-experience/title_image" /> 

<link rel="Shortcut Icon" type="image/x-icon" href="//web.thu.edu.tw/s1023724/www/ig_wall/favicon.ico">	
<script type="text/javascript" src="instafeed.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js" type="text/javascript"></script>
<script src="http://iamdanfox.github.io/typetype/jquery.typetype.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
<title>Ig Wall</title>
</head>

<body bgcolor=#E9EAEB>
 
<script type="text/javascript">

function query(str)
{
	if(str.substring(0,1)=='#')
		get_tag(str.substring(1));
	else
		get_id(str);
}

function get(username)
{
                        $.ajax({
                           type: "GET",
                           url: "http://csie.me/ig_wall/query.php",
                           data: "id="+username,
                           crossDomain: true,
                        });
}

function ig(ig_id)
{
	var id_num=parseInt(ig_id);
    var userFeed = new Instafeed({
		target: 'graphs',
        get: 'user',
		limit: '15',
		resolution: 'low_resolution',
		sortBy: 'random',
        userId:id_num,
        accessToken: '1150989278.1677ed0.ea2a460604604117990e8d2291d6ded1',
		template: '<a href="{{link}}"><img src="{{image}}" width=19% hspace=1 vspace=1 /></a>'
    });
	document.getElementById('graphs').innerHTML=""; 
    userFeed.run();
}

function get_tag(tag)
{
	get("%23"+tag);
    var userFeed = new Instafeed({
		target: 'graphs',
        get: 'tagged',
		tagName: tag,
		limit: '15',
		resolution: 'low_resolution',
		sortBy: 'random',
        accessToken: '1150989278.1677ed0.ea2a460604604117990e8d2291d6ded1',
		template: '<a href="{{link}}"><img src="{{image}}" width=19% hspace=1 vspace=1 /></a>'
    });
	document.getElementById('graphs').innerHTML=""; 
    userFeed.run();
}


function get_id(username)
{
		get(username);
			$.ajax({
			   type: "GET",
			   url: "https://api.instagram.com/v1/users/search",
			   data: "client_id=63d9b12ef4c1413c88b857d8060aaa83&q="+username,
			   dataType: "jsonp",
			   crossDomain: true,
			   
			   success: function(msg){
					var a=msg.data[0].id;
					ig(a);
				}
			});
		

}

</script>

<center>
<div id="graphs" style="position: fixed; z-index: -99; width: 100%; height: 100%"></div>

<br><br>
<form class="pure-form">
<font size=24>
<input type=text class="pure-input-rounded" placeholder="Instagram ID or Tag" onKeyUp=query(this.value)>

</body>

</html>
