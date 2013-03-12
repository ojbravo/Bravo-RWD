
  <footer id="copyright" class="c100p">
  	<div class="c50p date">&copy; Bravo DMS <?php $then = 2013; $now = date('Y'); if ($then == $now) echo $now; else echo "$then - $now"; ?></div> 
    <div class="c50p logo">
    	<a href="http://www.bravodms.com" target="_blank">
          <img id="bravodms-logo" src="includes/site-by-bravodms.png" />
    	</a>
    </div>
  </footer><!-- end footer-->
</div><!-- end main-page div -->


<!-- *************************  -->
<!--     Bravo-Menu Script      -->
<!-- *************************  -->
<script src="includes/quo.js"></script>
<script type="text/javascript">
var vpos;
// Enables Swipe Menu
$$(document).ready(function() {
  $$("#mainPage").swipeRight(function(){
    viewPortWidth = window.innerWidth || document.documentElement.clientWidth;
    if (viewPortWidth < 768) {toggleMenu();}
  });
  $$("#mainPage").swipeLeft(function(){
    viewPortWidth = window.innerWidth || document.documentElement.clientWidth;
    if (viewPortWidth < 768) {toggleMenu();}
  });
});

var open = 0;
function toggleMenu() {

  if (open == 0) {
  	vpos = (document.all ? document.scrollTop : window.pageYOffset);
    document.getElementById("sideNav").className = "side-nav-open";
  	document.getElementById("mainPage").className = "main-page-closed";
    scroll(0,0);
    open = 1;
  }

  else if (open == 1) {
  	document.getElementById("mainPage").className = "main-page-open";
  	document.getElementById("sideNav").className = "side-nav-closed";
    document.body.scrollTop = vpos;
    open = 0;
  }
}

</script>
<!-- *************************  -->
<!--    End Bravo-Menu          -->
<!-- *************************  -->



<script type="text/javascript">
/*! A fix for the iOS orientationchange zoom bug.
 Script by @scottjehl, rebound by @wilto. MIT License.*/
 (function(e){function f(){n.setAttribute("content",s);o=!0}function l(){n.setAttribute("content",i);o=!1}function c(t){u=Math.abs(e.orientation);a=Math.abs(t.gamma);a>8&&u===0?o&&l():o||f()}var t=e.document;if(!t.querySelector)return;var n=t.querySelector("meta[name=viewport]"),r=n&&n.getAttribute("content"),i=r+", maximum-scale=1.0",s=r+", maximum-scale=10.0",o=!0,u=e.orientation,a=0;if(!n)return;e.addEventListener("orientationchange",f,!1);e.addEventListener("deviceorientation",c,!1)})(this);
</script>

</body>
</html>
