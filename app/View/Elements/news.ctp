<table class="table table-striped table-condensed">
    <? foreach ($news as $new): ?>
        <tr>
            <td><a href="#<?php echo $this->Html->url('/news/view/' . $new['New']['id'])?>"><?php echo $new['New']['title'] ?></a></td>
        </tr>
        <tr>
            <td><?= $new['New']['summary'] ?></td>
        </tr>
    <? endforeach; ?>
</table>
