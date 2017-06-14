<?php

class DrugController extends Controller
{
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout='//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(
            array('allow',  // allow all users to perform 'index' and 'view' actions
                'actions'=>array('index','view','PatientDrugRecord','ReportFilter2','Day','Perdrugreport','AutoComplete','Drugreport','AutoComplete1','drugTrack','testing'),
                'users'=>array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions'=>array('create1','create','update','ReportFilter','testing','ListPatient'),
                'users'=>array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions'=>array('admin','delete'),
                'users'=>array('admin'),
            ),
            array('deny',  // deny all users
                'users'=>array('*'),
            ),

        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id)
    {
        $this->render('view',array(
            'model'=>$this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $model=new Drug;
        $model1 = new Product;
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Drug']))
        {
            $model->attributes=$_POST['Drug'];

            if(isset($_POST['assign'])){
                $model->save();
                $this->redirect(array('Drug/Create'));
            }

            if($model->save())
                $this->redirect(array('view','id'=>$model->drugId));
        }

        $this->render('create',array(
            'model'=>$model,'model1'=>$model1,
        ));
    }

    public function actionAssignDrugs()
    {
        $model=new Drug;
        $model1 = new Product;
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Drug']))
        {
            $model->attributes=$_POST['Drug'];
            if($model->save())
                $this->redirect(array(Drug/Create));
        }

        $this->render('create',array(
            'model'=>$model,'model1'=>$model1,
        ));
    }




    public function actionCreate1()
    {
        $model=new Drug;
        $model1 = new Product;
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Drug']))
        {
            $model->attributes=$_POST['Drug'];
            if($model->save())
                $this->redirect(array('view','id'=>$model->drugId));
        }

        $this->render('create1',array(
            'model'=>$model,'model1'=>$model1,
        ));
    }



    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id)
    {
        $model=$this->loadModel($id);


        if(isset($_POST['Drug']))
        {
            $model->attributes=$_POST['Drug'];
            if($model->save())
                $this->redirect(array('view','id'=>$model->drugId));
        }

        $this->render('update',array(
            'model'=>$model,
        ));
    }


    public function actionDelete($id)
    {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if(!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        $dataProvider=new CActiveDataProvider('Drug');
        $this->render('index',array(
            'dataProvider'=>$dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $model=new Drug('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['Drug']))
            $model->attributes=$_GET['Drug'];

        $this->render('admin',array(
            'model'=>$model,
        ));
    }

    public function displayProductName(){
        $model = Product::model()->search();
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;

    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Drug the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model=Drug::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='drug-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionAutoComplete()
    {
        $res = array();
        if (isset($_GET['term']))
        {
            $qry = "SELECT Drugname from product WHERE Drugname LIKE :icd10no";
//                $qry .= 'ORDER BY icd10no ASC';
            $data = Yii::app()->db->createCommand($qry);
            $qterm = $_GET['term'].'%';
            $data->bindValue(":icd10no", $qterm, PDO::PARAM_STR);
            $res = $data->queryColumn();
        }
        echo CJSON::encode($res);
        Yii::app()->end();
    }

    public function actionListPatient()
    {
        $model=new Drug('distinctPatient');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['Drug']))
            $model->attributes=$_GET['Drug'];

        $this->render('listPatient',array(
            'model'=>$model,
        ));
    }

//          public function actionAutoComplete1()
//        {
//            $res = array();
//            if (isset($_GET['term']))
//            {
//                $qry = "SELECT firstname from patient WHERE Drugname LIKE :icd10no";
////                $qry .= 'ORDER BY icd10no ASC';
//                $data = Yii::app()->db->createCommand($qry);
//                $qterm = $_GET['term'].'%';
//                $data->bindValue(":icd10no", $qterm, PDO::PARAM_STR);
//                $res = $data->queryColumn();
//            }
//            echo CJSON::encode($res);
//            Yii::app()->end();
//        }

    public function actiondrugTrack(){
        $model = new Drug;
        $model1 = new Drugschedule;
        $this->render('drugTrack',array('model'=>$model,'model1'=>$model1));

    }

    public function actionReportFilter(){

        $model= new Drug();
        $pid = $_POST['pid'];

        if(isset($_POST['submit'])){
            $Day = $_POST['days'];



            $filter = $model->filter($Day,$pid);
           // $this->render('cashBook',array('cashBooks'=>$ph,'fromDate'=>$fromDate,'toDate'=>$toDate));

            $this->render('reportFilter',array('filter'=>$filter,'Day'=>$Day,'pid'=>$pid));
        }



    }


    public function actionReportFilter2(){

        $model= new Drug();
        $pid = $_POST['pid'];

        if(isset($_POST['submit'])){
          //  $Day = $_POST['days'];
            $DrugName = $_POST['drugs'];



            $filter = $model->filter2($pid,$DrugName);
            // $this->render('cashBook',array('cashBooks'=>$ph,'fromDate'=>$fromDate,'toDate'=>$toDate));

            $this->render('reportFilter2',array('filter'=>$filter,'pid'=>$pid,'DrugName'=>$DrugName));
        }



    }




    public function actionPatientDrugRecord(){
        //$model= new Drugschedule();




        if(isset($_POST['submit'])){
            $drugNo =$_POST['drugNo'];
            for($i=0; $i<$drugNo; $i++){

                $wake = $_POST['wake'.$i];
                $break = $_POST['breakf'.$i];
                $morning = $_POST['mor'.$i];
                $midmorning = $_POST['midM'.$i];
                $midday = $_POST['midd'.$i];
                $lunch = $_POST['lun'.$i];
                $midafternoon = $_POST['midA'.$i];
                $evening = $_POST['eve'.$i];
                $dinner = $_POST['din'.$i];
                $bedtime = $_POST['bed'.$i];

                $model= new Drugschedule();
                $model->pid=$_POST['pid'];


                $model->TotalDay=$_POST["days"];
                $model->RecentDay=$_POST["day"];

                $model->DrugName=$_POST["drug".$i];
                $model->DosePerDay=$_POST["dose"];

                if($wake!=0){

                    if(isset($_POST['wakeup'.$i]))
                    {   $model->wakeup=1; }
                    else
                    {   $model->wakeup=2; }
                }
                else {       $model->wakeup=0; }

                if($break!=0){

                    if(isset($_POST['breakfast'.$i]))
                        $model->breakfast=1;
                    else
                        $model->breakfast=2;
                }
                else {       $model->breakfast=0; }

                if($morning!=0){

                    if(!isset($_POST['morning'.$i]))
                        $model->morning=2;
                    else
                        $model->morning=1;
                }
                else {       $model->morning=0; }




//                if($morning!=0){
//
//                    if(isset($_POST['morning'.$i]))
//                        $model->morning=1;
//                    else
//                        $model->morning=2;
//                }
//                else {       $model->morning=0; }

                if($midmorning!=0){

                    if(isset($_POST['midmorning'.$i]))
                        $model->midmorning=1;
                    else
                        $model->midmorning=2;
                }
                else {       $model->midmorning=0; }

                if($midday!=0){

                    if(isset($_POST['midday'.$i]))
                        $model->midday=1;
                    else
                        $model->midday=2;
                }
                else {       $model->midday=0; }

                if($lunch!=0){

                    if(isset($_POST['lunch'.$i]))
                        $model->lunch=1;
                    else
                        $model->lunch=2;
                }
                else {       $model->lunch=0; }

                if($midafternoon!=0){

                    if(isset($_POST['midafternoon'.$i]))
                        $model->midafternoon=1;
                    else
                        $model->midafternoon=2;
                }
                else {       $model->midafternoon=0; }

                if($evening!=0){

                    if(isset($_POST['evening'.$i]))
                        $model->evening=1;
                    else
                        $model->evening=2;
                }
                else {       $model->evening=0; }

                if($dinner!=0){

                    if(isset($_POST['dinner'.$i]))
                        $model->dinner=1;
                    else
                        $model->dinner=2;
                }
                else {       $model->dinner=0; }

                if($bedtime!=0){

                    if(isset($_POST['bedtime'.$i]))
                        $model->bedtime=1;
                    else
                        $model->bedtime=2;
                }
                else {       $model->bedtime=0; }

//
//                if(isset($_POST['breakfast'.$i]))
//                    $model->breakfast=1;
//                elseif(isset($_POST['breakfast'.$i])==FALSE)
//                    $model->breakfast=2;
//                else
//                    $model->breakfast=0;
//                if(isset($_POST['morning'.$i]))
//                    $model->morning=1;
//                elseif(isset($_POST['breakfast'.$i])==FALSE)
//                    $model->breakfast=2;
//                else
//                    $model->morning=0;
//                if(isset($_POST['midmorning'.$i]))
//                    $model->midmorning=1;
//                elseif(isset($_POST['midmorning'.$i])==FALSE)
//                    $model->midmorning=2;
//                else
//                    $model->midmorning=0;
//                if(isset($_POST['midday'.$i]))
//                    $model->midday=1;
//                elseif(isset($_POST['midday'.$i])==FALSE)
//                    $model->midday=2;
//                else
//                    $model->midday=0;
//                if(isset($_POST['lunch'.$i]))
//                    $model->lunch=1;
//                elseif(isset($_POST['lunch'.$i])==FALSE)
//                    $model->lunch=2;
//                else
//                    $model->lunch=0;
//                if(isset($_POST['midafternoon'.$i]))
//                    $model->midafternoon=1;
//                elseif(isset($_POST['midafternoon'.$i])==FALSE)
//                    $model->midafternoon=2;
//                else
//                    $model->midafternoon=0;
//                if(isset($_POST['evening'.$i]))
//                    $model->evening=1;
//                elseif(isset($_POST['evening'.$i])==FALSE)
//                    $model->evening=2;
//                else
//                    $model->evening=0;
//                if(isset($_POST['dinner'.$i]))
//                    $model->dinner=1;
//                elseif(isset($_POST['dinner'.$i])==FALSE)
//                    $model->dinner=2;
//                else
//                    $model->dinner=0;
//                if(isset($_POST['bedtime'.$i]))
//                    $model->bedtime=1;
//                elseif(isset($_POST['bedtime'.$i])==FALSE)
//                    $model->bedtime=2;
//                else
//                    $model->bedtime=0;
              $model->save();

                //$model->save();
            }

            $this->redirect(array('Drug/drugTrack','aid'=>$_POST['pid']));
        }
    }
    public function actionDay($pid,$day){
        $model=new Drug();

        $this->render('dailySchedule',array('model'=>$model,'pid'=>$pid,'day'=>$day));
    }
    //for drug report view patient
    public function actionDrugreport()
    {
        $model=new Drug('distinctPatient');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['Drug']))
            $model->attributes=$_GET['Drug'];

        $this->render('drugreport',array(
            'model'=>$model,
        ));
        //$this->render('drugreport');
    }
    // for personal drug report
    public function actionPerdrugreport()
    {
        $id= $_GET['aid'];
        $model=  Drugschedule::model()->findAllByAttributes(array('pid'=>$id));
        $this->render('patientdrugreport',array('model'=>$model,'pid'=>$id));

    }




}
