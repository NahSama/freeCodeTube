<?php

use yii\helpers\Url;
use yii\helpers\StringHelper;
/*
*   @var $model \common\models\Video
*/
?>

<div class="media">
    <a href="<?php echo yii\helpers\Url::to(['/video/update', 'id' =>$model->video_id])?>">
        <div class="embed-responsive embed-responsive-16by9 mr-3" style="width: 140px;">
            <video class="embed-responsive-item" 
            src="<?php echo $model->getVideoLink() ?>"
            poster="<?php echo $model->getThumbnailLink()?>"
            ></video>
        </div>
    </a>
    <div class="media-body">
        <h6 class="mt-0"><?php echo $model->title ?></h6>
        <?php echo StringHelper::truncateWords($model->description, 10, $suffix = '...', $asHtml = true)?>
    </div>
</div>
