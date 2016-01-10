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
        <? if ($compress): ?>
            <?= $this->Html->css(array("nivo-slider.min.css?$version")); ?>
            <?= $this->Html->css(array("nivo-theme.min.css?$version")); ?>
            <?= $this->Html->css(array("style.min.css?$version")); ?>

            <?= $this->Html->script(array("jquery-1.6.2.min.js?$version")); ?>
            <?= $this->Html->script(array("jquery.nivo.slider.min.js?$version")); ?>
            <?= $this->Html->script(array("jquery.maskedInput.min.js?$version")); ?>
        <? else: ?>
            <?= $this->Html->css(array("nivo-slider.css?$version")); ?>
            <?= $this->Html->css(array("nivo-theme.css?$version")); ?>
            <?= $this->Html->css(array("style.css?$version")); ?>

            <?= $this->Html->script(array("jquery-1.6.2.min.js?$version")); ?>
            <?= $this->Html->script(array("jquery.nivo.slider.min.js?$version")); ?>
            <?= $this->Html->script(array("jquery.maskedInput.min.js?$version")); ?>
        <? endif ?>
        <script type="text/javascript">
            var fix = 1;
        </script>
        <!--[if IE]>
        <script type="text/javascript">
            fix = -1;
        </script>
        <? if ($compress): ?>
            <?= $this->Html->css(array("ie.min.css?$version")); ?>
        <? else: ?>
            <?= $this->Html->css(array("ie.css?$version")); ?>
        <? endif ?>
        
        <![endif]-->
        <script type="text/javascript">
            $(function(){
                $('#slider-photos').nivoSlider();
                $('.content').height($('.content').height() + fix*$('.fixed').height());
            });
        </script>
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
    </head>
    <body>
        <div class="content iefix">
            <div class="header shadow">
                <ul class="menu table">
                    <li class="cell darksea-gradient"><?= $this->Html->link('Home', '/') ?></li>
                    <li class="cell darksea-gradient"><?= $this->Html->link('Cursos', '/cursos') ?></li>
                    <li class="cell darksea-gradient"><?= $this->Html->link('Método', '/metodo') ?></li>
                    <li class="cell darksea-gradient"><?= $this->Html->link('Matrícula', '/matricula') ?></li>
                    <li class="cell darksea-gradient"><?= $this->Html->link('Teste de Nível', '/testenivel') ?></li>
<!--                    <li class="cell darksea-gradient"><?= $this->Html->link('Conteúdo', '/conteudo') ?></li>-->
                    <li class="cell darksea-gradient"><?= $this->Html->link('Aplicativos', '/aplicativos') ?></li>
                    <li class="cell darksea-gradient"><?= $this->Html->link('Contato', '/contato') ?></li>
                </ul>
                <div class="logo">
                    <a href="<?= $this->Html->url('/') ?>"><?= $this->Html->image("logo.png?$version", array('height' => 50, 'alt' => 'Sardonix')) ?></a>
                </div>
            </div>
            <div class="main table corner-all">
                <?= $this->fetch('content'); ?>
            </div>
            <div class="footer" >
                <div class="fb-like" data-width="900" data-href="http://www.facebook.com/pages/Sardonix-Idiomas/242979139117544" data-send="false"  ></div>            
                <br/><br/>
                <g:plusone annotation="inline" href="http://www.sardonixidiomas.com/<?= $url ?>"></g:plusone>
                <script type="text/javascript">
                    window.___gcfg = {lang: 'pt-BR'};
                    (function() {
                        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                        po.src = 'https://apis.google.com/js/plusone.js';
                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                    })();
                </script>
                <br/><br/>
                <br/><br/>
                <br/><br/>
            </div>
        </div>
        <div class="fixed">
            <div class="phone">
                <?= $this->Html->link('Contato: ' . $phone, '/contato') ?>
            </div>
            <div style="float: right; padding-right: 10px; height: 40px">
                <span>Você está visualizando a versão desktop. Alterar para <a style="text-decoration: underline" href="<?= $this->Html->url('/pages/mobile') ?>">mobile</span>?</p>
            </div>
        </div>
    </body>
</html>