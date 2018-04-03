	<?php

		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'From: mydomain.com';
		$to = 'myemail'; 
		$subject = $_POST['subject'];
		
		 $body = "From: $name\n E-Mail: $email\n Message:\n $message";

          if ($_POST["submit"]) {
             if (!$_POST["email"]) {
            
              echo "<script>alert('The email field is required');</script>";
            
	      }
            
            if (!$_POST["name"]) {
            
              echo "<script>alert('The name field is required');</script>";
            
	   }
        
           if (!$_POST["message"]) {
            
            echo "The content field is required.";
            
           }
        else{
			if (mail ($to, $subject, $body, $from)) { 
				 echo "<script>alert('Email sent successfully');</script>";
			} else { 
				echo "<script>alert('The email could not be sent');</script>";
			}
		}
	   }
      
?> 

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/tachyons@4.7.0/css/tachyons.min.css"/>
<link href="https://fonts.googleapis.com/css?family=Quando" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
 
<title>Home</title>
</head>

<body>


<nav class="db dt-l w-100 border-box pa3 ph5-l">
  <a class="db dtc-l v-mid mid-gray link dim w-100 w-25-l tc tl-l mb2 mb0-l" href="#" title="Home">
    <img src="images/logo.PNG" class="dib w2 h2 br-100" alt="Site Name">
  </a>
  
  <div class="db dtc-l v-mid w-100 w-75-l tc tr-l">
    <a class="link dim dark-gray f6 f5-l dib mr3 mr4-l" href="index.php#home" title="Home">Home</a>
    <a class="link dim dark-gray f6 f5-l dib mr3 mr4-l" href="index.php#project" title="Project">Project</a>
    <a class="link dim dark-gray f6 f5-l dib mr3 mr4-l" href="index.php#about" title="About">About</a>
    <a class="link dim dark-gray f6 f5-l dib mr3 mr4-l" href="resume.pdf" target="_blank" title="Resume">Resume</a>
    <a class="link dim dark-gray f6 f5-l dib" href="index.php#contact" title="Contact">Contact</a>
  </div>

</nav>



<script>
	$(window).scroll(function() {
		var height = $(window).scrollTop();
		if (height > 100) {
			$('#back2Top').fadeIn();
		} else {
			$('#back2Top').fadeOut();
		}
	});
	$(document).ready(function() {
		$("#back2Top").click(function(event) {
			event.preventDefault();
			$("html, body").animate({ scrollTop: 0 }, "slow");
			return false;
    });

});
</script>



<div class="home center vh-30 dt w-75" id="home">
  <div class="dtc v-mid tc black ph3 ph4-l">
    <p class="paragraph">Hello! My name is Yetunde. I am a front end developer based in Houston, TX. I am currently looking for employment opportunities.<a class="link dark-blue" href="index.php#contact">Contact me</a> if interested</p>

    </div>
	
</div>
  

<div class="image">
	<img class="codimg" src="images/laptop.jpeg">
</div>

   
   <div class="container container-ns" id="project">
	<h2 class= "tc">PROJECTS</h2>
		<div class="container">	
			<figure class="wp-caption">
				<a href="https://yetundesolaadebayo.com/project/twitter_api/"><img src="http://image.thum.io/get/https://yetundesolaadebayo.com/project/twitter_api/" alt="twitter api">
				<figcaption class="wp-caption-text">A twitter clients that retrieves the most popular tweets from any username. Created with Twitter API, HTML, CSS and PHP</figcaption></a>
			</figure>
		
		
		<figure class="wp-caption">
		<a href="https://yetundesolaadebayo.com/project/weatherchecker/"><img src="http://image.thum.io/get/https://yetundesolaadebayo.com/project/weatherchecker/" alt="weather checker" >
			<figcaption class="wp-caption-text ">A website that checks the weather in any city. Created with OpenWeatherMap API, HTML, CSS and PHP</figcaption></a>
		</figure>
		
		<figure class="wp-caption">
				<a href="https://yetundesolaadebayo.com/project/guessfinger/"><img src="http://image.thum.io/get/https://yetundesolaadebayo.com/project/guessfinger/" alt="guess finger">
			<figcaption class="wp-caption-text">A JavaScript game that lets you guess how many fingers I am holding. Created with HTML, CSS and JavaScript</figcaption></a>
		</figure>
		
		<figure class="wp-caption">
			<a href="https://yetundesolaadebayo.com/project/bbccloning/"><img src="http://image.thum.io/get/https://yetundesolaadebayo.com/project/bbccloning/" alt="bbc cloning">
			<figcaption class="wp-caption-text">A clone of the BBC website. Created with HTML and CSS</figcaption></a>
		</figure>
		
		
	</div>
	<a id="back2Top" title="Back to top" href="#">&#10148;</a>
