<?php 

use yii\helpers\Html;
//$author

$this->title = "Author";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>

<?php if(Yii::$app->user->isGuest): ?>
    <span class="pull-left">Please <?= Html::a('login',['/site/login'])?> to create a author.</span>
<?php else: ?>
<p>
    <?= Html::a('Create Author',['/author/create'],
        ['class'=>'btn btn-success']); ?>
        </p>
<?php endif; ?>

<table class="table table-bordered table-hovered">
    <tr>
        <th>Name</th>
        <th>Web</th>
        <th>Born</th>

    </tr>
    <?php foreach($author as $authors) : ?>
    <tr class="clickable">
        <td>
            <?= Html::a($authors->name, [
                '/author/view',
                'id'=>$authors->id]); ?>
        </td>    
        <td><?= $authors->web ?></td>     
        <td><?= $authors->born ?></td>     

    </tr>
    <?php endforeach; ?>
</table>
