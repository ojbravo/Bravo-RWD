

  <footer id="copyright" class="c100p">
  	<div class="c50p date">&copy; Bravo DMS 2013</div>
    <div class="c50p site-by">
    	<a href="http://www.bravodms.com" target="_blank">
          <img id="bravodms-logo" src="includes/site-by-bravodms.png" />
    	</a>
    </div>
  </footer><!-- end footer-->
</div><!-- end main-page div -->


<!-- *************************  -->
<!--     Bravo-Menu Script      -->
<!-- *************************  -->
<script type="text/javascript">
var open = 0;
function toggleMenu() {
  if (open == 0) {
    document.getElementById("mainPage").className = "open";
    open = 1;
  }
  else if (open == 1) {
    document.getElementById("mainPage").className = "closed";
    open = 0;
  }
}
</script>
<!-- *************************  -->
<!--    End Bravo-Menu          -->
<!-- *************************  -->

<!--[if lt IE 9]>
    <script type="text/javascript" src="includes/respond.min.js"></script>
<![endif]-->

<script type="text/javascript">
/*! A fix for the iOS orientationchange zoom bug.
 Script by @scottjehl, rebound by @wilto. MIT License.*/
 (function(e){function f(){n.setAttribute("content",s);o=!0}function l(){n.setAttribute("content",i);o=!1}function c(t){u=Math.abs(e.orientation);a=Math.abs(t.gamma);a>8&&u===0?o&&l():o||f()}var t=e.document;if(!t.querySelector)return;var n=t.querySelector("meta[name=viewport]"),r=n&&n.getAttribute("content"),i=r+", maximum-scale=1.0",s=r+", maximum-scale=10.0",o=!0,u=e.orientation,a=0;if(!n)return;e.addEventListener("orientationchange",f,!1);e.addEventListener("deviceorientation",c,!1)})(this);
</script>

</body>
</html>