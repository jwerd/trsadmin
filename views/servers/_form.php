<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Server */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="server-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hostname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'banner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'map')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'current_player_count')->textInput() ?>

    <?= $form->field($model, 'max_player_count')->textInput() ?>

    <?= $form->field($model, 'passworded')->textInput() ?>

    <?= $form->field($model, 'vac')->textInput() ?>

    <?= $form->field($model, 'dedicated')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'os')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'version')->textInput() ?>

    <?= $form->field($model, 'gameport')->textInput() ?>

    <?= $form->field($model, 'realgameport')->textInput() ?>

    <?= $form->field($model, 'serverid')->textInput() ?>

    <?= $form->field($model, 'servertags')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'votes')->textInput() ?>

    <?= $form->field($model, 'rank')->textInput() ?>

    <?= $form->field($model, 'upcount')->textInput() ?>

    <?= $form->field($model, 'downcount')->textInput() ?>

    <?= $form->field($model, 'dailypopulationcount')->textInput() ?>

    <?= $form->field($model, 'last_wipe')->textInput() ?>

    <?= $form->field($model, 'future_wipe')->textInput() ?>

    <?= $form->field($model, 'wipe_frequency')->textInput() ?>

    <?= $form->field($model, 'promo')->textInput() ?>

    <?= $form->field($model, 'type')->textInput() ?>

    <?= $form->field($model, 'vanity_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_checked')->textInput() ?>

    <?= $form->field($model, 'hide')->textInput() ?>

    <?= $form->field($model, 'location_city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location_state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location_country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location_country_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hide_comments')->textInput() ?>

    <?= $form->field($model, 'claimed_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
