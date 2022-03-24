<?php
/** @var $model \app\core\base\models\User */

/** @var $this \app\core\base\controllers\View */
$this->title = 'Login';

?>

<h1>Login</h1>
<?php $form = \app\core\base\controllers\form\Form::begin('', "post") ?>

<?php echo $form->field($model, 'email')?>
<?php echo $form->field($model, 'password')->passwordField()?>

<button type="submit" class= "btn btn-primary mt-3">Submit</button>
<?php \app\core\base\controllers\form\Form::end() ?>