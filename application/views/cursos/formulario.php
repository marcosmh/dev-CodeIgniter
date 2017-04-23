<?= form_open("/cursos/recibirdatos") ?>

<?php
    $nombre = array(
      'name'=> 'nombre',
      'placeholder'=>'Escribe tu nombre'
    );

    $videos = array(
      'name'=>'videos',
        'placeholder'=>'Cantidad de videos del curso'
    );


?>
<?= form_label('Nombre:','nombre') ?>
<?= form_input($nombre) ?>
<br/><br/>
<?= form_label('Número de Videos:','videos') ?>
<?= form_input($videos) ?>

<?= form_submit('','Subir Curso') ?>
<?= form_close() ?>
</body>
</html>