<?php
ini_set("display_errors", 1);

session_start();

require "layout/header.php";

require 'autoload.php';

if (!isset($_SESSION[Session::isStarted_key])) {
    Session::init();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['mode'])) {
        Quiz::changeMode($_POST['mode']);
    }
}

$currentQuestion = Quiz::getQuestion();
$randAnswer = Quiz::getRandomAnswer();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['answer_mc'])) {
        $isCorrect = AnswerCheck::answerCheckMc(Quiz::getPreviousCorrectAnswer()->getId(), $_POST['answer_mc']);
    }
    if (isset($_POST['answer'])) {
        $isCorrect = AnswerCheck::answerCheckTf(Quiz::getPreviousCorrectAnswer()->getId(), $_POST['answer'], $_POST['answer_input']);
    }
}

if (Session::isFinished()) {
    Quiz::getResults();
}

if ($_SESSION[Session::mode] == 'tf') {
    require "layout/singleMode.php";
} else if ($_SESSION[Session::mode] == 'mc') {
    require "layout/multipleMode.php";
}

require 'layout/footer.php';
