<?= $this->element('header') ?>
<div id="wrapper">
    <div class="container">
        <br/>
        <div class="title"><h2>Matrícula</h2></div>
        <br/>
        <big>Preencha o formulário abaixo e entraremos em contato em até <strong>24</strong> horas!</big>
        <br/>
        <br/>
        <?= $this->Session->flash('flash', array('element' => 'failure')) ?>
        <form class="myform" action="<?= $this->Html->url('/matricula') ?>" method="post">
            <fieldset>
                <?= $this->element('inline-input', array('model' => 'Matriculation', 'field' => 'name', 'desc' => 'Nome', 'inputClass'=>'span4')) ?>
                <h2>Idiomas de Interesse</h2>

                <?= $this->element('inline-check', array('model' => 'Matriculation', 'field' => 'english', 'desc' => 'Inglês')) ?>
                <?= $this->element('inline-check', array('model' => 'Matriculation', 'field' => 'italian', 'desc' => 'Italiano')) ?>
                <?= $this->element('inline-check', array('model' => 'Matriculation', 'field' => 'portuguese', 'desc' => 'Português')) ?>
                <br/>

                <?= $this->element('inline-input', array('model' => 'Matriculation', 'field' => 'phone', 'desc' => 'Telefone', 'inputClass'=>'span2')) ?>
                <?= $this->element('inline-input', array('model' => 'Matriculation', 'field' => 'cellphone', 'desc' => 'Celular', 'inputClass'=>'span2')) ?>
                <?= $this->element('inline-input', array('model' => 'Matriculation', 'field' => 'email', 'desc' => 'E-mail', 'inputClass'=>'span2')) ?>
                
                <label>Soube da Sardonix: </label>
                <select type="text" name="data[Matriculation][where]">
                    <option>Google</option>
                    <option>Cartaz/Banner</option>
                    <option>Passei na frente</option>
                    <option>Outro</option>
                </select>

                <br/><br/>
                <button class="btn btn-info">Enviar</button>
            </fieldset>
        </form>
    </div>
</div>
<?= $this->element('footer') ?>
<?= $this->element('copyright') ?>
<script type="text/javascript">
    $('[name="data[Matriculation][phone]"]').mask('(99)9999-9999');
    $('[name="data[Matriculation][cellphone]"]').mask('(99)9999-9999');
    $('[name="data[Matriculation][name]"]').blur(function(){
        $(this).val(applyCamelCase($(this).val()));
    })
    function applyCamelCase(text) {
        var pieces = text.split(" ");
        var s = '';
        for (var i in pieces) {
            var last = i == pieces.length - 1;
            var w = pieces[i].toLowerCase();
            if (w.length == 1) {
                s += w.toUpperCase();
            } else {
                s += w.substr(0, 1).toUpperCase();
                s += w.substr(1);
                if (!last) {
                    s += ' ';
                }
            }
        }
        return s;
    }
</script>
