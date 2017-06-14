<!DOCTYPE html>
<html>
<body>
<div class="page-container">
    <div class="container">
        <div class="row">
            <div class="span5 pull-left">
                <div class="well" style="padding-top: 0; padding-bottom: 0"><b>New Appointments</b>
                    <?php $this->widget('bootstrap.widgets.TbGridView',array(
                        'id'=>'calendar-gridOld',
                        'dataProvider'=>$model->searchNew(),
                        //'selectionChanged'=>"function(id){window.location='".Yii::app()->urlManager->createUrl('Subjective/preLoad',array('pid'=>''))."' + $.fn.yiiGridView.getSelection(id);}",
                        'type'=>'striped bordered condensed',
                        'itemsCssClass'=>'items table-hover',
                        'template'=>'{summary}{items}{pager}',
                        'columns'=>array(
                            'Subject',
                            array(
                                'header'=>'<a>Actions</a>',
                                'class'=>'bootstrap.widgets.TbButtonColumn',
                                'template' => '{result}',
                                'buttons' => array(
                                    'result' => array(
                                        'label'=> 'Patient&nbsp;Screen',
                                        'url'=>'Yii::app()->controller->createUrl("/Subjective/preLoad",array("pid"=>$data->Id))',
                                        'options'=>array(
                                            'class'=>'btn btn-small'
                                        )
                                    )
                                )
                            )
                        ),
                        'htmlOptions'=>array('nowrap'=>'nowrap','style'=>'padding-top:0')
                    )); ?>
                </div>
                <div class="well" style="padding-top: 0; padding-bottom: 0"><b>Follow Ups</b>
                    <?php $this->widget('bootstrap.widgets.TbGridView',array(
                        'id'=>'calendar-gridNew',
                        'dataProvider'=>$model->searchOld(),
                        //'selectionChanged'=>"function(id){window.location='".Yii::app()->urlManager->createUrl('Subjective/preLoad',array('pid'=>''))."' + $.fn.yiiGridView.getSelection(id);}",
                        'type'=>'striped bordered condensed',
                        'itemsCssClass'=>'items table-hover',
                        'template'=>'{summary}{items}{pager}',
                        'columns'=>array(
                            'Subject',
                            array(
                                'header'=>'<a>Actions</a>',
                                'class'=>'bootstrap.widgets.TbButtonColumn',
                                'template' => '{result}',
                                'buttons' => array(
                                    'result' => array(
                                        'label'=> 'Patient&nbsp;Screen',
                                        'url'=>'Yii::app()->controller->createUrl("/Subjective/preLoad",array("pid"=>$data->Id))',
                                        'options'=>array(
                                            'class'=>'btn btn-small'
                                        )
                                    )
                                )
                            )
                        ),
                        'htmlOptions'=>array('nowrap'=>'nowrap','style'=>'padding-top:0')
                    )); ?>
                </div>
            </div>
            <div class="pull-left">
                <div class="span7">
                    <div>
                        <div id="calhead" style="padding-left:1px;padding-right:1px;">
                            <div class="cHead">
                                <div class="ftitle">
                                    <?php echo CHtml::link(Yii::app()->name, Yii::app()->controller->createUrl( '/' ) ); ?>
                                </div>
                                <div id="loadingpannel" class="ptogtitle loadicon" style="display: none;">Loading data...</div>
                                <div id="errorpannel" class="ptogtitle loaderror" style="display: none;">Sorry, could not load your data, please try again later</div>
                            </div>
                            <div id="caltoolbar" class="ctoolbar">
                                <div id="faddbtn" class="fbutton">
                                    <?php if( ! array_key_exists( 'readonly', $this->module->wd_options ) || $this->module->wd_options[ 'readonly' ] != 'JS:true' ) : // TODO make this prettier ?>
                                        <div><span title='Click to Create New Event' class="addcal">New Event</span></div>
                                    <?php endif; ?>
                                </div>
                                <div class="btnseparator"></div>
                                <div id="showtodaybtn" class="fbutton">
                                    <div><span title='Click to back to today ' class="showtoday">Today</span></div>
                                </div>
                                <div class="btnseparator"></div>
                                <div id="showdaybtn" class="fbutton">
                                    <div><span title='Day' class="showdayview">Day</span></div>
                                </div>
                                <div  id="showweekbtn" class="fbutton fcurrent">
                                    <div><span title='Week' class="showweekview">Week</span></div>
                                </div>
                                <div  id="showmonthbtn" class="fbutton">
                                    <div><span title='Month' class="showmonthview">Month</span></div>
                                </div>
                                <div class="btnseparator"></div>
                                <div  id="showreflashbtn" class="fbutton">
                                    <div><span title='Refresh view' class="showdayflash">Refresh</span></div>
                                </div>
                                <div class="btnseparator"></div>
                                <div id="sfprevbtn" title="Prev" class="fbutton">
                                    <span class="fprev"></span>
                                </div>
                                <div id="sfnextbtn" title="Next" class="fbutton">
                                    <span class="fnext"></span>
                                </div>
                                <div class="fshowdatep fbutton">
                                    <div>
                                        <input type="hidden" name="txtshow" id="hdtxtshow" />
                                        <span id="txtdatetimeshow">Loading</span>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div style="padding:1px;">
                            <div class="t1 chromeColor">&nbsp;</div>
                            <div class="t2 chromeColor">&nbsp;</div>
                            <div id="dvCalMain" class="calmain printborder">
                                <div id="gridcontainer" style="overflow-y: visible;"></div>
                            </div>
                            <div class="t2 chromeColor">&nbsp;</div>
                            <div class="t1 chromeColor">&nbsp;</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
