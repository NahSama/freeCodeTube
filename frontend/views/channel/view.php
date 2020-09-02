<?php 

use yii\helpers\Url;
use yii\widgets\Pjax;
/**
 * @var $channel \common\models\User 
 * @var $dataProvider \yii\data\ActiveDataProvider
 */
?>

<div class="jumbotron d-flex">
    <div class="col-sm-10">
        <h1 class="display-4"><?php echo $channel->username ?></h1>
        <p><?php echo $channel->countSubscriber()?> subcribers</p>
    </div>
    <div class="mt-auto ml-auto col-sm-2">
        <?php Pjax::begin() ?>
            <?php echo $this->render('_subscribe', [
                'channel' => $channel
            ]) ?>
        <?php Pjax::end() ?>
    </div>
    <hr class="my-4">
</div>

<?php echo yii\widgets\ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '../video/_video_item',
    'layout' => '<div class="d-flex flex-wrap">{items}</div>{pager}',
    'itemOptions' => [
        'tag' => false
    ]
]);
?>