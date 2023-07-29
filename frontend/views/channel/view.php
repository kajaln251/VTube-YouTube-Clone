<?php
use yii\widgets\Pjax;


/** @var \yii\web\View $this */
/** @var \common\models\User $channel */
/** @var \yii\data\ActiveDataProvider $dataProvider */
?>

<div class="jumbotron">
<h1 class="display-4 p-4 rounded-3 shadow-4"><?php echo $channel->username ?></h1>
<hr class="my-4" />
<?php Pjax::begin() ?>
<?php echo $this->render('_subscribe', [
    'channel' => $channel 
])?>
<?php Pjax::end()?>
</div>

<?php echo \yii\widgets\ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '@frontend/views/video/_video_item',
    'layout' => '<div class="d-flex flex-wrap">{items}</div>{pager}',
    'itemOptions' => [
        'tag' => false
]
]) ?>