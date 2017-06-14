
<?php
/* @var $this PatientController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Patients',
);

$this->menu=array(
	array('label'=>'Create Patient', 'url'=>array('create')),
	array('label'=>'Manage Patient', 'url'=>array('admin')),
);
?>

<h1>Patients</h1>

    <?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'appointment-grid',
	'dataProvider'=>$model->search(),
        'type'=>'striped bordered condensed',
        'template'=>'{summary}{pager}{items}{pager}',
	'columns'=>array(

		'firstname',
		'middlename',
		'lastname',
		'gender',
        'dob',
        'city',
		/*
		'clerk',
		'dID',
		'date',
		'time',
		*/
        array(
            'class'=>'bootstrap.widgets.TbButtonColumn',
            'header'=>'Actions',
            'template' => '{view} {register}',
            'buttons' => array(
                'view' => array(
                    'label'=> 'View',
                    'options'=>array(
                        'class'=>'btn btn-small view'
                    )
                ),
                'register' => array(
                    'label' => 'AssignDrug',
                    'icon' => 'icon-edit',
                    'url' => 'Yii::app()->controller->createUrl("Drug/Create1",array("aid"=>$data->id))',
                    'options' => array(
                        'class' => 'btn btn-small update'
                    )
                ),
                /*'delete' => array(
                    'label'=> 'Delete',
                    'options'=>array(
                        'class'=>'btn btn-small delete'
                    )
                )*/
            ),
            'htmlOptions'=>array('nowrap'=>'nowrap'),
        )
	),
)); ?>
