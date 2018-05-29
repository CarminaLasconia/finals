<?php 

use yii\helpers\Html;
//$tag

$this->title = "Tags";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>

<?php if(Yii::$app->user->isGuest): ?>
    <span class="pull-left">Please <?= Html::a('login',['/site/login'])?> to create a tag.</span>
<?php else: ?>
<p>
    <?= Html::a('Create Tags',['/tag/create'],
        ['class'=>'btn btn-success']); ?>
        </p>
<?php endif; ?>

<table class="table table-bordered table-hovered">
    <tr>
        <th>Name</th>
    </tr>
    <?php foreach($tag as $tags) : ?>
    <tr class="clickable">
        <td>
            <?= Html::a($tags->name, [
                '/tag/view',
                'id'=>$tags->id]); ?>
        </td>        
    </tr>
    <?php endforeach; ?>
</table>
