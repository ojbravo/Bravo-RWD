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