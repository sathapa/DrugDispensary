<?php

class ProductController extends Controller
{
	public function actionIndex()
	{
            $model1 = new Drug();
            
		$this->render('index',array("model1"=>$model1));
	}

       public function actionUsersAutocomplete() {
        $term = trim($_GET['term']) ;
 
        if($term !='') {
            // Note: Users::usersAutoComplete is the function you created in Step 2
      $users = Product::usersAutoComplete($term);
            echo CJSON::encode($users);
            Yii::app()->end();
    }
  }
  public function actionAjax(){
    $request=trim($_GET['term']);
    if($request!=''){
        $model= Product::model()->findAll(array("condition"=>"Drugname %name = $drugname '$request%'"));
        $data=array();
        
        foreach($model as $get){
            $data[]=$get->name;
        }
        $this->layout='empty';
        echo json_encode($data);
    }
}
  public function actionsearchDrugname(){
      
      $abc = $_POST['queryString'];
      die($abc);
      
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
    
        
        
        
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}