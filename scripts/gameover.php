<?php
//get final results
$total_questions = $_SESSION['game']['total_questions'];
$corrent_answers = $_SESSION['game']['correct_answers'];
$incorrent_answers = $_SESSION['game']['incorrect_answers'];

?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-6 card p-5">
            <h3 class="text-center">Jogo das Capitais</h3>
            <hr>
            <div class="p-5">
                <h3>Total de questões: <strong><?= $total_questions ?></strong></h3>
                <h3>Respostas corretas: <strong class="text-success"><?= $corrent_answers ?></strong></h3>
                <h3>Respostas incorretas: <strong class="text-danger"><?= $incorrent_answers ?></strong></h3>
            </div>
            <div class="text-center">
                <a href="http:index.php?route=start" class="btn btn-secondary p-3 w-50">Jogar novamente</a>
            </div>
        </div>
    </div>
</div>