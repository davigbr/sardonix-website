<header>
    <div class="container">
        <div class="row">
            <div class="logo span3">
                <a class="brand" href="<?= $this->Html->url('/') ?>">
                    <?=$this->Html->image('logo2.png', array('style'=>'height: 40px; margin-top: 5px; margin-left: 0'))?>
                </a>
            </div>
            <div class="span9">
                <div class="navbar navbar-inverse">
                    <div class="navbar-inner">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <div class="nav-collapse collapse">
                            <ul class="nav">
                                <li><a href="<?= $this->Html->url('/') ?>">Home</a></li>
                                <li><a href="<?= $this->Html->url('/servicos') ?>">Serviços</a></li>									
                                <li><a href="<?= $this->Html->url('/metodo') ?>">Método</a></li>
                                <li><a href="<?= $this->Html->url('/matricula') ?>">Matrícula</a></li>
                                <li><a href="<?= $this->Html->url('/testenivel') ?>">Teste de Nível</a></li>
                                <li><a href="<?= $this->Html->url('/trabalhe') ?>">Trabalhe Conosco</a></li>
                                <li><a href="<?= $this->Html->url('/contato') ?>">Contato</a></li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>	
        </div>
    </div>
</header>
<?
$controller = trim($this->request->params['controller']);
?>
<script type="text/javascript">
    var found = false;
    $('ul.nav > li > a').each(function(){
        var href = $(this).attr('href');
        if (href.lastIndexOf('<?= $controller ?>') != -1) {
            $(this).parent().addClass('active');
            found = true;
        }
    });
    if (!found) {
        $('ul.nav > li:first').addClass('active');
    }
</script>