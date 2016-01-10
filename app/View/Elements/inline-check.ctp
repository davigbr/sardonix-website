<?
$errors = (isset($this->validationErrors[$model]) && isset($this->validationErrors[$model][$field]))? $this->validationErrors[$model][$field]: array();
?>
<div class="control-group <?= empty($errors) ? '' : 'error' ?>">
    <div class="controls">
        <label class="checkbox inline">
            <input id="<?=$model . '-' . $field?>" class="checkbox" name="data[<?= $model ?>][<?= $field ?>]" type="checkbox"/>
            <?= $desc ?>
            <span class="help-inline" style="font-size: 1.2em; padding-bottom: 10px">
                <?
                foreach ($errors as $error)
                    echo $error . ' ';
                ?>
            </span>
        </label>
    </div>
</div>