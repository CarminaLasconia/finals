<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
?>

<div class="application-form">

	<?php $form = ActiveForm::begin(); ?>

	
	<?= $form->field($model, 'application_id')->textInput(); ?>

	<?= $form->field($model, 'tag_id')->textInput(); ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>




