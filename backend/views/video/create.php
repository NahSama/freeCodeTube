<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Video */

$this->title = 'Create Video';
$this->params['breadcrumbs'][] = ['label' => 'Videos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="video-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <!-- <?= $this->render('_form', [
        'model' => $model,
    ]) ?> -->

    <div class="d-flex flex-column justify-content-center align-items-center">
        <div class="upload-icon"><i class="fas fa-upload"></i></div>
        <br>
        
        <p class="text-muted m-0">Drag and drop the file you want.</p>

        <p class="text-muted">Your video will be private until you publish it.</p>

        <?php $form = yii\bootstrap4\ActiveForm::begin([
            'options' => ['enctype' => 'multipart/form-data']
        ]) ?>
        
        <button class="btn btn-primary btn-file">
            Select file
            <input type="file" id="videoFile" name="video">
        </button>

        <div><?php echo $form->errorSummary($model) ?></div>

        <?php yii\bootstrap4\ActiveForm::end() ?>
    </div>

</div>