<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model common\models\Author */

$this->title = 'Create Author';
$this->params['breadcrumbs'][] = ['label' => 'Author', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="author-create">

    <h1><?= Html::encode($this->title) ?></h1>
   <?= $this->render('form', [
   	'model' => $model,
   ]) ?>

</div>
