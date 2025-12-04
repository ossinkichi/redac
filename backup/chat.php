<?php

    include('./layouts/header-perfil.php');

    ?>

        <style>
            section{
                border: 1px solid;
            }

            .mens{
                width: 400px;
                height: 230px;
            }
        </style>

        <section class="chat">
            <form method="post" class="enviar">
                <textarea name="mens" id="" cols="50" rows="15">Digite sua mensagem</textarea>
                <button type="submit"><img src="./assets/icons/send.png" alt="seta para enviar"></button>
            </form>
        </section>
    <?php

    include('./layouts/footer.php');