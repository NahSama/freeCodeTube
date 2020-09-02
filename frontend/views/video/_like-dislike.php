<?php 
/**
 * @var model \common\models\Video
 */
use yii\helpers\Url;
?>
<a href="<?php echo Url::to(['/video/like', 'id' => $model->video_id])?>" 
    data-method="post" data-pjax="1" class="btn btn-sm <?php echo $model->isLikedBy(Yii::$app->user->id) ? "btn-outline-primary": "btn-outline-secondary"?>">
    <i class="fas fa-thumbs-up"></i> <?php echo $model->getLike()->count() ?>
</a>
<a href="<?php echo Url::to(['/video/dislike', 'id' => $model->video_id])?>" 
    data-method="post" data-pjax="1" class="btn btn-sm <?php echo $model->isDislikedBy(Yii::$app->user->id) ? "btn-outline-primary": "btn-outline-secondary"?>" >
    <i class="fas fa-thumbs-down" style="transform: scaleX(-1)"></i> <?php echo $model->getDislike()->count() ?>
</a>