<?php
require "../core/boot.php";
?>
<!DOCTYPE html>
<html lang="pt">

    <head>
        <?php
        $view->head->setTitle('Desenvolvimento de games - pipepanic');
        $view->head->setDescription('');
        $view->head->setkeywords('');
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
    </head>

    <body>

        <?php
        $view->navtop->secao_ativa = Conteudo::SECAO_JS;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>

        <div class="" style="padding: 30px 0px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#">O Jogo (a minha versão)</a>
                            </li>
                            <li>
                                <a href="#">O Rank</a>
                            </li>
                            <li>
                                <a href="#">As Regras</a>
                            </li>
                            <li>
                                <a href="#">Apresentando</a>
                            </li>
                            <li>
                                <a href="#">Desenvolvendo</a>
                            </li>
                            <li>
                                <a href="#">O Jogo (versão original)</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>


