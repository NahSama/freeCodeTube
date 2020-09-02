<?php 
use yii\helpers\Url;
?>

<p class="lead">
    <?php if ($channel->id != Yii::$app->user->id) {?>
    <a class="btn <?php echo ($channel->isSubscribed(Yii::$app->user->id)) ? "btn-secondary":"btn-danger"?> " href="<?php echo Url::to(['channel/subscribe', 'username' => $channel->username]) ?>" role="button" data-method="post" data-pjax="1">
        Subcribe 
        <i class="far fa-bell"></i>
    </a> 
    <?php } ?>
</p>
