<div class="container col-xs-12 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
    <div class="row">
        <div class="content ">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#quiz">Quiz</a></li>
                <li><a data-toggle="tab" href="#settings">Settings</a></li>
            </ul>
            <div class="tab-content">
                <div id="quiz" class="tab-pane fade in active">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php if ($_SESSION[Session::answeredQuestionsCount_key] > 0): ?>
                            <p>Answer to the previous question was <?= AnswerCheck::printPreviousAnswer($isCorrect, Quiz::getPreviousCorrectAnswer()->getTitle()); ?></p>
                            <?php endif; ?>
                            <h4>Who said it?</h4>
                        </div>
                        <div class="panel-body">
                            <div class="question-box">
                                "<?= $currentQuestion->getTitle() ?>"
                            </div>
                            <div class="answer-box">
                                <?= $randAnswer->getTitle() ?>
                                <form action="" method="POST">
                                    <input type="hidden" name="question" value="<?= $currentQuestion->getId() ?>" />
                                    <input type="hidden" name="answer" value="<?= $randAnswer->getId() ?>" />

                                    <button class="tf-btn btn btn-success" type="submit" name="answer_input" value="yes">Yes</button>
                                    <button class="tf-btn btn btn-danger" type="submit" name="answer_input" value="no">No</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include "layout/settings.php"; ?>
            </div>
        </div>
    </div>
</div>