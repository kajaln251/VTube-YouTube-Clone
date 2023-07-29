<?php

use yii\helpers\Url;
 /** @var \common\models\Video $model */

?>

<a href="<?php echo Url::to(['/video/like', 'id' => $model->video_id]) ?>" 
class="btn btn-sm <?php echo $model ->isLikedBy(Yii::$app->user->id) ? 'btn-outline-primary': 'btn-outline-secondary' ?> btn-outline-primary"
    data-method="post" data-pjax="1">
    <i class="fa-solid fa-thumbs-up"></i> <?php echo $model->getLikes()->count() ?>         
    </a>

    <a href="<?php echo Url::to(['/video/dislike', 'id' => $model->video_id]) ?>" 
class="btn btn-sm <?php echo $model ->isDislikedBy(Yii::$app->user->id) ? 'btn-outline-primary': 'btn-outline-secondary' ?> btn-outline-primary"
    data-method="post" data-pjax="1">
    <i class="fa-solid fa-thumbs-down"></i> <?php echo $model->getDislikes()->count() ?>        
    </a>
 
    