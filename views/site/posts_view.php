<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>
<a href="https://google.com" target="_blank">
<table>
			
			<tr style="border-bottom:1px solid #b302b5;">
			<td width="100%">
			<p style="color:#b302b5; font-size:0.8em; font-family:Open Sans; margin-left:7px; margin-bottom:0%;"><?= $model->channel; ?></p>
			<p style="color:#000000; font-size:1.0em; font-family:Open Sans;  margin-left:7px;"><?= $model->title; ?></p>
			<p style="color:#b302b5; font-size:1.0em; margin-left:5px;">
			<a href="#">
			<?= $model->source; ?>
			</a>
			</p>
			</td>
			<td width="30%"><img style="width:150px; height:105px;" src="<?= $model->image; ?>"></td>
			</tr>
			
			
                 
</table>
</a>