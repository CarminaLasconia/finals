<?php

use yii\helpers\Html;



/* @var $this yii\web\View */
/* @var $model common\models\Application */

$this->title = 'Create Application';
$this->params['breadcrumbs'][] = ['label' => 'Application', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="application-create">

    <h1><?= Html::encode($this->title) ?></h1>
   <?= $this->render('form', [
   	'model' => $model,
   ]) ?>

</div>
