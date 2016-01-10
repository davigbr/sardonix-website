<html> 
    <head> 
        <title><?= $title_for_layout ?></title> 
        <meta name="description" content="<?= $description ?>" >
        <meta name="keywords" content="<?= $keywords ?>">
        <meta name="author" content="Davi Gabriel da Silva">
        <meta name="reply-to" content="davi.gbr@gmail.com" />
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0-rc.1/jquery.mobile-1.1.0-rc.1.min.css" />
        <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.1.0-rc.1/jquery.mobile-1.1.0-rc.1.min.js"></script>
        <? if ($compress): ?>
            <?= $this->Html->css(array("sardonix.min.css?$version")); ?>
        <? else: ?>
            <?= $this->Html->css(array("sardonix.css?$version")); ?>
        <? endif ?>
        <?= $this->Html->css(array("mobile.css?$version")); ?>
    </head> 
    <body> 
        <div data-role="page" id="page1">
            <div data-theme="a" data-role="header" class="center-wrapper">
                <?= $this->Html->image('logo2.png') ?>
                <h3 style="margin: .6em 10% .8em;">Inglês, Italiano e Português</h3>
            </div>
            <?= $this->fetch('content'); ?>
            <div data-theme="e" data-role="footer" data-position="fixed" style="text-align: center">
                <a data-ajax="false" href="<?= $this->Html->url('/pages/desktop') ?>">Versão Completa</a>
                <a href="tel:5130668188">Contato: (51) 3066-8188</a>
            </div>
        </div>
    </body>
</html>