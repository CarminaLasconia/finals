<?php 

use yii\helpers\Html;
//$application

$this->title = "Application Tag";
$this->params['breadcrumbs'][] = $this->title;
?>
<?= Html::a('Create application',['/application-tag/create'],
    ['class'=>'btn btn-primary btn-lg pull-right']); ?>
<h1><?= $this->title?></h1>

<table class="table table-bordered table-hovered">
    <tr>
        
        <th>Application ID</th>
        <th>Tag ID</th>


    </tr>
    <?php foreach($applicationtag as $applicationtags) : ?>
    <tr class="clickable">
        <td>
            <?= Html::a($applicationtags->application_id, [
                '/application-tag/view',
                'id'=>$applicationtags->id]); ?>
        </td>    
        <td><?= $applicationtags->tag_id ?></td> 
    </tr>
    <?php endforeach; ?>
</table>