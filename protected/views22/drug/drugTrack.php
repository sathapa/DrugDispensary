<?php
 
    $this->widget(
        'bootstrap.widgets.TbTabs',
     array(
            'type' => 'tabs', // 'tabs' or 'pills'
            'tabs' => array(
                       array('label' => 'Day 1', 'content' =>$this->renderPartial('dailySchedule',array('model'=>$model,'pid'=>$_GET['aid']),true), 'active'=>true ),
                array('label' => 'Day 2', 'content' => $this->renderPartial('dailySchedule',array('model'=>$model,'pid'=>$_GET['aid']),true)),
                            array('label' => 'Day 3', 'content' => $this->renderPartial('dailySchedule',array('model'=>$model,'pid'=>$_GET['aid']),true)),
                array('label' => 'Day 4', 'content' => $this->renderPartial('dailySchedule',array('model'=>$model,'pid'=>$_GET['aid']),true)),
                array('label' => 'Day 5', 'content' => $this->renderPartial('dailySchedule',array('model'=>$model,'pid'=>$_GET['aid']),true)),
                array('label' => 'Day 6', 'content' => $this->renderPartial('dailySchedule',array('model'=>$model,'pid'=>$_GET['aid']),true)),
                array('label' => 'Day 7', 'content' => $this->renderPartial('dailySchedule',array('model'=>$model,'pid'=>$_GET['aid']),true)),

                ),
        )
    );
?>
