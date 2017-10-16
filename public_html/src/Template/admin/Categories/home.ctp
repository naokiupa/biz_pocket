<div id="page">
<!-- 本文 -->
  <div id="pageBody">
  <article>
		<section id="info-text" class="hidden-xs-down">
			<p class="lead"><strong>「医者ドットコム」は日本最大級の医療相談ポータルサービスです。</strong></p>
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
								<select class="form-control">
									<option>全国</option>
									<option>北海道</option>
									<option>東北</option>
									<option>関東</option>
									<option>中部</option>
									<option>近畿</option>
									<option>中国・四国</option>
									<option>九州・沖縄</option>
								</select>
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
		              <h2><a href="portfolio/gan/gan.html"><td><?= h($category->name) ?></td></a></h2>
									<div class="row">
										<div class="col-4">
											<img src="portfolio/images/gan.jpg" width="100%">
										</div>
										<div class="col-8">
											<ul>
                        <?php foreach ($disease as $disease): ?>
												<li><a href="portfolio/gan/nyu-gan/nyu-gan.html"><?= h($disease->name)
                        ?></a></li>
                      <?php endforeach ?>
											</ul>
										</div>
									</div>
								</div>
							</div>
              <?php endforeach; ?>
						</div><!-- .row -->

						<div class="row">
							<div class="onayami_xs-l col-6 hidden-sm-up">
								<a href="portfolio/gan/gan.html">
									<div id="onayamiElement">
			              <h2 class="text-center">がん</h2>
									</div>
								</a>
							</div>
							<div class="onayami_xs-r col-6 hidden-sm-up">
								<a href="portfolio/sei-byou/sei-byou.html">
									<div id="onayamiElement">
				          	<h2 class="text-center">性病</h2>
									</div>
								</a>
							</div>
						</div><!-- .row -->
						<div class="row">
	            <div class="onayami_xs-l col-6 hidden-sm-up">
								<a href="portfolio/seikatsushukan-byou/seikatsushukan-byou.html">
									<div id="onayamiElement">
			              <h2 class="text-center">生活習慣病</h2>
									</div>
								</a>
							</div>
							<div class="onayami_xs-r col-6 hidden-sm-up">
								<a href="portfolio/#.html">
									<div id="onayamiElement">
				          	<h2 class="text-center">脳梗塞</h2>
									</div>
								</a>
							</div>
						</div><!-- .row -->
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
	              <img class="img-fluid" src="portfolio/images/japancraftmap.gif">
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
										<p class="rank"><?= $this->Number->format($questions[0]->id) ?><span class="hidden-xs-down">位</span></p>
									</div>
								</div>
							</div>
							<div class="col-10">
								<p><?= h($questions[0]->title) ?></p>
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
								<p><?= h($questions[1]->title) ?></p>
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
								<p><?= h($questions[2]->title) ?></p>
							</div>
						</div>

            <?php
            for ($i = 0; $i < 8; $i++):
              if ($i <= 2): continue;
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
								<p><?= h($questions[$i]->title) ?></p>
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
										<p class="rank"><?= $this->Number->format($news[0]->id) ?><span class="hidden-xs-down">位</span></p>
									</div>
								</div>
							</div>
							<div class="col-10">
								<p><?= h($news[0]->title) ?></p>
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
								<p><?= h($news[1]->title) ?></p>
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
								<p><?= h($news[2]->title) ?></p>
							</div>
						</div>

            <?php
            for ($i = 0; $i < 8; $i++):
              if ($i <= 2): continue;
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
								<p><?= h($news[$i]->title) ?></p>
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
								<p><?= h($news[0]->title) ?></p>
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
								<p><?= h($news[1]->title) ?></p>
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
								<p><?= h($news[2]->title) ?></p>
							</div>
						</div>

            <?php
            for ($i = 0; $i < 8; $i++):
              if ($i <= 2): continue;
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
								<p><?= h($news[$i]->title) ?></p>
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

  <footer id="pageFoot">

	</footer>
</div><!-- #page -->
