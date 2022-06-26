<?php
/** @var $model app\models\LoginForm */

use eapdob\phpmvc\form\Form;

?>

<h1>Login</h1>
<?php $form = Form::begin('', 'post'); ?>
<?php echo $form->field($model, 'email'); ?>
<?php echo $form->field($model, 'password')->passwordField(); ?>
<button type="submit" class="btn btn-primary">Login</button>
<?php echo Form::end(); ?>