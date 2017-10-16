<div id="pageBody">
  <article>
    <div class="container-fluid none-padding">
      <div class="row none-margin">
        <div id="main" class="col-md-8 none-padding">
          <section id="news">
            <div id="newsDate"><p><?= h($news->created) ?></div>
            <div>
              <?php echo $this->Html->image('sei-byou02.jpg', array('class' => 'img-fluid')); ?>
            </div>
            <div id="newsTitle">
              <h1><?= h($news->title) ?></h1>
            </div>
            <div id="newsContent">
              <?php echo $news->body ?>
              <div id="newsdoctorcom">
                <p><?= $this->Html->link(__('医者ドットコム'), ['controller' => 'Pages', 'action' => 'display']) ?></p>
              </div>
              </p>
            </div>
          </section><!-- #news -->
        </div><!-- #main -->

        <div id="sub" class="col-md-4 none-padding">
          <aside>
          </aside>
        </div><!-- #sub -->
      </div><!-- .row -->
    </div><!-- container-fluid -->
  </article>
</div><!-- #pageBody -->
