<?php

/** @var yii\web\View $this */
/** @var \common\models\Video $latestVideo */
/** @var \common\models\Subscriber[] $subscribers  */
/** @var integer $numberOfView */
/** @var integer $numberOfSubscribers */

$this->title = 'My Yii Application';
?>
<div class="site-index d-flex">

<div class="card m-2" style="width: 14rem;">

<?php if ($latestVideo): ?>

<div class="ratio ratio-16x9 mb-3">
  <video class="embed-responsive-item"
     poster="<?php echo $latestVideo->getThumbnailLink() ?>"
     src="<?php echo $latestVideo->getVideoLink() ?>" ></video>
 </div>
  <div class="card-body">
    <h5 class="card-title"><?php echo $latestVideo->title ?></h5>
    <p class="card-text">
       Likes: <?php echo $latestVideo->getLikes()->count() ?><br>
       Views: <?php echo $latestVideo->getViews()->count() ?><br> 
    </p>
    <a href="<?php echo yii\helpers\Url::to(['/video/update', 'video_id' => $latestVideo->video_id]); ?>" 
    class="btn btn-primary">
    Edit 
    </a>
  </div>

  <?php else: ?>
    <div class="card-body">

      You do not have uploaded any video yet!

    </div>

    <?php endif;?>
</div>

<div class="card m-2" style="width: 14rem;">

  <div class="card-body">
    <h5 class="card-title">Total Views</h5>
    <p class="card-text" style="font-size: 48px">
       <?php echo $numberOfView ?>
    </p>
  </div>
</div>

<div class="card m-2" style="width: 14rem;">

  <div class="card-body">
    <h5 class="card-title">Total Subscribers</h5>
    <p class="card-text" style="font-size: 48px">
       <?php echo $numberOfSubscribers ?>
    </p>
  </div>
</div>

<div class="card m-2" style="width: 14rem;">

  <div class="card-body">
    <h5 class="card-title">Latest Subscribers</h5>
    <p class="card-text" style="font-size: 48px">
       <?php echo $numberOfSubscribers ?>
    </p>
  </div>
</div>


</div>
