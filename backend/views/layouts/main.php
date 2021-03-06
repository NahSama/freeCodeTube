<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
//alias @backend corresponds to path to /backend, inside common/config/bootstrap
$this->beginContent('@backend/views/layouts/base.php');
?>
<main class="d-flex">
    <?php echo $this->render('_sidebar') ?> 

    <div class="content-wrapper p-3">
        <!-- <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?> -->
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>
<?php $this->endContent() ?>

