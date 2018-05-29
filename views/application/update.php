<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\application */

$this->title = 'Update application:';
$this->params['breadcrumbs'][] = ['label' => 'application', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="application-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('form', [
        'model' => $model,
    ]) ?>

</div>