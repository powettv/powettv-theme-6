<?php
/**
 * Contents of the <head> element for a page.
 *
 * @package powettv
 */

?>
	<title>POWET.TV: Games, Comics, TV, Movies, and Toys - It&#039;s all geek to us.</title>
<?php
	get_template_part( 'partials/page', 'meta' );
	wp_head();
?>

  <script type="text/javascript">
  function recordOutboundLink(link, category, action) {
    try {
      var myTracker=_gat._getTrackerByName();
      _gaq.push(['myTracker._trackEvent', category ,  action ]);
      setTimeout('document.location = "' + link.href + '"', 200)
    }catch(err){}
  }
  </script>
