<?php

require_once("connect.php");

?>
<!doctype html>
<html lang="en-US">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Life-Of-Story</title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-8559304347963965",
          enable_page_level_ads: true
     });
</script>

<link rel="stylesheet" href="index.css"/>

<style>
    
    
li.nav-item.active.login_li {
    display: inline;
    float: left;
}

ul.login_ul {
    list-style: none;
    overflow: hidden;
    padding: 10px 0px;
    display: inline-block;
    margin: 0px;
}
    
.row.bg_login {
    background: red;
}
li.login_li {
    display: inline;
    float: left;
    margin: 0px 20px;
}

li.login_li:hover {
    cursor: pointer;

}
a.font_login {
    color: white;
    font-family: arial;
    font-weight: bold;
}

.form_signUp_title{color: white;
    width: 93%;
    font-family: arial;
    font-weight: bold;
    font-size: 30px;
    text-align: center;
    position: absolute;
    top: 130px;
}
.form_signUp {
    padding: 30px 4px 4px 4px;
    border: 3px solid #9c8c81;
    border-radius: 10px;
}
input.signup_input_feild {
    padding: 15px;
    width: 100%;
    margin-bottom: 10px;
    border-radius: 10px;
    border: 2px solid #b7aaa0;
}

select.signup_select_felid {
    width: 31.33%;
    padding: 5px;
    border-radius: 5px;
    border: 2px solid #b7aaa0;
    margin-left: 0px;
}


label {padding: 5px;}

.signUpBtn{width: 100%;padding: 10px;border: 2px solid #b7aaa0;border-radius: 10px;background-image: linear-gradient(white, #bbbbbb); transition:1s;}

.signUpBtn:hover{background-image: linear-gradient(#bbbbbb,white );color: #adabab; }

span.genderFont_signUp {
    font-size: 18px;
}

.signUpFont {
    font-size: 18px;
}
.signUp_border {
    margin-top: 150px;
    margin-bottom: 150px;
}

.form_signUp_title span {
    background: #d9b79f;
    padding: 5px;
}

</style>



</head>
<body>
<header>
<div class="title_of_site">

LIFE-OF-STORY
</div>


<nav class="navbar navbar-expand-md navbar-dark bg-dark naver_design">
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link home_menu " href="http://www.life-of-story.com/">Home/হোম<span class="sr-only">(current)</span></a>
          </li>
          
          <li class="nav-item active">
            <a class="nav-link home_menu novel" href="#contents_of_novel"> Novel/উপন্যাস   <span class="sr-only">(current)</span></a>
          </li>
          
          <li class="nav-item active">
            <a class="nav-link home_menu story" href="#contents_of_story">Story/গল্প  <span class="sr-only">(current)</span></a>
          </li>
		  <li class="nav-item active">
            <a class="nav-link home_menu poem" href="#contents_of_poem">Poem/কবিতা<span class="sr-only">(current)</span></a>
          </li>
		  <li class="nav-item active">
            <a class="nav-link home_menu jokes" href="#contents_of_jokes">Jokes/কৌতুক
			<span class="sr-only">(current)</span></a>
          </li>
		  <li class="nav-item active">
            <a class="nav-link home_menu puzzle" href="#contents_of_puzzle">Puzzle/ধাঁধা<span class="sr-only">(current)</span></a>
          </li>
		  <li class="nav-item active">
            <a class="nav-link home_menu rhythm" href="#contents_of_rhythm">Rhythm/ছন্দ<span class="sr-only">(current)</span></a>
          </li>
		  <li class="nav-item active">
            <a class="nav-link home_menu quote" href="#contents_of_quote">Quote/উক্তি<span class="sr-only">(current)</span></a>
          </li>
        </ul>
        
      </div>
    </nav>



</header>
<div class="container-fluid ">
    <div class="row bg_login">
        <div class="col-md-12">
            <center><ul class="login_ul">
                <li class="login_li">
                     <a class="font_login" href="http://www.life-of-story.com/sign_up.php">SIGN UP</a>
                </li>
                    <li class="login_li">
                        <a class="font_login" href="http://www.life-of-story.com/log_in.php">LOG IN</a>
                    </li>
            </ul></center>
        </div>
    </div>
</div>





<div style="text-align:center;">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- under menu ad -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8559304347963965"
     data-ad-slot="7520964852"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script></div>



<script>
    
    $(document).ready(function(){
        
        
        $("div.bg_login").hover(function(){
            
           $("div.font_login").css("color","red");
            
        })    
    })
    
    
</script>