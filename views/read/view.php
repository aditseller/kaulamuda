<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Read */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Reads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="read-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_read',
            'title',
            'teaser',
            'content:ntext',
            'created_by',
            'created_at',
            'channel',
            'tag',
            'source',
            'image',
        ],
    ]) ?>

</div>
