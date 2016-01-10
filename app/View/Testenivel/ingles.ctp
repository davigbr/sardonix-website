<div class="corner-all header-column cell">
    <h1>Teste de Nível - Inglês</h1>

    <form action="<?= $this->Html->url('') ?>" method="post">
        <table style="width: 100%;">
            <? foreach ($questions as $question): ?>
                <tr>
                    <td colspan="4">
                        <span class="question"><?= $question['Test']['number'] ?>) <?= $question['Test']['question'] ?></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" class="radio" id="question-<?= $question['Test']['number'] ?>-A" name="question-<?= $question['Test']['number'] ?>" value="a"/>
                        <label class="radio-label" for="question-<?= $question['Test']['number'] ?>-A"><?= $question['Test']['alternative_a'] ?></label>
                    </td>
                    <td>
                        <input type="radio" class="radio" id="question-<?= $question['Test']['number'] ?>-B" name="question-<?= $question['Test']['number'] ?>" value="b"/>
                        <label class="radio-label" for="question-<?= $question['Test']['number'] ?>-B"><?= $question['Test']['alternative_b'] ?></label>
                    </td>
                    <td>
                        <input type="radio" class="radio" id="question-<?= $question['Test']['number'] ?>-C" name="question-<?= $question['Test']['number'] ?>" value="c"/>
                        <label class="radio-label" for="question-<?= $question['Test']['number'] ?>-C"><?= $question['Test']['alternative_c'] ?></label>
                    </td>
                    <td>
                        <input type="radio" class="radio" id="question-<?= $question['Test']['number'] ?>-D" name="question-<?= $question['Test']['number'] ?>" value="d"/>
                        <label class="radio-label" for="question-<?= $question['Test']['number'] ?>-D"><?= $question['Test']['alternative_d'] ?></label>
                    </td>
                </tr>
            <? endforeach ?>
        </table>
        <br/>

        <input class="red-button submit corner-all" type="submit" value="Verificar o Resultado" />
    </form>
</div>
<script type="text/javascript">
    $('[name="phone"]').mask('(99)9999-9999');
    $('[name="cellphone"]').mask('(99)9999-9999');
</script>