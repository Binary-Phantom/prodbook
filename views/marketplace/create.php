<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\marketplace $model */

$this->title = 'Create Marketplace';
$this->params['breadcrumbs'][] = ['label' => 'Marketplaces', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="marketplace-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
