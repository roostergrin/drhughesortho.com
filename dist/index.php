<!DOCTYPE html>
<html <?php language_attributes(); ?> lang="en" role='main'>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  <!-- GOOGLE ANALYTICS -->
  <script>
    (function (i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o), m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js ', 'ga ');
    ga('create ', 'UA-128558082-1', 'auto');
    ga('send', 'pageview');
  </script>
  <!-- GOOGLE ANALYTICS -->

<!-- Global site tag (gtag.js) - Google Ads: 381056928 -->
<scriptasync src="https://www.googletagmanager.com/gtag/js?id=AW-381056928"></script>
<script>
window.dataLayer = window.dataLayer || [];
functiongtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'AW-381056928');
</script>

<script>
gtag('config', 'AW-381056928/eK31CPbUiIoCEKDv2bUB', {
    'phone_conversion_number': '703.451.0502'
  });
</script>


<?php $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  if($actual_link=='https://www.drhughesortho.com/thank-you/'){ ?>
<!-- Event snippet for Website Contact Form conversion page -->
<script>
gtag('event', 'conversion', {'send_to': 'AW-381056928/OI-iCNLjiIoCEKDv2bUB'});
</script>

<?php  } ?> 
<?php $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  if($actual_link=='https://www.drhughesortho.com/thank-you'){ ?>
<!-- Event snippet for Website Contact Form conversion page -->
<script>
gtag('event', 'conversion', {'send_to': 'AW-381056928/OI-iCNLjiIoCEKDv2bUB'});
</script>
<?php  } ?>

</head>

<body>
  <div id='app' role='application'></div>
  <?php wp_footer(); ?>
  <script type="text/javascript">
    var $buoop = {
      notify: {
        e: -6,
        f: -4,
        o: -4,
        s: -2,
        c: -4
      },
      insecure: true,
      api: 5
    };

    function $buo_f() {
      var e = document.createElement("script");
      e.src = "//browser-update.org/update.min.js";
      document.body.appendChild(e);
    };

    try {
      document.addEventListener("DOMContentLoaded", $buo_f, false)
    } catch (e) {
      window.attachEvent("onload", $buo_f)
    }

  </script>
  
  <script type="text/javascript"> 
  (function(d){
    var s = d.createElement("script");
    s.setAttribute("data-account", "D3656BNpyD");
    s.setAttribute("src", "https://cdn.userway.org/widget.js");
    (d.body || d.head).appendChild(s);})(document);
 
  (function(d){
    var ns = d.createElement("noscript");
    ns.innerHTML = `Please ensure Javascript is enabled for purposes of <a href="https://userway.org">website accessibility</a>`;
    (d.body || d.head).appendChild(ns);})(document);    
</script>

<div id="accessibilityWidget" tabindex="0">Click for Accessibility</div>
  
</body>

</html>
