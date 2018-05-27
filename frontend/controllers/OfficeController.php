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

    /**
     * Display profile page
     *
     * @return string
     */
    public function actionProfile()
    {
        $this->layout = 'office_main';
        $this->getView()->title = 'Profile';

        return $this->render('profile');
    }

    /**
     * Display change password page
     *
     * @return string
     */
    public function actionChange_password()
    {
        $this->layout = 'office_main';
        $this->getView()->title = 'Change Password';

        return $this->render('change_pass');
    }

}
