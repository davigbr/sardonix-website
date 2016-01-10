<div id="footer-menu" class="hidden-tablet hidden-phone">
    <div class="container">
        <div class="row">
            <div class="span3">
                <div id="footer-menu-logo">
                    <a class="brand" href="#"><span>Sardonix Idiomas</span></a>
                </div>
            </div>
            <div class="span8">
                <div id="footer-menu-links">
                    <ul id="footer-nav">
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
            <div class="span1">
                <div id="footer-menu-back-to-top">
                    <a href="#"></a>
                </div>
            </div>

        </div>
    </div>
</div>
<div id="footer">
    <div class="container">
        <div class="row">
            <div class="span3">
                <h3>Sobre nós</h3>
                <p>
                    A Sardonix, no mercado desde 1997, utiliza uma metodologia dinâmica e uma didática focada na estrutura da linguagem, 
                    fazendo com que os alunos aprendam a criar, e não, simplesmente, a repetir. 
                    Esses aspectos aliados às novas tecnologias são empregados para tornar o aprendizado mais completo, divertido e emocionante.
                </p>
                <table style="width: 100%" >
                    <tr>
                        <td><a href="<?= $this->Html->url('/cursos') ?>"><?= $this->Html->image('brazil.png', array('width' => 64, 'height' => 64)) ?></a></td>  
                        <td><a href="<?= $this->Html->url('/cursos') ?>"><?= $this->Html->image('usa.png', array('width' => 64, 'height' => 64)) ?></a></td>  
                        <td><a href="<?= $this->Html->url('/cursos') ?>"><?= $this->Html->image('uk.png', array('width' => 64, 'height' => 64)) ?></a></td> 
                        <td><a href="<?= $this->Html->url('/cursos') ?>"><?= $this->Html->image('italy.png', array('width' => 64, 'height' => 64)) ?></a></td>
                    </tr>
                </table>

            </div>
            <div class="span3">
                <h3>Nós estamos aqui!</h3>
                <div id="small-map-container"><a href="<?= $this->Html->url('/contato') ?>"></a></div>
                <img id="small-map" width="210" height="210" marginheight="0" marginwidth="0" src="http://maps.googleapis.com/maps/api/staticmap?center=<?= $lat ?>,<?= $lng ?>&zoom=17&size=400x400&sensor=false"></iframe>
            </div>
            <div class="span3">
                <?= $this->Html->image('coruja.png'); ?>
            </div>
            <div class="span3" id="curta">
                <h3>Curta a nossa página!</h3>
                <div class="fb-like" data-width="250" data-href="http://www.facebook.com/pages/Sardonix-Idiomas/242979139117544" data-send="false"  ></div>            
                <br/><br/>
                <script type="text/javascript">
                    window.___gcfg = {lang: 'pt-BR'};
                    (function() {
                        var po = document.createElement('script');
                        po.type = 'text/javascript';
                        po.async = true;
                        po.src = 'https://apis.google.com/js/plusone.js';
                        var s = document.getElementsByTagName('script')[0];
                        s.parentNode.insertBefore(po, s);
                    })();
                </script>
                <br/><br/>
                <ul class="social-grid">
                    <li>
                        <div class="social-item">				
                            <div class="social-info-wrap">
                                <div class="social-info">
                                    <div class="social-info-front social-facebook">
                                        <a href="http://www.facebook.com/pages/Sardonix-Idiomas/242979139117544"></a>
                                    </div>
                                    <div class="social-info-back social-facebook-hover">
                                        <a href="http://www.facebook.com/pages/Sardonix-Idiomas/242979139117544"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>