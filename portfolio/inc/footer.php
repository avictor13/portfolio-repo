<?php
/**
 * footer.php
 *
 * Author: pixelcave
 *
 * The footer of the page
 * Jquery library as well as all other scripts are included here
 *
 */
?>
    <!-- Footer -->
    <footer class="themed-background-city">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">             
                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
                    <div class="addthis_sharing_toolbox"></div>
                  </div>
                  <div class="col-md-6">
                      <h4>Translate Below</h4>
                      <div id="google_translate_element"></div> 
                  </div> 
                </div>
            </div>
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->
<!-- Scroll to top link, check main.js - scrollToTop() -->
<a href="#" id="to-top"><i class="fa fa-chevron-up"></i></a>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>!window.jQuery && document.write(unescape('%3Cscript src="js/vendor/jquery-1.11.0.min.js"%3E%3C/script%3E'));</script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js"></script>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true, gaTrack: true, gaId: 'UA-37612064-1'}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-37612064-1', 'auto');
  ga('set', 'forceSSL', true);// Send all data using SSL, even from insecure (HTTP) pages.
  ga('require', 'linkid');   // Load the plug-in. Note: this call will block until the plug-in is loaded.
  ga('send', 'pageview');
  ga(‘set’, ‘&uid’, {{USER_ID}}); // Set the user ID using signed-in user_id.
</script>