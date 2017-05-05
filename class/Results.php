<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Results
 *
 * @author denis
 */
class Results
{

    private function getTotalQuestions()
    {
        return Session::getTotalQuestions();
    }

    private function getCorrectAnswers()
    {
        return Session::getCorrectAnswers();
    }

    private function getWrongAnswers()
    {
        return self::getTotalQuestions() - self::getCorrectAnswers();
    }

    public static function getPrintResults()
    {
        $results = [
            'total' => self::getTotalQuestions(),
            'correct' => self::getCorrectAnswers(),
            'wrong' => self::getWrongAnswers()
        ];

        return $results;
    }
}
