<?= $this->element('header') ?>
<div id="wrapper">
    <div class="container">
        <br/>
        <div class="row">
            <div class="span6">
                <div class="title"><h2>Metodologia</h2></div>
                <p><span class="dropcap color">A</span> Sardonix, no mercado desde 1997, utiliza um método dinâmico e uma didática 
                    focada na estrutura da linguagem, fazendo com que os alunos aprendam a criar,
                    e não, simplesmente, a repetir. Esses aspectos aliados às novas tecnologias são
                    empregados para tornar o aprendizado mais completo, divertido e emocionante.
                    O perfil do curso pode ser definido pelos seguintes pontos:
                </p>

                <ul class="check_list">
                    <li>Linguagem de conversação natural</li>
                    <li>Aprendizado através de vídeos atualizados</li>
                    <li>Foco na estrutura, na precisão e na fluência</li>
                    <li>Assuntos do mundo real e contemporâneo</li>
                    <li>Gramática em contextos comunicativos</li>
                </ul>
                <br/>
                <p>
                    <span class="dropcap dark">A</span> SARDONIX também trabalha com uma metodologia moderna que se chama “communicative
                    approach” ou abordagem comunicativa que simula eventos do quotidiano ou da vida real a
                    fim de reproduzir situações de comunicação e interações práticas. A abordagem comunicativa
                    é uma das metodologias mais aplicadas no mundo para o ensino de língua estrangeira,
                    especialmente, o inglês.
                </p>
                <p>
                    Além disso, a SARDONIX também desenvolveu um método próprio que faz uso de técnicas
                    da focalização e da estrutura que auxiliam o aluno a elaborar uma estratégia para a aquisição
                    do idioma. Ao combinar diferentes metodologias e métodos, a SARDONIX desenvolveu um
                    método dinâmico, envolvente e eficiente para ensinar uma nova língua.
                </p>
                <div class="picture">
                    <?= $this->Html->image('initaliano.png') ?>
                </div>

            </div>
            <div class="span6">
                <div class="title"><h2>Material</h2></div>
                <p>
                    O material utilizado é elaborado por uma das maiores universidades do mundo –
                    a CAMBRIDGE. A metodologia criada pelo famoso professor Jack C. Richards é o
                    material mais vendido no mundo para o ensino da língua inglesa.
                    O foco do curso da SARDONIX é o aprendizado, ou seja, a capacidade de ler,
                    entender, falar e escrever com clareza ao expressar-se em outra língua.
                    O objetivo do curso é fazer o aluno aprender o idioma com o foco na estrutura
                    para que o conhecimento transmitido seja de fato aplicado e praticado pelo
                    aluno.
                </p>

                <h2>Foco do Curso</h2>
                O foco do curso da SARDONIX é o aprendizado, ou seja, a capacidade de ler, 
                entender, falar e escrever com clareza ao expressar-se em outra língua.

                <h2>Objetivo do Curso</h2>
                <p>O objetivo do curso é fazer o aluno aprender inglês com o foco na 
                    estrutura para que o conhecimento transmitido seja de fato aplicado e praticado pelo aluno. </p>
                
                <br/>
                <div class="title"><h3>Nós ajustamos o curso conforme a <strong>sua</strong> necessidade</h3></div>
                <ul class="progress-bar " id="meters">
                    <li>
                        <h5>Conversação <span id="conversacao-perc" class="meter-perc">25%</span></h5>
                        <div class="meter"><span class="meter-bar" id="conversacao-meter" style="width: 50%"></span></div>
                    </li>
                    <li>
                        <h5>Gramática <span id="gramatica-perc" class="meter-perc">25%</span></h5>
                        <div class="meter"><span class="meter-bar" id="gramatica-meter" style="width: 50%"></span></div>
                    </li>
                    <li>
                        <h5>Audição <span id="audicao-perc" class="meter-perc">25%</span></h5>
                        <div class="meter"><span class="meter-bar" id="audicao-meter" style="width: 50%"></span></div>
                    </li>
                    <li>
                        <h5>Escrita <span id="escrita-perc" class="meter-perc">25%</span></h5>
                        <div class="meter"><span class="meter-bar" id="escrita-meter" style="width: 50%"></span></div>
                    </li>
                </ul>
            </div>
        </div>
        <hr>
    </div>
</div>
<?= $this->element('footer') ?>
<?= $this->element('copyright') ?>

<script type="text/javascript">
    $(function(){
        var i = 0;
        var timer = 2000;
        var f = function() {
            if (i > 3) i =0;
            var name = '';
            switch (i){
                case 0: name = 'conversacao'; break;
                case 1: name = 'gramatica'; break;
                case 2: name = 'audicao'; break;
                case 3: name = 'escrita'; break;
            }
            var value = Math.random()*10+10;
            var others = (100-value)/3;
            $('#' + name + '-perc').html(value.toFixed(1) + '%');
            $('#' + name + '-meter').animate({ width: value*2 +'%'}, 1000);
            
            $('.meter-bar[id!=' + name + '-meter]').animate({ width: others*2 + '%'}, 1000);
            $('span.meter-perc[id!=' + name + '-perc]').html(others.toFixed(1) + '%');
            i++;
            setTimeout(f, timer);
        }
        setTimeout(f, timer);
    });
</script>