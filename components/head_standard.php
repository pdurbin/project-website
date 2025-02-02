<?php
$available_languages = array("en", "de");
$default_language = "en";

function prefered_language($available_languages, $http_accept_language) {
    global $default_language;
    $available_languages = array_flip($available_languages);
    $langs = array();
    preg_match_all('~([\w-]+)(?:[^,\d]+([\d.]+))?~', strtolower($http_accept_language), $matches, PREG_SET_ORDER);
    foreach ($matches as $match) {
        list($a, $b) = explode('-', $match[1]) + array('', '');
        $value = isset($match[2]) ? (float) $match[2] : 1.0;
        if (isset($available_languages[$match[1]])) {
            $langs[$match[1]] = $value;
            continue;
        }
        if (isset($available_languages[$a])) {
            $langs[$a] = $value - 0.1;
        }
    }
    if ($langs) {
        arsort($langs);
        return key($langs);
    } else {
        return $default_language;
    }
}

$BROWSER_LANG = $default_language;
if(isset($_SERVER["HTTP_ACCEPT_LANGUAGE"])) {
    $BROWSER_LANG = prefered_language($available_languages, strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"]));
}

$default_labels = array(
    "title" => "Open Knowledge Maps - A visual interface to the world&#39;s scientific knowledge"
    , "app-name" => "Open Knowledge Maps"
    , "description" => "Our Goal is to revolutionize discovery of scientific knowledge. We are building a visual interface that dramatically increases the visibility of research findings for science and society alike. We are a non-profit organization and we believe that a better way to explore and discover scientific knowledge will benefit us all."
    , "tweet-text" => "Check out Open Knowledge Maps"
    , "url" => (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"
    , "twitter-type" => "summary"
    , "twitter-image" => "https://openknowledgemaps.org/img/card.png"
    , "fb-image" => "https://openknowledgemaps.org/img/cardfb.png"
);

function getLabel($tag) {
    global $default_labels, $override_labels, $title;

    if (isset($override_labels) && isset($override_labels[$tag])) {
        return $override_labels[$tag];
    } else if (isset($title)) {
        return $title;
    } else {
        if (isset($default_labels[$tag]))
            return $default_labels[$tag];
        else
            return "Not set";
    }
}
?>

<title>
    <?php echo getLabel("title") ?>
</title>

<meta http-equiv="content-type" content="text/html; charset=utf-8" >
<meta http-equiv="content-style-type" content="text/css" >
<meta http-equiv="content-language" content="en" >
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="robots" content="follow" >
<meta name="revisit-after" content="1 month" >
<meta name="distribution" content="global">
<meta name="author" content="Open Knowledge Maps" >
<meta name="publisher" content="Open Knowledge Maps" >
<meta name="keywords" content="knowldege visualization, open knowledge, open science" >

<!-- FAVICONS -->
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?v=xQz6nej7eR">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png?v=xQz6nej7eR">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png?v=xQz6nej7eR">
<link rel="manifest" href="/site.webmanifest?v=xQz6nej7eR">
<link rel="mask-icon" href="/safari-pinned-tab.svg?v=xQz6nej7eR" color="#263d54">
<link rel="shortcut icon" href="/favicon.ico?v=xQz6nej7eR">
<meta name="apple-mobile-web-app-title" content="OKMaps">
<meta name="application-name" content="OKMaps">
<meta name="msapplication-TileColor" content="#263d54">
<meta name="theme-color" content="#ffffff">

<meta name="description" content="<?php echo getLabel("description") ?>" >

<!-- TWITTER CARD -->

<meta name="twitter:card" content="<?php echo getLabel("twitter-type") ?>" />
<meta name="twitter:site" content="@OK_Maps" />
<meta name="twitter:title" content="<?php echo getLabel("title") ?>" />
<meta name="twitter:description" content="<?php echo getLabel("description") ?>" />
<meta name="twitter:image" content="<?php echo getLabel("twitter-image") ?>" />

<!-- OPEN GRAPH OG -->
<meta property="og:title" content="<?php echo getLabel("title") ?>"/>
<meta property="og:description" content="<?php echo getLabel("description") ?>"/>
<meta property="og:url" content="<?php echo getLabel("url") ?>"/>
<meta property="og:image" content="<?php echo getLabel("fb-image") ?>"/>
<meta property="og:type" content="website"/>
<meta property="og:site_name" content="<?php echo getLabel("app-name") ?>"/>

<link rel="stylesheet" type="text/css" href="./lib/cookieconsent.min.css" />
<script src="./lib/cookieconsent.min.js"></script>
<script>

<?php if ($BROWSER_LANG === "de") { ?>
        let cookie_message = '<strong>Wir haben unsere <a href="./datenschutz" target="_blank" class="underline">Datenschutzerklärung</a> aktualisiert</strong>, um die Spendenabwicklung zu berücksichtigen. Wir verwenden Cookies, um unsere Webseite für Sie möglichst benutzerfreundlich zu gestalten. Wenn Sie fortfahren, nehmen wir an, dass Sie mit der Verwendung von Cookies auf dieser Webseite einverstanden sind. Weitere Informationen entnehmen Sie bitte ';
        let cookie_link = "unserer Datenschutzerklärung.";
        let cookie_button = "Alles klar!";
        let cookie_href = "https://openknowledgemaps.org/datenschutz";
<?php } else { ?>
        let cookie_message = '<strong>We have updated our <a href="./privacy" target="_blank" class="underline">privacy policy</a></strong> to include the processing of donations. We use cookies to improve your experience. By your continued use of this site you accept such use. For more information, please see ';
        let cookie_link = "our privacy policy.";
        let cookie_button = "Got it!";
        let cookie_href = "https://openknowledgemaps.org/privacy";
<?php }; ?>
    function clearCookies (names) {
      var i = 0, namesLength = names.length;
      for (i; i < namesLength; i += 1) {
        document.cookie = names[i] + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/';
      }
    }
    clearCookies(["cookieconsent_status", "priv-update-2018-10"]);
    var cookie_domain = "<?php echo $COOKIE_DOMAIN ?>";
    window.addEventListener("load", function () {
        window.cookieconsent.initialise({
            "palette": {
                "popup": {
                    "background": "#eff3f4",
                    "text": "#2D3E52"
                },
                "button": {
                    "background": "#2D3E52",
                    "text": "#ffffff"
                }
            },
            "position": "bottom",
            "theme": "classic",
            "content": {
                "message": cookie_message,
                "dismiss": cookie_button,
                "link": cookie_link,
                "href": cookie_href
            },
            "cookie": {
              "name": "priv-update-2018-12",
              "domain": cookie_domain
            }
        })
    });
    
    function getCookie(name) {
        var v = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
        return v ? v[2] : null;
    }
    
    function setCookie(name, value, days) {
        var d = new Date;
        d.setTime(d.getTime() + 24*60*60*1000*days);
        document.cookie = name + "=" + value + ";path=/;expires=" + d.toGMTString();
    }
    
    function recordAction(category, action, id) {
        //matomo
        if(typeof _paq !== "undefined") {
            _paq.push(['trackEvent', category, action, id]);
        }
        //gtag.js
        if(typeof gtag === "function") {
            gtag('event', action, {
              'event_category': category,
              'event_label': id
            });
        //analytics.js
        } else if (typeof ga === "function") {
          ga('send', 'event', category, action, id);
        }  
    }
</script>

<link rel="stylesheet" href="./lib/font-awesome.min.css" >
<link rel="stylesheet" href="./css/main.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>


<script>
    // Set to the same value as the web property used on the site
    var gaProperty = '<?php echo $GA_CODE; ?>';
    // Disable tracking if the opt-out cookie exists.
    var disableStr = 'ga-disable-' + gaProperty;
    if (document.cookie.indexOf(disableStr + '=true') > -1) {
        window[disableStr] = true;
    }
    // Opt-out function
    function gaOptout() {
        document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
        window[disableStr] = true;
        alert('Google Analytics opt-out successful');
    }
</script>

<?php if ($GA_ENABLED): ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $GA_CODE; ?>"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', '<?php echo $GA_CODE; ?>');
    </script>
<?php endif; ?>
    
<?php if ($PIWIK_ENABLED) { ?>

    <!-- Matomo -->
    <script type="text/javascript">
        var _paq = _paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function () {
            var u = "<?php echo $SITE_URL . $PIWIK_PATH ?>";
            _paq.push(['setTrackerUrl', u + 'piwik.php']);
            _paq.push(['setSiteId', '1']);
            var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
            g.type = 'text/javascript';
            g.async = true;
            g.defer = true;
            g.src = u + 'piwik.js';
            s.parentNode.insertBefore(g, s);
        })();
    </script>
    <noscript><p><img src="//openknowledgemaps.org/piwik_stats/piwik.php?idsite=1&rec=1" style="border:0;" alt="" /></p></noscript>
    <!-- End Matomo Code -->

<?php }; ?>
