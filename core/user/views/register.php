<?php
/** @var $model \app\core\base\models\User */

/** @var $this \app\core\base\controllers\View */
$this->title = 'Register';

?>
<h1>Create an account</h1>
<?php $form = \app\core\base\controllers\form\Form::begin('', "post") ?>
    <div class="row">
        <div class="col">
            <?php echo $form->field($model, 'firstname')?>
        </div>
        <div class="col">
            <?php echo $form->field($model, 'lastname')?>
        </div>
    </div>
    <?php echo $form->field($model, 'email')?>
    <?php echo $form->field($model, 'password')->passwordField()?>
    <?php echo $form->field($model, 'passwordConfirm')->passwordField()?>

    <button type="submit" class= "btn btn-primary mt-3">Submit</button>
<?php \app\core\base\controllers\form\Form::end() ?>





