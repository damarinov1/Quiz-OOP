<?php
ini_set("display_errors", 1);

session_start();
require "layout/header.php";

require 'class/Session.php';
require 'class/Results.php';

?>
<div class="container">
    <div class="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Your results</h4>
            </div>
            <div class="panel-body">
                Total questions: <?= Results::getPrintResults()['total'] ?> <br>
                Correct answers: <?= Results::getPrintResults()['correct'] ?><br>
                Wrong answers: <?= Results::getPrintResults()['wrong'] ?> <br>
                <a href="destroy.php"><button class="btn btn-primary">Start again</button></a>
            </div>
        </div>
    </div>
</div>
<?php require "layout/footer.php"; ?>
