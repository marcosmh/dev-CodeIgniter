<?= form_open("/cursos/actualizar/".$id) ?>

<?php
$nombre = array(
    'name'=> 'nombre',
    'placeholder'=>'Escribe tu nombre',
    'value'=>$cursos->result()[0]->nombreCurso
);

$videos = array(
    'name'=>'videos',
    'placeholder'=>'Cantidad de videos del curso',
    'value'=>$cursos->result()[0]->videoCurso
);


?>
<?= form_label('Nombre:','nombre') ?>
<?= form_input($nombre) ?>
<br/><br/>
<?= form_label('Número de Videos:','videos') ?>
<?= form_input($videos) ?>

<?= form_submit('','Editar Curso') ?>
<?= form_close() ?>
</body>
</html>