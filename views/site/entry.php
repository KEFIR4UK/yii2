<?php
/**
 * Created by PhpStorm.
 * User: yuriy
 * Date: 10/17/16
 * Time: 4:40 PM
 */
?>
<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(array(
    'id' => 'contact-form',
    'enableAjaxValidation' => true,
)); ?>

<?= $form->field($model, 'name') ?>

<?= $form->field($model, 'email')->input('email') ?>

<div class="form-group">
    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>
