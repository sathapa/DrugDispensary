<?php
/* @var $this DrugController */
/* @var $model Drug */

$this->breadcrumbs=array(
	'Drugs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Drug Report', 'url'=>array('drugreport')),
	array('label'=>'Create Drug', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#drug-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Drugs</h1>



<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'drug-grid',
	'dataProvider'=>$model->distinctPatient(),
	'columns'=>array(
		array(
                  'header'=>'Name',
                    'value'=>'$data->getRelated("distinct")->firstname." ".$data->getRelated("distinct")->middlename." ".$data->getRelated("distinct")->lastname',
                 'type'=>'raw',
               ),
                  array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'header'=>'Actions',
            'template' => '{register}',
            'buttons' => array(
               
                'register' => array(
                    'label' => 'Drugs',
                    'icon' => 'icon-edit',
                    'url' => 'Yii::app()->controller->createUrl("Drug/drugTrack",array("aid"=>$data->pid))',
                    'options' => array(
                        'class' => 'btn btn-small update'
                    )
                ),
                ),
                      ),
            )
)); ?>
