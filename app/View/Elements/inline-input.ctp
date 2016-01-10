<?
$errors = (isset($this->validationErrors[$model]) && isset($this->validationErrors[$model][$field]))? $this->validationErrors[$model][$field]: array();
?>
<div class="control-group <?= empty($errors) ? '' : 'error' ?>">
    <input placeholder="<?= $desc ?>" maxlength="200" class="<?=@$inputClass?>" name="data[<?= $model ?>][<?= $field ?>]" type="text"/>
    <span class="help-inline" style="font-size: 1.2em; padding-bottom: 10px">
        <?
        foreach ($errors as $error)
            echo $error . ' ';
        ?>
    </span>
</div>