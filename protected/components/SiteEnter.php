<?php
/**
 * Created by PhpStorm.
 * User: Vitaliy
 * Date: 20.05.14
 * Time: 17:16
 */
class SiteEnter extends CWidget
{
    public function run()
    {
        $model = new LoginForm();
        $this->render('siteEnter', array('form'=>$model));
    }
}