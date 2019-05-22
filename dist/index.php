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
</body>

</html>
