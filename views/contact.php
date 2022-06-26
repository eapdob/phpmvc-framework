<?php

/* @var $this eapdob\phpmvc\View */
/* @var $model app\models\ContactForm */

use eapdob\phpmvc\form\Form;
use eapdob\phpmvc\form\TextareaField;

$this->title = 'Contact';

?>

<h1>Contact Us</h1>

<?php $form = Form::begin('', 'post'); ?>
<?php echo $form->field($model, 'subject'); ?>
<?php echo $form->field($model, 'email'); ?>
<?php echo new TextareaField($model, 'body'); ?>
<button type="submit" class="btn btn-primary">Submit</button>
<?php echo \eapdob\phpmvc\form\Form::end(); ?>