</div>
	
	<div class= "clearfix"> </div>

	
<div class="aboutme" id="about">
	<h2 class="tc">ABOUT</h2>
	<div class="center w-60">
		<h3>About me</h3>
		<p class="about_para">My name is Yetunde Sola-Adebayo and I am a senior in college studying computer science. I like front-end development because I enjoy transforming code to art and making the web more interactive and exciting. My hobbies are cooking and reading</p>
		<h3>About the website</h3>
		<p class="about_para">I built this website using HTML, CSS, PHP and tachyon, a CSS framework</p>
		<h3>About my skills</h3>
		<p class="about_para">My skills are: </p>
		<ul class="about_para">
			<li>HTML</li>
			<li>CSS</li>
			<li>JavaScript</li>
			<li>Java</li>
		</ul> 
	</div>
</div>


<div class="contact" id="contact">
	<div class="container2">
		<h2 class="tc"> CONTACT ME</h2>
		<section>  
			
		<form method="post" action="index.php">
			<label>Name</label><br>
			<input name="name" type="text" placeholder="Type your name"><br><br>
			
			<label>Subject</label><br>
			<input name="subject" type="text" placeholder="Type the subject"><br><br>
			
			<label>Email</label><br>
			<input name="email" type="email" placeholder="Type your email"><br><br>
			
			<label>Message</label><br>
			<textarea name="message" placeholder="Type your message here"></textarea><br><br>
			
			<input class="submit f5 br2 shadow-hover bg-moon-gray" id="submit" name="submit" type="submit" value="Submit">
		
		</form> 
		
		</section> 
		
	</div>
</div> 



<br><br><br>

