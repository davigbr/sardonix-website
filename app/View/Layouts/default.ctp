<html>
    <head>
        <title><?= $title_for_layout ?></title>
        <meta name="description" content="<?= $description ?>" >
        <meta name="keywords" content="<?= $keywords ?>">
        <meta name="author" content="Davi Gabriel da Silva">
        <meta name="reply-to" content="davi.gbr@gmail.com" />
        <meta http-equiv="content-language" content="pt-br">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="canonical" href="http://www.sardonixidiomas.com/" />
        <?= $this->Html->meta('favicon.ico', 'img/favicon.ico', array('type' => 'icon')) ?>
        <!-- start: Mobile Specific -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- end: Mobile Specific -->
        <!-- start: CSS -->
        <?= $this->Html->css("bootstrap.css?$version"); ?>
        <?= $this->Html->css("bootstrap-responsive.css?$version"); ?>
        <?= $this->Html->css("style.css?$version"); ?>
        <?= $this->Html->script("jquery-1.8.3.min.js?$version") ?>
        <?= $this->Html->script("bootstrap.js?$version") ?>
        <?= $this->Html->script("isotope.js?$version") ?>
        <?= $this->Html->script("flexslider.js?$version") ?>
        <?= $this->Html->script("carousel.js?$version") ?>
        <?= $this->Html->script("jquery.cslider.js?$version") ?>
        <?= $this->Html->script("slider.js?$version") ?>
        <?= $this->Html->script("fancybox.js?$version") ?>
        <?= $this->Html->script("jquery-ui-1.9.2.custom.min.js?$version"); ?>
        <?= $this->Html->script("jquery.maskedInput.min.js?$version") ?>
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
        <!-- end: CSS -->
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!-- Google Analytics -->
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-29189205-1']);
            _gaq.push(['_trackPageview']);
            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
        <style type="text/css">
            .icons-box-vert {
                padding: 0;
            }
            .myform input {
                padding: 15px;
            }
            p, ul li {
                font-size: 1.1em;
            }
            .navbar .nav > li > a {
                padding: 20px 15px 15px;
            }
            .loginform input {
                width: 100%
            }
        </style>
    </head>
    <body>
        <div id="fb-root"></div>
        <script type="text/javascript">
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <?= $content_for_layout ?>
        <?= $this->Html->css("parallax-slider.css?$version"); ?>
    </body>
</html>