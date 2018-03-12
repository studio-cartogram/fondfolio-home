<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-75355112-1', 'auto');
ga('send', 'pageview');
gtag('config', 'AW-849670669');

// Event snippet for Account Sign Up (Button Click) conversion page
// In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button.
function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-849670669/lx7ACOCkxX4QjeSTlQM',
      'event_callback': callback
  });
  return false;
}

</script>
