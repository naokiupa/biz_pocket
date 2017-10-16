<div id="pageBody">
  <article>
    <div class="container-fluid none-padding">
      <section id="category">
        <h1 class="ttl-bar-bold hidden-sm-up text-center"><?= h($disease->name) ?></h1>
          <div class="row none-margin">
            <div class="col-md-3">
              <?php echo $this->Html->image('lung_1.jpg', array('class' => 'img-fluid')); ?>
            </div>
            <div class="col-md-9 none-padding">
              <h1 class="hidden-xs-down"><?= h($disease->name) ?></h1>
              <p><?= h($disease->lead) ?></p>
            </div>
         </div><!-- .row -->
       </section><!-- #category -->

       <div class="row none-margin">
         <div id="main" class="col-md-8 none-padding">
           <section id="guide">
             <h1 class="ttl-bar-bold">
               <i class="fa fa-book fa-lg" aria-hidden="true"></i>
               <?= h($disease->name) ?>の医療ガイド
             </h1>
             <?php for ($i = 0; $i < 2; $i++): ?>
             <div class="row none-margin">
               <div id="guideImg" class="col-3 col-sm-2">
                 <?php echo $this->Html->image('tabacco.jpg', array('class' => 'img-fluid')); ?>
               </div>
               <div class="col-9 col-sm-10">
                 <h2><?= $this->Html->link(__($disease->news[$i]->title), ['controller' => 'Pages', 'action' => 'news', $disease->news[$i]->id]) ?></h2>
                 <p class="omit">
                   <?php
                   $text = $disease->news[$i]->body;
                   $count = mb_strlen($text, 'UTF-8');
                   $limit = 150;
                   if ($count > $limit) {
                     $showText = mb_strimwidth($text, 0, $limit, '…', 'UTF-8');
                     echo $showText;
                   } else {
                     echo $text;
                   }
                   ?>
                 </p>
               </div>
             </div><!-- .row -->
             <?php endfor; ?>
           </section><!-- #guide -->

           <section id="bbsList">
             <h1 class="ttl-bar-bold">
               <i class="fa fa-quora fa-lg" aria-hidden="true"></i>
               <?= h($disease->name) ?>の医療相談
             </h1>
             <?php foreach ($disease->questions as $question): ?>
             <div class="bbsArticle row">
               <div class="col-md-1 hand hidden-sm-down">
                 <i class="fa fa-hand-paper-o mx-auto" aria-hidden="true"></i>
               </div>
               <div class="col-md-11">
                 <h2>
                   <?= $this->Html->link(__($question->title), ['controller' => 'Pages', 'action' => 'question', $question->id]) ?>
                 </h2>
                 <p>
                   <?php echo $question->body ?>
                 </p>
               </div>
             </div>
            <?php endforeach; ?>
          </section><!-- #bbsList -->
        </div><!-- #main -->

        <div id="sub" class="col-md-4 none-padding">
          <section id="categoryList">
            <h1 class="ttl-bar-bold">
              <i class="fa fa-list-alt fa-lg" aria-hidden="true"></i>
              病名から探す
            </h1>
            <div>
              <?php foreach ($category[$disease->category_id - 1]->diseases as $disease): ?>
              <div class="borderbottom">
                <p>
                  <i class="fa fa-caret-right fa-lg" aria-hidden="true"></i>
                  <?= $this->Html->link($disease->name, ['controller' => 'Pages', 'action' => 'disease', $disease->id]) ?>
                </p>
              </div>
              <?php endforeach; ?>
            </div>
          </section><!-- #categoryList -->
        </div><!-- #sub -->
      </div><!-- .row -->
    </div><!-- container-fluid -->
  </article>
</div><!-- #pageBody -->
