<?php

    if(isset($cursos)) {
        foreach ($cursos->result() as $curso) { ?>

            <ul>
                <li>
                   <a href="<?= $curso->idCurso; ?>" > <?= $curso->nombreCurso ?></a>
                </li>
            </ul>

        <?php }
    }else {
        echo "<p>Error en la apliación </p>";
    }

?>

</body>
</html>
