<?= $this->element('header') ?>
<div id="wrapper">
    <div class="container">
        <br/>
        <div class="title"><h2>Teste de Nível</h2></div>
        <br/>
        <p>Preencha o formulário abaixo e selecione um idioma e módulo para realizar o teste de nível.</p>
        <br/>
        <form class="myform" action="<?= $this->Html->url('/testenivel') ?>" method="post">
            <?=$this->element('inline-input', array('model'=>'TestExecution', 'field'=>'name', 'desc'=>'Nome'))?>
            <?=$this->element('inline-input', array('model'=>'TestExecution', 'field'=>'email', 'desc'=>'E-mail'))?>
            <label>Idioma</label>
            <select name="data[TestExecution][language]">
                <option value="english">Inglês</option>
            </select>
            <label>Módulo</label>
            <select class="corner-all select" name="data[TestExecution][module_id]">
                <option value="1">Básico</option>
                <option value="2">Inicial</option>
                <option value="3">Pré-Intermediário</option>
                <option value="4">Intermediário</option>
                <option value="5">Avançado</option>
            </select>
            <br/>
            <br/>
            <button class="btn btn-info">Fazer o Teste</button>
        </form>
    </div>
</div>
<?= $this->element('footer') ?>
<?= $this->element('copyright') ?>
<script type="text/javascript">
    $('[name="phone"]').mask('(99)9999-9999');
    $('[name="cellphone"]').mask('(99)9999-9999');
</script>