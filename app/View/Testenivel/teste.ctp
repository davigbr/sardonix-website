<?= $this->element('header') ?>
<div id="wrapper">
    <div class="container">
        <br/>
        <div class="title"><h2>Teste de Nível - <?= $language ?></h2></div>
        <br/>
        <form action="<?= $this->Html->url('') ?>" method="post">
            <table class="table table-striped table-bordered table-condensed" style="width: 100%;">
                <? foreach ($questions as $question): ?>
                    <tr>
                        <th colspan="4">
                            <span class="question"><?= $question['Test']['number'] ?>) <?= $question['Test']['question'] ?></span>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <label class="radio" for="question-<?= $question['Test']['number'] ?>-A">
                                <input type="radio" class="radio" id="question-<?= $question['Test']['number'] ?>-A" name="question-<?= $question['Test']['number'] ?>" value="a"/>
                                <?= $question['Test']['alternative_a'] ?>
                            </label>
                        </td>
                        <td>
                            <label class="radio" for="question-<?= $question['Test']['number'] ?>-B">
                                <input type="radio" class="radio" id="question-<?= $question['Test']['number'] ?>-B" name="question-<?= $question['Test']['number'] ?>" value="b"/>
                                <?= $question['Test']['alternative_b'] ?>
                            </label>
                        </td>
                        <td>
                            <label class="radio" for="question-<?= $question['Test']['number'] ?>-C">
                                <input type="radio" class="radio" id="question-<?= $question['Test']['number'] ?>-C" name="question-<?= $question['Test']['number'] ?>" value="c"/>
                                <?= $question['Test']['alternative_c'] ?>
                            </label>
                        </td>
                        <td>
                            <label class="radio" for="question-<?= $question['Test']['number'] ?>-D"><?= $question['Test']['alternative_d'] ?>
                                <input type="radio" class="radio" id="question-<?= $question['Test']['number'] ?>-D" name="question-<?= $question['Test']['number'] ?>" value="d"/>
                            </label>
                        </td>
                    </tr>
                <? endforeach ?>
            </table>
            <br/>
            <button class="btn btn-info">Verificar o Resultado</button>
        </form>
    </div>
</div>
<?= $this->element('footer') ?>
<?= $this->element('copyright') ?>
<script type="text/javascript">
    $('[name="phone"]').mask('(99)9999-9999');
    $('[name="cellphone"]').mask('(99)9999-9999');
</script>