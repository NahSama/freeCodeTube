<?php 

use yii\helpers\Url;
use yii\helpers\Html;

/**
 * @var model \common\models\Video
 */
?>
<div class="row">
    <div class="col-sm-8">
        <div class="embed-responsive embed-responsive-16by9 mr-3 container-fluid" style="">
            <video class="embed-responsive-item" 
            src="<?php echo $model->getVideoLink() ?>"
            controls
            poster="<?php echo $model->getThumbnailLink()?>"
            ></video>
        </div>
        <h1 class="my-2"><?php echo $model->title ?></h1>
        <div class="d-flex align-items-center">
            <div>
                <?php echo $model->getView()->count()?> views • 
                <?php echo Yii::$app->formatter->asDate($model->created_at) ?>
            </div>
            <div class="ml-auto">
                <?php \yii\widgets\Pjax::begin() ?>
                    <?php echo $this->render('_like-dislike', ['model' => $model]) ?> 
                <?php \yii\widgets\Pjax::end() ?>
            </div>
        </div>
        <div>
            <strong>
                <?php echo Html::a($model->createdBy->username, [
                    '/channel/view',
                    'username' => $model->createdBy->username,     
                ])?>
            </strong>
            <p><?php echo Html::encode($model->description) ?></p>
        </div>
    </div>
    <div class="col-sm-4">

    </div>
</div>