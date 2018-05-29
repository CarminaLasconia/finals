<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\application */

$this->title = 'Update application tag:';
$this->params['breadcrumbs'][] = ['label' => 'applicationtag', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="applicationtag-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('form', [
        'model' => $model,
    ]) ?>

</div>