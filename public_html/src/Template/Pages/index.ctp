<div id="pageBody">
  <?php use Cake\Core\Configure; ?>
  <article>
		<section id="info-text" class="hidden-xs-down">
			<p class="bold"><strong>「医者ドットコム」は日本最大級の医療相談ポータルサービスです。</strong></p>
			<p>「医者ドットコム」は、医師に無料で医療相談できる「<a href="#.html">みんなの医療相談</a>」や、地域や分野などから医師や病院を探せる「<a href="#.html">医師検索</a>」など、<strong>健康に関する疑問の解決をサポートするコンテンツを多数ご用意しています。</strong>→詳しくは「<a href="#.html">はじめての方へ</a>」をご覧ください。</p>
		</section>

		<div class="container-fluid none-padding">
	    <div class="row none-margin">
	      <div id="main" class="col-sm-8 none-padding">
					<section id="search">
						<h1 class="hidden-sm-up">
							<i class="fa fa-user-md fa-lg" aria-hidden="true"></i>
							医師を探す
						</h1>
		        <div id="searchSubject" class="row">
							<div class="col-sm-5 hidden-xs-down">
								<div id="searchDoctor" class="bg-white">
									<h1>
										<i class="fa fa-user-md fa-lg" aria-hidden="true"></i>
										医師を探す
									</h1>
								</div>
							</div>
							<div class="col-sm-7 hidden-xs-down">
								<div id="searchHospital" class="bg-white">
									<h1 class="text-center">
										<i class="fa fa-newspaper-o fa-lg" aria-hidden="true"></i>
										医療Q&amp;Aを探す
									</h1>
								</div>
							</div>
						</div>
						<div id="searchBox" class="row hidden-xs-down">
							<div class="col-5 col-lg-4">
              <?php
              echo $this->Form->input('seloctors',array(
                'class' => 'form-control',
                'type' => 'select',
                'options' => Configure::read('Pref.codes'),
                'label' => false,
              ));
              ?>
							</div>
							<div class="col-7 col-lg-6">
								<select class="form-control">
                  <?php foreach ($departments as $department): ?>
									<option><?= h($department->name) ?></option>
                  <?php endforeach; ?>
								</select>
							</div>
							<div id="search-btn" class="col-lg-2">
								<p class="text-center"><a href="#.html" class="btn btn-info">検索</a></p>
							</div>
						</div>

						<form id="searchForm" class="hidden-sm-up">
							<div class="form-group">
								<input type="医師を探す" class="form-control" placeholder="医師名、病院名など">
							</div>
						</form>
						<p class="text-center hidden-sm-up"><a href="#.html" class="btn btn-info">検索</a></p>
					</section>

	        <section id="estimate">
						<h1 class="ttl-bar-bold hidden-sm-up">
							<i class="fa fa-jpy fa-lg" aria-hidden="true"></i>
							見積もり依頼
						</h1>
						<div class="row none-margin">
							<div id="estimatePR" class="col-lg-7">
			          <h2>おすすめ病院を<br class="hidden-md-up">「まとめて検索」</h2>
			          <p>症状と対処方針を考慮して選べます</p>
							</div>
							<div id="estimate-btn" class="col-lg-5">
								<p class="text-center"><a href="#.html" class="btn btn-info">病院検索</a></p>
							</div>
						</div>
	        </section>

	        <section id="onayami">
						<h1 class="ttl-bar-bold hidden-sm-up">
							<i class="fa fa-list-ul fa-lg" aria-hidden="true"></i></i>
		           病名から探す
		        </h1>

	          <div class="row">
              <?php foreach ($categories as $category): ?>
	            <div class="col-sm-4 hidden-xs-down">
								<div id="onayamiElement">
		              <h2><?= $this->Html->link($category->name, ['controller' => 'Pages', 'action' => 'category', $category->id]) ?></h2>
									<div class="row">
										<div class="col-4">
											<img>
										</div>
										<div class="col-8">
											<ul>
                        <?php for ($i = 0; $i < 3; $i++): ?>
												<li><?= $this->Html->link($category->diseases[$i]->name, ['controller' => 'Pages', 'action' => 'disease', $category->diseases[$i]->id]) ?></li>
                      <?php endfor; ?>
                    </ul>
										</div>
									</div>
								</div>
							</div>
              <?php endforeach; ?>
						</div><!-- .row -->

            <?php
            $count = count($categories);
            for ($i = 0; $i < $count; $i += 2):
            ?>
            <div class="row">
							<div class="onayami_xs-l col-6 hidden-sm-up">
								<div id="onayamiElement">
		              <h2 class="text-center"><?= $this->Html->link($categories[$i]->name, ['controller' => 'Pages', 'action' => 'category', $categories[$i]->id]) ?></h2>
								</div>
							</div>
              <?php
              if ($i >= $count - 1) {
                break;
              }
              ?>
							<div class="onayami_xs-r col-6 hidden-sm-up">
								<div id="onayamiElement">
			          	<h2 class="text-center"><?= $this->Html->link($categories[$i + 1]->name, ['controller' => 'Pages', 'action' => 'category', $categories[$i + 1]->id]) ?></h2>
								</div>
							</div>
						</div><!-- .row -->
            <?php endfor; ?>
	        </section><!-- #onayami -->

	        <aside id="ad_1" class="hidden-xs-down">
	          <p class="text-center">広告</p>
	        </aside>

	        <section id="area" class="hidden-sm-down">
	          <h1 class="ttl-bar-bold">
	            <i class="fa fa-user-md fa-lg" aria-hidden="true"></i>
	            医師を都道府県から探す
	          </h1>
	          <div class="row">
	            <div class="col-8 offset-2">
	              <?php echo $this->Html->image('japancraftmap.gif', array('class' => 'img-fluid')); ?>
	            </div>
	          </div>
	        </section>

	        <section id="topics">
	          <h1 class="ttl-bar-bold">
	            <i class="fa fa-newspaper-o fa-lg" aria-hidden="true"></i>
	            医者ドットコムニュース
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
										<p class="rank"><?= $this->Number->format($news[0]->id) ?><span class="hidden-xs-down">位</span></p>
									</div>
								</div>
							</div>
							<div class="col-10">
								<p><?= $this->Html->link($news[0]->title, ['controller' => 'Pages', 'action' => 'news', $news[0]->id]) ?></p>
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
										<p class="rank"><?= $this->Number->format($news[1]->id) ?><span class="hidden-xs-down">位</span></p>
									</div>
								</div>
							</div>
							<div class="col-10">
								<p><?= $this->Html->link($news[1]->title, ['controller' => 'Pages', 'action' => 'news', $news[1]->id]) ?></p>
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
										<p class="rank"><?= $this->Number->format($news[2]->id) ?><span class="hidden-xs-down">位</span></p>
									</div>
								</div>
							</div>
							<div class="col-10">
								<p><?= $this->Html->link($news[2]->title, ['controller' => 'Pages', 'action' => 'news', $news[2]->id]) ?></p>
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
										<p class="rank"><?= $this->Number->format($news[$i]->id) ?><span class="hidden-xs-down">位</span></p>
									</div>
								</div>
							</div>
							<div class="col-10">
								<p><?= $this->Html->link($news[$i]->title, ['controller' => 'Pages', 'action' => 'news', $news[$i]->id]) ?></p>
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
	            みんなの医療相談
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
										<p class="rank"><?= $this->Number->format($questions[0]->id) ?><span class="hidden-xs-down">位</span></p>
									</div>
								</div>
							</div>
							<div class="col-10">
								<p><?= $this->Html->link($questions[0]->title, ['controller' => 'Pages', 'action' => 'question', $questions[0]->id]) ?></p>
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
										<p class="rank"><?= $this->Number->format($questions[1]->id) ?><span class="hidden-xs-down">位</span></p>
									</div>
								</div>
							</div>
							<div class="col-10">
								<p><?= $this->Html->link($questions[1]->title, ['controller' => 'Pages', 'action' => 'question', $questions[1]->id]) ?></p>
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
										<p class="rank"><?= $this->Number->format($questions[2]->id) ?><span class="hidden-xs-down">位</span></p>
									</div>
								</div>
							</div>
							<div class="col-10">
								<p><?= $this->Html->link($questions[2]->title, ['controller' => 'Pages', 'action' => 'question', $questions[2]->id]) ?></p>
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
										<p class="rank"><?= $this->Number->format($questions[$i]->id) ?><span class="hidden-xs-down">位</span></p>
									</div>
								</div>
							</div>
							<div class="col-10">
								<p><?= $this->Html->link($questions[$i]->title, ['controller' => 'Pages', 'action' => 'question', $questions[$i]->id]) ?></p>
							</div>
						</div>
            <?php
              endif;
            endfor;
            ?>
	        </div><!-- #bbs -->
	      </section><!-- #main -->

	      <div id="sub" class="col-sm-4 hidden-xs-down">
	        <section id="topics_ranking">
	          <h1 class="ttl-bar-bold">
	            <i class="fa fa-newspaper-o fa-lg" aria-hidden="true"></i>
	            医者ドットコムニュース
	          </h1>

            <div class="row">
							<div class="col-3">
								<div class="row">
									<div class="col-sm-6 hidden-xs-down">
										<p id="icon1" class="text-center">
											<i class="fa fa-star fa-lg" aria-hidden="true"></i>
										</p>
									</div>
									<div class="col-sm-6">
										<p class="rank"><?= $this->Number->format($news[0]->id) ?><span class="hidden-xs-down">位</span></p>
									</div>
								</div>
							</div>
							<div class="col-9">
								<p><?= $this->Html->link($news[0]->title, ['controller' => 'Pages', 'action' => 'news', $news[0]->id]) ?></p>
							</div>
						</div>

            <div class="row">
							<div class="col-3">
								<div class="row">
									<div class="col-sm-6 hidden-xs-down">
										<p id="icon2" class="text-center">
											<i class="fa fa-star fa-lg" aria-hidden="true"></i>
										</p>
									</div>
									<div class="col-sm-6">
										<p class="rank"><?= $this->Number->format($news[1]->id) ?><span class="hidden-xs-down">位</span></p>
									</div>
								</div>
							</div>
							<div class="col-9">
								<p><?= $this->Html->link($news[1]->title, ['controller' => 'Pages', 'action' => 'news', $news[1]->id]) ?></p>
							</div>
						</div>

						<div class="row">
							<div class="col-3">
								<div class="row">
									<div class="col-sm-6 hidden-xs-down">
										<p id="icon3" class="text-center">
											<i class="fa fa-star fa-lg" aria-hidden="true"></i>
										</p>
									</div>
									<div class="col-sm-6">
										<p class="rank"><?= $this->Number->format($news[2]->id) ?><span class="hidden-xs-down">位</span></p>
									</div>
								</div>
							</div>
							<div class="col-9">
								<p><?= $this->Html->link($news[2]->title, ['controller' => 'Pages', 'action' => 'news', $news[2]->id]) ?></p>
							</div>
						</div>

            <?php
            for ($i = 0; $i < 8; $i++):
              if ($i < 3): continue;
              else:
            ?>
						<div class="row">
							<div class="col-3">
								<div class="row">
									<div class="col-sm-6 hidden-xs-down">
									</div>
									<div class="col-sm-6">
										<p class="rank"><?= $this->Number->format($news[$i]->id) ?><span class="hidden-xs-down">位</span></p>
									</div>
								</div>
							</div>
							<div class="col-9">
								<p><?= $this->Html->link($news[$i]->title, ['controller' => 'Pages', 'action' => 'news', $news[$i]->id]) ?></p>
							</div>
						</div>
            <?php
              endif;
            endfor;
            ?>
	        </section>

	        <div id="doctorRanking" class="row">
	          <h1 class="ttl-bar-bold">
	            <i class="fa fa-star fa-lg" aria-hidden="true"></i>
	            医師ランキング
	          </h1>
	          <div class="col-12">
	            <p>1<small>位</small></p>
	          </div>
	          <div class="col-6">
	            <div>
	              <p>2<small>位</small></p>
	            </div>
	            <div>
	              <p>4<small>位</small></p>
	            </div>
	            <div>
	              <p>6<small>位</small></p>
	            </div>
	            <div>
	              <p>8<small>位</small></p>
	            </div>
	            <div>
	              <p>10<small>位</small></p>
	            </div>
	          </div>

	          <div class="col-6">
	            <div>
	              <p>3<small>位</small></p>
	            </div>
	            <div>
	              <p>5<small>位</small></p>
	            </div>
	            <div>
	              <p>7<small>位</small></p>
	            </div>
	            <div>
	              <p>9<small>位</small></p>
	            </div>
	            <div>
	              <p>11<small>位</small></p>
	            </div>
	          </div>
	        </div><!-- #lawyerRanking.row -->

	        <aside id="ad_2">
	          <p class="text-center">広告</p>
	        </aside>

	      </div><!-- #sub -->
	    </div><!-- .row -->
		</div><!-- .container-fluid -->
  </article>
</div><!-- #pageBody -->
