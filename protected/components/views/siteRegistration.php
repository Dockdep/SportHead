<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Регистрация</h4>
        </div>
            <div class="form">
                <div class="modal-body">
                    <?php $form=$this->beginWidget('CActiveForm', array(
                        'id'=>'login-form',
                        'enableClientValidation'=>true,
                        'clientOptions'=>array(
                            'validateOnSubmit'=>true,
                        ),
                    )); ?>

                    <p class="note">Fields with <span class="required">*</span> are required.</p>

                    <div class="row">
                        <?php echo $form->labelEx($model,'username'); ?>
                        <?php echo $form->textField($model,'username'); ?>
                        <?php echo $form->error($model,'username'); ?>
                    </div>

                    <div class="row">
                        <?php echo $form->labelEx($model,'password'); ?>
                        <?php echo $form->passwordField($model,'password'); ?>
                        <?php echo $form->error($model,'password'); ?>
                        <p class="hint">
                            Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.
                        </p>
                    </div>

                    <div class="row rememberMe">
                        <?php echo $form->checkBox($model,'rememberMe'); ?>
                        <?php echo $form->label($model,'rememberMe'); ?>
                        <?php echo $form->error($model,'rememberMe'); ?>
                    </div>

                    <div class="row buttons">
                        <?php echo CHtml::submitButton('Login'); ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                        <button type="button" class="btn btn-primary" id="registrationFromSend">Зарегестрироваться</button>
                    </div>
                <?php $this->endWidget(); ?>
            </div><!-- form -->
        </div>
    </div>
</div>
