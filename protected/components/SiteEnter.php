<?php
class SiteEnter extends CWidget
{
    public function run()
    {
        $model = new LoginForm();
        $this->render('siteEnter', array('form'=>$model));
    }
}