<?php

/** @var yii\web\View $this */

/** @var string  $content */

use common\widgets\Alert;

$this->beginContent('@frontend/views/layouts/main.php');
?>
<main class="d-flex">
    <div class="content-wrapper p-1">
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>
<?php $this->endContent() ?>