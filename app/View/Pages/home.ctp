<?= $this->element('header') ?>
<br/>
<?
$data = array(
    array('Experiência e Conhecimento', 'Experiência de mais de 12 anos no ensino de idiomas e conhecimento para ensinar, orientar e estimular.'),
    array('Material Especializado', 'Material didático mais vendido e utilizado no mundo para o ensino de inglês, elaborado por uma das maiores universidades do mundo – a CAMBRIDGE.'),
    array('Carga Horária', 'O número de horas aumenta gradativamente de acordo com a necessidade do aumento do volume de informações e da prática do idioma. A carga horária é importantíssima para o aprendizado.'),
    array('Recursos Audiovisuais', 'Internet, TV com vídeos, filmes, músicas, exercícios preparados para estimular o aprendizado.'),
    array('Estrutura', 'Salas de aulas amplas e climatizadas, no máximo oito (08) alunos por turma e TV de LCD para atividades interativas.'),
    array('Custo x Benefício', 'Somando todos os motivos acima relacionados, você ainda tem o custo reduzido que a nossa escola lhe oferece.'));
?>
<div id="wrapper">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="title">
                    <h2>Cursos de Idiomas e Traduções</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span8">
                <?= $this->element('slider') ?>
            </div>
            <div class="span4">
                <div class="title"><h3>Notícias</h3></div>
                <?= $this->element('news') ?>
                <br/>
                <a href="<?= $this->Html->url('/matricula') ?>" class="btn btn-large btn-success">Matrículas abertas. Faça a sua inscrição!</a>
                <br/><br/>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="span12">
                <div class="title"><h3>Cursos</h3></div>
            </div>
        </div>
        <div class="row">
            <? foreach ($cursos as $curso => $desc): ?>
                <div class="span3">
                    <h3><a href="<?= $this->Html->url('/cursos') ?>"><?= $curso ?></a></h3>
                    <p><?= $desc ?></p>
                </div>
            <? endforeach; ?>
        </div>
        <br/>
        <div class="row">
            <div class="span9">
                <p>Os cursos estão disponíveis em <strong>inglês, italiano e português</strong>.</p>
            </div>
            
        </div>
        <br/>
        <div class="row">
            <div class="span7">
                <h2>Por que estudar na Sardonix?</h2><br/>
                <ol>
                    <? foreach ($data as $row): ?>
                        <li>
                            <strong><?= $row[0] ?></strong>
                            <span><?= $row[1] ?></span>
                        </li>
                    <? endforeach ?>
                </ol>
            </div>
            <div class="span5">
                <div class="testimonial-container">
                    <br/>
                    <div class="title"><h3>Depoimentos</h3></div>
                    <div class="testimonials-carousel" data-autorotate="3000">
                        <ul class="carousel">
                            <? foreach ($testimonials as $testimonial): ?>
                                <li class="testimonial">
                                    <div class="testimonials"><?= $testimonial['Testimonial']['testimonial'] ?></div>
                                    <div class="testimonials-bg"></div>
                                    <div class="testimonials-author"><?= $testimonial['Testimonial']['author'] ?>, <span><?= $testimonial['Testimonial']['author_title'] ?></span></div>
                                </li>
                            <? endforeach ?>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<?= $this->element('footer') ?>
<?=
$this->element('copyright')?>