<footer style="background-image:url(images/bb.gif);" class="tc-l bg-center cover ">
  <div class="w-100 ph3 pv5 ">
 	
    <a class="link white-60 bg-transparent hover-white inline-flex items-center ma2 tc br2 pa2" href="https://github.com/Yetunde79" title="GitHub">
      <svg class="dib h2 w2" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M8 0C3.58 0 0 3.582 0 8c0 3.535 2.292 6.533 5.47 7.59.4.075.547-.172.547-.385 0-.19-.007-.693-.01-1.36-2.226.483-2.695-1.073-2.695-1.073-.364-.924-.89-1.17-.89-1.17-.725-.496.056-.486.056-.486.803.056 1.225.824 1.225.824.714 1.223 1.873.87 2.33.665.072-.517.278-.87.507-1.07-1.777-.2-3.644-.888-3.644-3.953 0-.873.31-1.587.823-2.147-.083-.202-.358-1.015.077-2.117 0 0 .672-.215 2.2.82.638-.178 1.323-.266 2.003-.27.68.004 1.364.092 2.003.27 1.527-1.035 2.198-.82 2.198-.82.437 1.102.163 1.915.08 2.117.513.56.823 1.274.823 2.147 0 3.073-1.87 3.75-3.653 3.947.287.246.543.735.543 1.48 0 1.07-.01 1.933-.01 2.195 0 .215.144.463.55.385C13.71 14.53 16 11.534 16 8c0-4.418-3.582-8-8-8"/></svg>
      <span class="f6 ml3 pr2">GitHub</span>
    </a>
  
    <a class="link white-60 bg-transparent hover-white inline-flex items-center ma2 tc br2 pa2" href="https://www.linkedin.com/in/yetundeadebayo/" title="LinkedIn">
      <svg class="dib h2 w2" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M13.632 13.635h-2.37V9.922c0-.886-.018-2.025-1.234-2.025-1.235 0-1.424.964-1.424 1.96v3.778h-2.37V6H8.51V7.04h.03c.318-.6 1.092-1.233 2.247-1.233 2.4 0 2.845 1.58 2.845 3.637v4.188zM3.558 4.955c-.762 0-1.376-.617-1.376-1.377 0-.758.614-1.375 1.376-1.375.76 0 1.376.617 1.376 1.375 0 .76-.617 1.377-1.376 1.377zm1.188 8.68H2.37V6h2.376v7.635zM14.816 0H1.18C.528 0 0 .516 0 1.153v13.694C0 15.484.528 16 1.18 16h13.635c.652 0 1.185-.516 1.185-1.153V1.153C16 .516 15.467 0 14.815 0z" fill-rule="nonzero"/></svg>
      <span class="f6 ml3 pr2">LinkedIn</span>
    </a>
	
    <a class="link white-60 bg-transparent hover-white inline-flex items-center ma2 tc br2 pa2" href="https://twitter.com/yetunde_sola" title="Twitter">
      <svg class="dib h2 w2" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.375-1.337.648-2.085.795-.598-.638-1.45-1.036-2.396-1.036-1.812 0-3.282 1.468-3.282 3.28 0 .258.03.51.085.75C5.152 5.39 2.733 4.084 1.114 2.1.83 2.583.67 3.147.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.416-.02-.617-.058.418 1.304 1.63 2.253 3.067 2.28-1.124.88-2.54 1.404-4.077 1.404-.265 0-.526-.015-.783-.045 1.453.93 3.178 1.474 5.032 1.474 6.038 0 9.34-5 9.34-9.338 0-.143-.004-.284-.01-.425.64-.463 1.198-1.04 1.638-1.7z" fill-rule="nonzero"/></svg>
      <span class="f6 ml3 pr2">Twitter</span>
    </a>
	
    <a class="link white-60 bg-transparent hover-white inline-flex items-center ma2 tc br2 pa2" href="https://codepen.io/yetty79/" title="CodePen">
      <svg class="dib h2 w2" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M15.988 5.443c-.004-.02-.007-.04-.012-.058l-.01-.033c-.006-.017-.012-.034-.02-.05-.003-.012-.01-.023-.014-.034l-.023-.045-.02-.032-.03-.04-.024-.03c-.01-.013-.022-.026-.034-.038l-.027-.027-.04-.032-.03-.024-.012-.01L8.38.117c-.23-.155-.53-.155-.76 0L.305 4.99.296 5c-.012.007-.022.015-.032.023-.014.01-.027.02-.04.032l-.027.027-.034.037-.024.03-.03.04c-.006.012-.013.022-.02.033l-.023.045-.015.034c-.007.016-.012.033-.018.05l-.01.032c-.005.02-.01.038-.012.058l-.006.03C.002 5.5 0 5.53 0 5.56v4.875c0 .03.002.06.006.09l.007.03c.003.02.006.04.013.058l.01.033c.006.018.01.035.018.05l.015.033c.006.016.014.03.023.047l.02.03c.008.016.018.03.03.042.007.01.014.02.023.03.01.012.02.025.034.036.01.01.018.02.028.026l.04.033.03.023.01.01 7.31 4.876c.116.078.248.117.382.116.134 0 .266-.04.38-.116l7.314-4.875.01-.01c.012-.007.022-.015.032-.023.014-.01.027-.02.04-.032l.027-.027.034-.037.024-.03.03-.04.02-.032.023-.046.015-.033.018-.052.01-.033c.005-.02.01-.038.013-.058 0-.01.003-.02.004-.03.004-.03.006-.06.006-.09V5.564c0-.03-.002-.06-.006-.09l-.007-.03zM8 9.626L5.568 8 8 6.374 10.432 8 8 9.626zM7.312 5.18l-2.98 1.993-2.406-1.61 5.386-3.59v3.206zM3.095 8l-1.72 1.15v-2.3L3.095 8zm1.237.828l2.98 1.993v3.208l-5.386-3.59 2.406-1.61zm4.355 1.993l2.98-1.993 2.407 1.61-5.387 3.59v-3.206zM12.905 8l1.72-1.15v2.3L12.905 8zm-1.237-.827L8.688 5.18V1.97l5.386 3.59-2.406 1.61z" fill-rule="nonzero"/></svg>
      <span class="f6 ml3 pr2">Code Pen</span>
	  
    </a>
	<br>
	<p class="footer_para white-60 bg-transparent inline-flex tc">&copy; 2018 Yetunde Sola-Adebayo.</p>
  </div>   
</footer>


</body>
</html>
