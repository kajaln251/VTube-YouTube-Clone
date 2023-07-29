<?php

/** @var \yii\web\View $this */
/** @var  \yii\data\ActiveDataProvider $dataProvider */

use yii\bootstrap5\LinkPager;
use yii\widgets\ListView;
?>

<?= ListView::widget([
    'dataProvider' => $dataProvider,
    'pager' => [
    'class' => LinkPager::class,
    ],
    'itemView' => '_video_item',
    'layout' => '<div class="d-flex flex-wrap">{items}</div>{pager}',
    'itemOptions' => [
        'tag' => false
]
]) ?>