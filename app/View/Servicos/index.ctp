<?= $this->element('header') ?>
<div id="wrapper">
    <div class="container">
        <br/>
        <div class="title">
            <h3>Cursos de Idiomas</h3>
        </div>
        <div class="row">
            <? foreach ($cursos as $curso => $desc): ?>
                <div class="span3">
                    <h3><a href="<?= $this->Html->url('/cursos') ?>"><?= $curso ?></a></h3>
                    <p><?= $desc ?></p>
                </div>
            <? endforeach; ?>
        </div>
        <div class="row">
            <div class="span8">
                <br/>
                <p>Os cursos estão disponíveis em <strong>inglês, italiano e português</strong>.</p>
            </div>
            <br/>
            <div class="span1">
                <div class="picture">
                    <a href="<?= $this->Html->url('/cursos') ?>"><?= $this->Html->image('brazil.png') ?></a>
                </div>
            </div>
            <div class="span1">
                <div class="picture">
                    <a href="<?= $this->Html->url('/cursos') ?>"><?= $this->Html->image('usa.png') ?></a>
                </div>
            </div>
            <div class="span1">
                <div class="picture">
                    <a href="<?= $this->Html->url('/cursos') ?>"><?= $this->Html->image('uk.png') ?></a>
                </div>
            </div>
            <div class="span1">
                <div class="picture">
                    <a href="<?= $this->Html->url('/cursos') ?>"><?= $this->Html->image('italy.png') ?></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span12">
                <div class="title">
                    <h3>Traduções</h3>
                </div>
                <p>A Sardonix também oferece seus serviços de tradução, versão, sendo esses presenciais ou
                    escritos, em sua empresa, eventos, feiras, seminários etc. Entre em contato conosco para
                    maiores informações.</p>
            </div>
        </div>

        <br/>
        <div class="row">
            <div class="span3">
                <?= $this->Html->image('interchange0.jpg') ?>
            </div>
            <div class="span3">
                <?= $this->Html->image('interchange1.jpg') ?>
            </div>
            <div class="span3">
                <?= $this->Html->image('interchange2.jpg') ?>
            </div>
            <div class="span3">
                <?= $this->Html->image('interchange3.jpg') ?>
            </div>
        </div>
        <br/>
    </div>
</div>

<?= $this->element('footer') ?>
<?= $this->element('copyright') ?>
