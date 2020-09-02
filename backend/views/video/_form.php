<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Video */
/* @var $form yii\widgets\ActiveForm */

\backend\assets\TagsInputAsset::register($this);
?>

<div class="video-form">

    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data']
    ]); ?>

    <div class="row">
        <div class="col-sm-8">
            <?php echo $form->errorSummary($model)?>
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'tags', [
                'inputOptions' => ['data-role' => 'tagsinput']
            ])->textInput(['maxlength' => true]) ?>
            
            <div class="form-group">
                <label for=""><?php echo $model->getAttributeLabel('thumbnail')?></label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="thumbnail" name="thumbnail">
                    <label class="custom-file-label" for="thumbnail">Choose file</label>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="mb-3">
                <span>Video</span>
                <div class="embed-responsive embed-responsive-16by9">
                    <video class="embed-responsive-item" 
                    src="<?php echo $model->getVideoLink() ?>"
                    poster="<?php echo $model->getThumbnailLink()?>"
                    allowfullscreen controls></video>
                </div>
            </div>
            
            <div class="mb-3">
                <a href="<?php echo $model->getVideoLink() ?>" class="text-muted">Video Link</a>
            </div>

            <div class="mb-3">
                <span class="text-muted">Video Name</span>
                <?php echo $model->video_name ?>
            </div>
            
            <div class="mb-3">
                <?= $form->field($model, 'status')->dropDownList($model->getStatusLabels()) ?>
            </div>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
