

  <footer id="copyright" class="c100ip">
  	<div class="c50ip date">&copy; Bravo DMS 2013</div>
    <div class="c50ip logo">
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
    if (viewPortWidth < 600) {openMenu();}
  });
  $$("#mainPage").swipeLeft(function(){
    viewPortWidth = window.innerWidth || document.documentElement.clientWidth;
    if (viewPortWidth < 600) {closeMenu();}
  });
});


function openMenu() {
	vpos = (document.all ? document.scrollTop : window.pageYOffset);
  document.getElementById("sideNav").className = "side-nav-open";
	document.getElementById("mainPage").className = "main-page-closed";
	document.getElementById('open-menu').style.display = 'none';
	document.getElementById('close-menu').style.display = 'block';
  scroll(0,0);
}
function closeMenu() {
	document.getElementById("mainPage").className = "main-page-open";
	document.getElementById("sideNav").className = "side-nav-closed";
	document.getElementById('open-menu').style.display = 'block';
	document.getElementById('close-menu').style.display = 'none';
  document.body.scrollTop = vpos;
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