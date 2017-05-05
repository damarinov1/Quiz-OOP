<?php

class AnswerCheck
{

    public static function answerCheckTf($correctAnsIndex, $answer, $answer_input)
    {
        $isCorrect = false;

        if ($correctAnsIndex == $answer) {
            if ($answer_input == 'yes') {
                Session::incrementCorrectQuestions();
                $isCorrect = true;
            }
        }
        if ($correctAnsIndex != $answer) {
            if ($answer_input == 'no') {
                Session::incrementCorrectQuestions();
                $isCorrect = true;
            }
        }

        Session::incrementAnsweredQuestions();
        return $isCorrect;
    }

    public static function answerCheckMc($correctAnsIndex, $answer)
    {
        $isCorrect = false;

        if ($correctAnsIndex == $answer) {
            Session::incrementCorrectQuestions();
            $isCorrect = true;
        }

        Session::incrementAnsweredQuestions();
        return $isCorrect;
    }

    public static function printPreviousAnswer($isTrue, $previousAnswer)
    {
        $color = "red";

        if ($isTrue) {
            $color = "green";
        }

        return "<strong><span style='color: {$color}'>" . $previousAnswer . "</span></strong>";
    }

    public static function isAnsweredQuestion()
    {
        return $_SESSION[Session::answeredQuestionsCount_key] > 0 ? 1 : 0;
    }
}
