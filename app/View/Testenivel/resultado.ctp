<?= $this->element('header') ?>
<div id="wrapper">
    <div class="container">
        <br/>
        <div class="title"><h2>Teste de Nível - <?= $language ?> - Resultado</h2></div>

        <form class="myform" action="<?= $this->Html->url('') ?>" method="post">
            <table class="table table-striped table-condensed table-bordered">
                <tr>
                    <th>Marcada</th>
                    <th>Correta</th>
                    <th>Alternativa A</th>
                    <th>Alternativa B</th>
                    <th>Alternativa C</th>
                    <th>Alternativa D</th>
                </tr>
                <? foreach ($questions as $question): ?>
                    <tr>
                        <td colspan="6">
                            <?= $question['Test']['number'] ?>) <?= $question['Test']['question'] ?>
                        </td>
                    </tr>
                    <tr class="<?= $question['Test']['right'] ? 'success' : 'error' ?>">
                        <td>
                            <span><?= strtoupper($question['Test']['answer']) ?></span>
                        </td>
                        <td>
                            <span><?= strtoupper($question['Test']['right_alternative']) ?></span>
                        </td>
                        <td>
                            <span>A) <?= $question['Test']['alternative_a'] ?></span>
                        </td>
                        <td>
                            <span>B) <?= $question['Test']['alternative_b'] ?></span>
                        </td>
                        <td>
                            <span>C) <?= $question['Test']['alternative_c'] ?></span>
                        </td>
                        <td>
                            <span>D) <?= $question['Test']['alternative_d'] ?></span>
                        </td>
                    </tr>
                <? endforeach ?>
            </table>
            <br/>
            <p>
            <big>O seu percentual de acertos é:  
                <? if ($final_result >= 75): ?>
                    <big class="badge badge-info"><?= $final_result ?>%</big>
                <? else: ?>
                    <big class="badge badge-important"><?= $final_result ?>%</big>
                <? endif ?>
            </big>
            </p>
            <br/>
            <br/>
            <a href="<?= $this->Html->url('/testenivel') ?>"><button class="btn btn-info">Realizar outro Teste</button></a>
        </form>
    </div>
</div>
<?= $this->element('footer') ?>
<?= $this->element('copyright') ?>
<script type="text/javascript">
    $('[name="phone"]').mask('(99)9999-9999');
    $('[name="cellphone"]').mask('(99)9999-9999');
</script>