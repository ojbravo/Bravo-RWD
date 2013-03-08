<?php 
	$title = "RWD Framework by Bravo DMS";
	$description = "Bravo DMS Creates Dynamic Media Solutions using the latest technologies in Responsive Web Design, Social Marketing, and Digital Communication.";
	include "header.php"; ?>
<br><br>
<section class="c90p float-center">
	<article class="c66p">
		<h1>BravoDMS Responsive Framework v5.5</h1>
		<h4>A Gift to My Students</h4>
		<br>
		It is my firm belief that true greatness is never achieved alone.  Whether you're starting a business, raising a family, or simply making a website, there are always many people who have contributed to your success.  In the Web Design industry, we regularly "borrow" from the discovery and innovation of others.  And though this might not be acceptable in other industries, this is often times the way we we learn.

		<blockquote>
			“If I have seen further it is by standing on the shoulders of Giants.” 
			<br>
			<div class="text-right">― Isaac Newton, 1675</div>
		</blockquote>

		As such, I believe it is absolutely imparative to recipricate this "borrowing" of knowledge and technique when we ourselves discover something that others may find useful.  Thus, the reason I am passing this framework on to you.  It is definitely not perfect, but it is the best that I have come up with so far.  
		<br><br>
		<h3>My hope is that this framework will make your life better.</h3><br>
		Not just because it is easy to use, but because it will Empower you to spend more time innovating and building on top of this framework...<br><br>  As is, this framework is simple and bare. <br>My desire is that you use it to make something Inspiring, Empowering, &amp; Engaging.  
		<br><br>
		<h4>
			Godspeed,<br>
			Omar Jesus Bravo<br>
			3/4/2013
		</h4>
		<br><br><hr><br>

		<h2>What's Included:</h2>
		<br>
		This framework is a mashup of resources that I have put together in order to get my development workflow started as quickly as possible.
		<br><br>
		Please note that all of the CSS is compiled using Sass / Compass.  If you are not currently using CSS Preprocessing, start doing so now.  I recommend using <a href="http://incident57.com/codekit/" target="_blank">CodeKit</a> (on a Mac), or the <a href="http://compass.handlino.com/" target="_blank">Compass app</a> (on a PC)
		<br><br>
		Here is a breakdown of the files and what they do:<br><br>

		<h3>HTML (php) - </h3>
		<ul class="indented-text">
		  	<li>index.php - The main page that calls in all other files via the php include command.<br><br></li>
		  	<li>header.php - Includes the<br> <code>&lt;head&gt;&lt;/head&gt;<br>&lt;body&gt;<br>&lt;header&gt;&lt;/header&gt;,<br>&lt;nav&gt;&lt;nav&gt;</code>.<br><br></li>
		  	<li>footer.php - Includes the javascript for the BravoMenu, and Scott Jehl's iOS Orientation Fix.<br><br></li>
		  	<li>navigation.php - Simple unordered list of links for the BravoMenu.<br><br></li>
		  	<li>config.rb - The Sass / Compass Configuration File.<br><br></li>
		  </ul>  

		<h3>CSS (sass / compass) - </h3>
		<ul class="indented-text">
			<li>style.scss - Main stylesheet that imports all other _sass.scss files (listed below) and compiles them into the minified style.css.<br><br></li>
			<li><a href="http://meyerweb.com/eric/tools/css/reset/" target="_blank">_reset.scss</a> - CSS Reset from Eric Meyer<br><br></li>
			<li>_bravo-grid-v16.scss - Responsive Grid I rolled myself.<br><br></li>
			<li>_bravo-menu-v5.scss - Responsive Menu I rolled myself.<br><br></li>
			<li>_toobox.scss - Some useful utility classes that I use repeatedly.<br><br></li>
			<li>_typography.scss - Basic type settings.<br><br></li>
			<li><a href="http://fortawesome.github.com/Font-Awesome/" target="_blank">_font-awesome.scss</a> - Settings for Font-Awesome icon font.<br><br></li>
		</ul>

		<h3>Javascript - </h3>
		<ul class="indented-text">
			<li><a href="https://github.com/aFarkas/html5shiv" target="_blank">html5shiv.js</a> - Makes older browsers recognize new HTML5 Elements.<br><br></li>
			<li><a href="https://github.com/scottjehl/Respond" target="_blank">respond.min.js</a> - Makes older browsers recognize CSS Media Queries.<br><br></li>
			<li><a href="http://quojs.tapquo.com/" target="_blank">quo.js</a> - Enables touch gestures (swipe left / right).</li>
		</ul>
	</article>
	<aside class="c33p">
		<br><br>
		<h2>Change the World</h2>
		<br>
		<h3>The Crazy Ones</h3>
		<h4>- Apple, 1997</h4>
		<br>
		“Here's to the crazy ones. The misfits. The rebels. The troublemakers. The round pegs in the square holes. The ones who see things differently. They're not fond of rules. And they have no respect for the status quo. You can quote them, disagree with them, glorify or vilify them. About the only thing you can't do is ignore them. Because they change things. They push the human race forward. And while some may see them as the crazy ones, we see genius. Because the people who are crazy enough to think they can change the world, are the ones who do.”
		
		<br><br><br><hr><br>
		
		<h3>Social Change</h3>
		<h4>- Cesar Chavez</h4>
		<br>
		"Once social change begins, it cannot be reversed.You cannot uneducate the person who has learned to read. You cannot humiliate the person who feels pride. You cannot oppress the people who are not afraid anymore. We have seen the future, and the future is ours."
		
		<br><br><br><hr><br>
		<h3>Civil Rights</h3>
		<h4>- Martin Luther King Jr.</h4>
		<br>
		"Darkness cannot drive out darkness: only light can do that. Hate cannot drive out hate: only love can do that."
		<br><br>
		"Make a career of humanity, commit yourself to the noble struggle for equal rights. You will make a greater person of yourself, a greater nation of your country, and a finer world to live in."
		<br><br><br><hr><br>
		<h3>Overalls</h3>
		<h4>- Thomas Edison</h4>
		<br>
		"Opportunity is missed by most people because it is dressed in overalls and looks like work."
		<br><br>

		
	</aside>
</section> 
<br><br>
<?php include "footer.php"; ?> 