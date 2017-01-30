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



  <script language="javascript" type="text/javascript">
    var intTimeout    = 500;
    var hdlCloseTimer = null;
    var objSubMenu    = null;

    function PowetMenu_OpenMenu(){
      PowetMenu_CancelTimer();
      PowetMenu_CloseMenu();
      
      objSubMenu = $(this).find('ul').css('visibility', 'visible');
    }
    function PowetMenu_CloseMenu(){
      if(objSubMenu){
        objSubMenu.css('visibility', 'hidden');
      }
    }

    function PowetMenu_SetTimer(){
      hdlCloseTimer = window.setTimeout(PowetMenu_CloseMenu, intTimeout);
    }
    function PowetMenu_CancelTimer(){
      if(hdlCloseTimer){
        window.clearTimeout(hdlCloseTimer);
        hdlCloseTimer = null;
      }
    }

    $(document).ready(
      function(){
        // Open menu from link
        $('#PowetMenu > li').bind('mouseover', PowetMenu_OpenMenu)
        // Turn on timer when leaving link
        $('#PowetMenu > li').bind('mouseout',  PowetMenu_SetTimer)
        
        // Open menu from link
        $('#NewsMenu > li').bind('mouseover', PowetMenu_OpenMenu)
        // Turn on timer when leaving link
        $('#NewsMenu > li').bind('mouseout',  PowetMenu_SetTimer)
      }
    );

    document.onclick = PowetMenu_CloseMenu;
  </script>

  <script type="text/javascript">
  function recordOutboundLink(link, category, action) {
    try {
      var myTracker=_gat._getTrackerByName();
      _gaq.push(['myTracker._trackEvent', category ,  action ]);
      setTimeout('document.location = "' + link.href + '"', 200)
    }catch(err){}
  }
  </script>
