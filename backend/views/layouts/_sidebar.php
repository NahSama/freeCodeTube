<aside class="shadow">
    <?php 
        echo \yii\bootstrap4\Nav::widget([
            'options' => [
                'class' => 'd-flex nav-pills flex-column',
            ],
            'items' => [
                [
                    'label' => 'Dashboard',
                    'url' => ['/site/index']
                ],
                [
                    'label' => 'Videos',
                    'url' => ['/video/index']
                ]
            ]
        ])
    ?>
</aside>