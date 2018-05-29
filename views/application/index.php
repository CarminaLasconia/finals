<?php 

use yii\helpers\Html;
//$application

$this->title = "Applicatiion";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>

<?php if(Yii::$app->user->isGuest): ?>
    <span class="pull-left">Please <?= Html::a('login',['/site/login'])?> to create a application.</span>
<?php else: ?>
<p>
    <?= Html::a('Create Applicatiion',['/application/create'],
        ['class'=>'btn btn-success']); ?>
        </p>
<?php endif; ?>

<table class="table table-bordered table-hovered">
    <tr>
        <th>Author ID</th>
        <th>Title</th>
        <th>Web</th>
        <th>Slogan</th>


    </tr>
    <?php foreach($application as $applications) : ?>
    <tr class="clickable">
        <td>
            <?= Html::a($applications->author_id, [
                '/application/view',
                'id'=>$applications->id]); ?>
        </td>    
        <td><?= $applications->title ?></td>     
        <td><?= $applications->web ?></td>    
        <td><?= $applications->slogan ?></td>     
 

    </tr>
    <?php endforeach; ?>
</table>
