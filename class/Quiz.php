<?php

class Quiz
{

    public static function getQuestion()
    {
        $excluded = Session::getExcluded();

        $randomQuestion = QuestionRepository::getInstance()->findRandom($excluded);

        if ($randomQuestion instanceof Question) {
            Session::addToExluded($randomQuestion->getId());
        } else {
            Session::resetExcluded();
        }

        return $randomQuestion;
    }

    public static function getRandomAnswer()
    {
        if ($_SESSION[Session::mode] == 'tf') {
            $randomAnswer = AnswerRepository::getInstance()->findRandom();

            return $randomAnswer;
        } else if ($_SESSION[Session::mode] == 'mc') {

            $currentQuestionId = end(Session::getExcluded());
            $correctAnswerId = QuestionRepository::getInstance()->find($currentQuestionId);
            $correctAnswer = AnswerRepository::getInstance()->find($correctAnswerId->getAnswerId());

            $randomAnswer1 = AnswerRepository::getInstance()->findRandom();

            if ($randomAnswer1->getId() == $correctAnswerId->getAnswerId()) {
                $randomAnswer1 = AnswerRepository::getInstance()->findRandom();
            }

            do {
                $randomAnswer2 = AnswerRepository::getInstance()->findRandom();
            } while ($randomAnswer1->getId() == $randomAnswer2->getId() ||
            $randomAnswer2->getId() == $correctAnswerId->getAnswerId());

            $answerList = [$randomAnswer1, $randomAnswer2, $correctAnswer];
            shuffle($answerList);

            return $answerList;
        }
    }

    public static function getPreviousCorrectAnswer()
    {
        $exluded = Session::getExcluded();

        if (!empty($exluded) && count($exluded) > 1) {
            end($exluded);
            $prevQuestionId = prev($exluded);
            $questionObj = QuestionRepository::getInstance()->find($prevQuestionId);
            $previousAnswer = AnswerRepository::getInstance()->find($questionObj->getAnswerId());

            return $previousAnswer;
        }
    }

    public static function changeMode($mode)
    {
        if ($mode == 'mc') {
            $_SESSION[Session::mode] = 'mc';

            if ($_SESSION[Session::answeredQuestionsCount_key] > 0) {
                Session::resetExcluded();
                Session::resetSession();
            }
        } else if ($mode == 'tf') {
            $_SESSION[Session::mode] = 'tf';

            if ($_SESSION[Session::answeredQuestionsCount_key] > 0) {
                Session::resetExcluded();
                Session::resetSession();
            }
        }
    }

    public static function getResults()
    {
        if (Session::isFinished()) {
            header("Location: results.php");
        }
    }
}
