
<?php echo $this->Form->create('Recurso'); ?>
<?php
echo '<div id="listaPropiedades"> ';
echo $this->Form->input('Propiedade', array('type'=>'select', 'multiple'=>'checkbox'));
echo '</div>';
?>
