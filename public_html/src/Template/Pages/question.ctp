<div id="pageBody">
  <article>
    <div class="container-fluid none-padding">
      <div class="row none-margin">
        <div id="main" class="col-md-8 none-padding">
          <section id="question">
            <div id="questionTitle">
              <h1><?= h($question->title) ?></h1>
            </div>
            <div id="questionContent">
              <p><?php echo $question->body ?></p>
              <p id="questionDate"><?= h($question->created) ?></p>
            </div>
          </section>

          <section id="answers">
            <?php foreach ($questionArray->answers as $answer): ?>
            <div class="answer">
              <div class="answerTitle">
                <h2><?= h($answer->title) ?></h2>
              </div>
              <div class="answerContent">
                <p><?php echo $answer->body ?></p>
              </div>
            </div>
            <?php endforeach; ?>
          </section>
        </div><!-- #answers -->
        </div><!-- #main -->

        <div id="sub" class="col-md-4 none-padding">
          <aside>
          </aside>
        </div><!-- #sub -->
      </div><!-- .row -->
    </div><!-- container-fluid -->
  </article>
</div><!-- #pageBody.container -->
