<?php
/**
 * Created by PhpStorm.
 * User: Vitaliy
 * Date: 20.05.14
 * Time: 17:16
 */
class SiteRegistration extends CWidget
{
    public function run()
    {
        $model = new LoginForm();
        $this->render('siteRegistration', array('model'=>$model));
    }
}