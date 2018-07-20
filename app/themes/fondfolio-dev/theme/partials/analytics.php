<script async src="https://www.googletagmanager.com/gtag/js?id=UA-75355112-1"></script>

<script>

document.addEventListener('DOMContentLoaded', function() {
  function reportConversion(){
  console.log('conversion!');
  return gtag_report_conversion('https://my.fondfolio.com/auth/signup');
}

  var el = document.getElementsByClassName("adwordsTracking");
  for (var i = 0; i < el.length; i++) {
    el[i].addEventListener("click", reportConversion);
  }
}, false);

</script>


<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-75355112-1');
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


// function addTracking() {
//   var conversionLinks = document.querySelectorAll(".adwordsTracking");
//   conversionLinks.click(function() {
//   return gtag_report_conversion('https://my.fondfolio.com/auth/signup');
//   console.log('conversion!');
// });
// }

</script>
