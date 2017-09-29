<?php
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;


?>

<!--Content Feed -->
			
				<?php 
			

$dataProvider = new ActiveDataProvider([
    'query' => app\models\Read::find()->where(['not like','channel', 'headline']),
	'sort'=> ['defaultOrder' => ['created_at'=>SORT_DESC]],
    'pagination' => [
        'pageSize' => 2,
    ],
]);
			echo ListView::widget([
     'dataProvider' => $dataProvider,
     'itemOptions' => ['class' => 'item'],
     'itemView' => 'posts_view',
	 'summary'=>'',
     'pager' => [
	 'class' => \kop\y2sp\ScrollPager::className(),
	 'triggerOffset' => 5,
	 'triggerTemplate' => '<center><a style="cursor: pointer" class="btn btn-block btn-default">Load More....</a></center>',
	 'noneLeftText'=>'Kamu Sudah Up to Date, Guys!'
	 ],
	 
     
	]);
			
			?>