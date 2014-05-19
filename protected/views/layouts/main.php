<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>css/update.css">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>
<div id="wrapper">
    <header>
        <div class="container">
            <div id="logo" class="span3">
                <?php echo CHtml::encode(Yii::app()->name); ?>
            </div>
            <div id="header-menu" class="span7 offset2">
                <?php $this->widget('zii.widgets.CMenu',array(
                    'items'=>array(
                        array('label'=>'Home', 'url'=>array('/site/index')),
                        array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                        array('label'=>'Contact', 'url'=>array('/site/contact')),
                        array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                    ),
                )); ?>
            </div>
        </div>
    </header>
    <div id="content" class="container">
        <?php echo $content; ?>
    </div>
    <footer>
        <div id="footer-content-block">
            <div class="container">
                <div id="footer-left-column" class="span4">

                </div>
                <div id="footer-central-column" class="span4">

                </div>
                <div id="footer-right-column" class="span4">

                </div>
            </div>
        </div>
        <div id="footer-social-links-block">
            <div class="container">
                <div id="copy" class="span2">

                </div>
                <div id="social-link-menu" class="span8 offset2">
                    <p>Copyright &copy; <?php echo date('Y'); ?> by My Company. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>