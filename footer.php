			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap clearfix">

					<nav role="navigation">
							<?php bones_footer_links(); ?>
					</nav>

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#menu-main-navigation').slicknav({
					'label' : '', // Label for menu button. Use an empty string for no label.
					'duplicate': true, // If true, the mobile menu is a copy of the original.
					'duration': true, // The duration of the sliding animation.
					'easingOpen': 'swing', // Easing used for open animations.
					'easingClose': 'swing', // Easing used for close animations.
					'prependTo': '#slickness', // Element, jQuery object, or jQuery selector string to prepend the mobile menu to.
					'parentTag': 'a', // Element type for parent menu items.
					'closeOnClick': false // Close menu when a link is clicked.
				});
			});
		</script>
		<?php wp_footer(); ?>
		<script type="text/javascript">
		$(document).ready(function() {
		  var showChar = 438;
		  var ellipsestext = " ";
		  var moretext = "<br /><br />+ More";
		  var lesstext = "<br /><br />- Less";
		  $('.more').each(function() {
		    var content = $(this).html();

		    if(content.length > showChar) {

		      var c = content.substr(0, showChar);
		      var h = content.substr(showChar-1, content.length - showChar);

		      var html = c + '<span class="moreelipses">'+ellipsestext+'</span> <span class="morecontent"><span>' + h + '</span>  <a href="/" class="morelink">'+moretext+'</a></span>';

		      $(this).html(html);
		    }

		  });

		  $(".morelink").click(function(){
		    if($(this).hasClass("less")) {
		      $(this).removeClass("less");
		      $(this).html(moretext);
		    } else {
		      $(this).addClass("less");
		      $(this).html(lesstext);
		    }
		    $(this).parent().prev().toggle();
		    $(this).prev().toggle();
		    return false;
		  });
		});
		</script>

		<script>
			$(window).resize(function(){
		   console.log('resize called');
		   var width = $(window).width();
		   if(width >= 481){
		       $('#collapse').removeClass('comment more').addClass('removed');
		   }
		   else{
		       $('#collapse').removeClass('removed').addClass('comment more');
		   }
		})
		.resize();
		</script>

	</body>

</html>
