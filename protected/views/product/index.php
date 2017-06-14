<?php /*echo $form->textFieldRow($model1,'icd10code',array('class'=>'span5','maxlength'=>500));*/
                $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                    'model'=>$model1,
                    'attribute'=>'DrugName',
                    'value'=>'Search',
                    'source'=>$this->createUrl('autoComplete'),
                    // additional javascript options for the autocomplete plugin
                    'options'=>array(
                        'minLength'=>'1',
                        'showAnim'=>'fold',
                        'select'=>"js:function(event, ui) {
                                          $('#id').val(ui.item.id);
                                        }",
                        'change'=>"js:function(event, ui) {
                                          if (!ui.item) {
                                             $('#User_user_id').val('');
                                          }
                                        }",


                        /*'select' => "js:function(event, ui) {
	            $('#icd10no').val(ui.item.['icd10no']);
	            }",
                        'change' => "js:function(event, ui) {
	            if (!ui.item) {
	                $('#icd10no').val('');
	            }
	            }",*/
                    ),
                    'htmlOptions'=>array(
                        'class'=>'span3',
                        'placeholder'=>'Product Name',
                    ),
                ));
            ?>