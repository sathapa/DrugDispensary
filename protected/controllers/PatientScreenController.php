<?php

class PatientScreenController extends Controller {


  public $layout = '//layouts/column2';

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 
  public function actionIndex()
  {
      $this->render('index');
  }
}