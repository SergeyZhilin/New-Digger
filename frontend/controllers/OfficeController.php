<?php
namespace frontend\controllers;

use yii\web\Controller;

/**
 * Office controller
 */
class OfficeController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $this->layout = 'office_main';
        $this->getView()->title = 'Personal Area';

        return $this->render('main');
    }


}
