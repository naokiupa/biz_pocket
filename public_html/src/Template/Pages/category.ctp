<div id="pageBody">
  <article>
    <section id="ttl_menu">
      <h1><?= h($category->name) ?></h1>
    </section><!-- #ttl_menu -->

		<div class="container-fluid none-padding">
	    <div id="leadText" class="row none-margin">
	      <div id="leadSentence" class="col-sm-8">
					<p><?= h($category->lead) ?></p>
	      </div>
	      <div id="leadSearch" class="col-4 hidden-xs-down">
	        <h2 class="ttl-bar-bold"><?= h($category->name) ?>専門の医師を探す</h2>
	        <div><p class="text-center">記事一覧</p></div>
	      </div>
	    </div>

			<div class="row none-margin">
				<div id="main" class="col-sm-4 push-sm-8 none-padding">
					<section id="categoryList">
						<h1 class="ttl-bar-bold">
				      <i class="fa fa-list-alt fa-lg" aria-hidden="true"></i>
			        カテゴリ別に探す
			      </h1>
						<div>
							<div class="borderbottom">
                <?php foreach ($category->diseases as $diseases): ?>
								<p>
									<i class="fa fa-caret-right fa-lg" aria-hidden="true"></i>
									<?= $this->Html->link(__($diseases->name), ['controller' => 'Pages', 'action' => 'disease', $diseases->id]) ?>
								</p>
                <?php endforeach; ?>
							</div>
						</div>
					</section><!-- #categoryList -->
				</div><!-- #main -->

				<div id="sub" class="col-sm-8 pull-sm-4 none-padding">
					<section id="topics">
	          <h1 class="ttl-bar-bold">
	            <i class="fa fa-newspaper-o fa-lg" aria-hidden="true"></i>
	            がんの医療ガイド
	          </h1>

            <div class="row">
							<div class="col-2">
								<div class="row">
									<div class="col-sm-6 hidden-xs-down">
										<p id="icon1" class="text-center">
											<i class="fa fa-star fa-lg" aria-hidden="true"></i>
										</p>
									</div>
									<div class="col-sm-6">
										<p class="rank">1<span class="hidden-xs-down">位</span></p>
									</div>
								</div>
							</div>
							<div class="col-10">
								<p><?= $this->Html->link($category->news[0]->title, ['controller' => 'Pages', 'action' => 'news', $category->news[0]->id]) ?></p>
							</div>
						</div>

            <div class="row">
							<div class="col-2">
								<div class="row">
									<div class="col-sm-6 hidden-xs-down">
										<p id="icon2" class="text-center">
											<i class="fa fa-star fa-lg" aria-hidden="true"></i>
										</p>
									</div>
									<div class="col-sm-6">
                    <p class="rank">2<span class="hidden-xs-down">位</span></p>
									</div>
								</div>
							</div>
							<div class="col-10">
                <p><?= $this->Html->link($category->news[1]->title, ['controller' => 'Pages', 'action' => 'news', $category->news[1]->id]) ?></p>
							</div>
						</div>

						<div class="row">
							<div class="col-2">
								<div class="row">
									<div class="col-sm-6 hidden-xs-down">
										<p id="icon3" class="text-center">
											<i class="fa fa-star fa-lg" aria-hidden="true"></i>
										</p>
									</div>
									<div class="col-sm-6">
                    <p class="rank">3<span class="hidden-xs-down">位</span></p>
									</div>
								</div>
							</div>
							<div class="col-10">
                <p><?= $this->Html->link($category->news[2]->title, ['controller' => 'Pages', 'action' => 'news', $category->news[2]->id]) ?></p>
							</div>
						</div>

            <?php
            for ($i = 0; $i < 8; $i++):
              if ($i < 3): continue;
              else:
            ?>
						<div class="row">
							<div class="col-2">
								<div class="row">
									<div class="col-sm-6 hidden-xs-down">
									</div>
									<div class="col-sm-6">
                    <p class="rank"><?= h($i + 1) ?><span class="hidden-xs-down">位</span></p>
									</div>
								</div>
							</div>
							<div class="col-10">
                <p><?= $this->Html->link($category->news[$i]->title, ['controller' => 'Pages', 'action' => 'news', $category->news[$i]->id]) ?></p>
							</div>
						</div>
            <?php
              endif;
            endfor;
            ?>
	        </section><!-- #topics -->

	        <section id="bbs">
	          <h1 class="ttl-bar-bold">
	            <i class="fa fa-quora fa-lg" aria-hidden="true"></i>
	            がんの医療相談
	          </h1>

            <div class="row">
							<div class="col-2">
								<div class="row">
									<div class="col-sm-6 hidden-xs-down">
										<p id="icon1" class="text-center">
											<i class="fa fa-star fa-lg" aria-hidden="true"></i>
										</p>
									</div>
									<div class="col-sm-6">
										<p class="rank">1<span class="hidden-xs-down">位</span></p>
									</div>
								</div>
							</div>
							<div class="col-10">
								<p><?= $this->Html->link($category->questions[0]->title, ['controller' => 'Pages', 'action' => 'question', $category->questions[0]->id]) ?></p>
							</div>
						</div>

            <div class="row">
							<div class="col-2">
								<div class="row">
									<div class="col-sm-6 hidden-xs-down">
										<p id="icon2" class="text-center">
											<i class="fa fa-star fa-lg" aria-hidden="true"></i>
										</p>
									</div>
									<div class="col-sm-6">
                    <p class="rank">2<span class="hidden-xs-down">位</span></p>
									</div>
								</div>
							</div>
							<div class="col-10">
                <p><?= $this->Html->link($category->questions[1]->title, ['controller' => 'Pages', 'action' => 'question', $category->questions[1]->id]) ?></p>
							</div>
						</div>

						<div class="row">
							<div class="col-2">
								<div class="row">
									<div class="col-sm-6 hidden-xs-down">
										<p id="icon3" class="text-center">
											<i class="fa fa-star fa-lg" aria-hidden="true"></i>
										</p>
									</div>
									<div class="col-sm-6">
                    <p class="rank">3<span class="hidden-xs-down">位</span></p>
									</div>
								</div>
							</div>
							<div class="col-10">
                <p><?= $this->Html->link($category->questions[2]->title, ['controller' => 'Pages', 'action' => 'question', $category->questions[2]->id]) ?></p>
							</div>
						</div>

            <?php
            for ($i = 0; $i < 8; $i++):
              if ($i < 3): continue;
              else:
            ?>
						<div class="row">
							<div class="col-2">
								<div class="row">
									<div class="col-sm-6 hidden-xs-down">
									</div>
									<div class="col-sm-6">
                    <p class="rank"><?= h($i + 1) ?><span class="hidden-xs-down">位</span></p>
									</div>
								</div>
							</div>
							<div class="col-10">
                <p><?= $this->Html->link($category->questions[$i]->title, ['controller' => 'Pages', 'action' => 'question', $category->questions[$i]->id]) ?></p>
							</div>
						</div>
            <?php
              endif;
            endfor;
            ?>
	        </section><!-- #bbs -->
				</div><!-- #sub -->
			</div><!-- .row -->
		</div><!-- .container -->
  </article>
</div><!-- #pageBody -->
