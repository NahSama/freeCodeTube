<?php 

use yii\helpers\Html;
use yii\helpers\StringHelper;
/**
 * @var model \common\models\Video
 */
?>

<div class="card m-1" style="width: 18rem;">
    <a href="<?php echo yii\helpers\Url::to(['/video/view', 'id' =>$model->video_id])?>">
        <div class="embed-responsive embed-responsive-16by9 mr-3 container-fluid" style="">
            <video class="embed-responsive-item" 
            src="<?php echo $model->getVideoLink() ?>"
            poster="<?php echo $model->getThumbnailLink()?>"
            ></video>
        </div>
    </a>
    <div class="card-body p-2">
        <h6 class="card-title m-0"><?php echo $model->title ?></h6>
        <p class="card-text text-muted m-0"><?php echo Html::a($model->createdBy->username, [
                    '/channel/view',
                    'username' => $model->createdBy->username,    
                ],
                [
                    'class' => 'text-muted text-decoration-none'
                ])?></p>
        <p class="card-text text-muted m-0"><?php echo $model->getView()->count()?> views • <?php echo Yii::$app->formatter->asRelativeTime($model->created_at) ?></p>
    </div>
</div>