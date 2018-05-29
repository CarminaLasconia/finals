<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */

$this->title = 'Create application tag';
$this->params['breadcrumbs'][] = ['label' => 'application tag', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="applicationtag-create">

	<h1><?= Html::encode($this->title) ?></h1>
   <?= $this->render('form', [
   	'model' => $model,
   ]) ?>

</div>
    



