<?php
/** @var \common\models\User $channel  */
/** @var \common\models\User $user */
?>

<p>Hello <?php echo $channel->username ?> </p>
<p>User <?php echo \common\helpers\Html::channelLink($user, true) ?>
 has subscribed to you. </p>

 <p>VTube Team.</p>