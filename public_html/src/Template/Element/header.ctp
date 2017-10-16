<header id="pageHead">
  <div class="container-fluid col-lg-10 offset-lg-1 none-padding">
		<!-- サイト情報 -->
    <div id="headerInfo" class="row hidden-md-down">
      <div id="discription" class="col-6">
        <p>医者ドットコム-無料医療相談や医師、医療機関の検索</p>
      </div>
      <div class="col-1">
        <p class="text-center"><a href="#.html">医療相談</a></p>
      </div>
      <div class="col-1">
        <p class="text-center"><a href="#.html">医師検索</a></p>
      </div>
      <div class="col-2">
        <p class="text-center"><a href="#.html">医者ドットコム<br class="hidden-xl-up">ニュース</a></p>
      </div>
      <div class="col-1">
        <p><a href="<?= $this->Url->build(['prefix' => 'doctor', 'controller' => 'Pages', 'action' => 'loginDoctor']) ?>" class="btn btn-info btn-sm">お医者様はこちら</a></p>
      </div>
    </div><!-- #headerInfo -->

		<!-- サイトタイトル -->
		<div id="siteTitle" class="row none-margin">
      <div id="discription" class="col-6 col-sm-8">
				<p id="catchcopy" class="hidden-xs-down">お医者さんをもっと身近に</p>
				<h1 id="siteName"><?= $this->Html->link(__('医者ドットコム'), ['controller' => 'Pages', 'action' => 'display']) ?></h1>
      </div>

      <div class="col-sm-1 hidden-xs-down">
        <p class="text-center"><a href="#.html">
          <i class="fa fa-sign-in fa-2x" aria-hidden="true"></i>
          <br>ログイン
        </a></p>
      </div>
      <div class="col-sm-1 hidden-xs-down">
        <p class="text-center"><a href="#.html">
          <i class="fa fa-user-plus fa-2x" aria-hidden="true"></i>
          <br>会員登録
        </a></p>
      </div>
      <div class="col-sm-1 hidden-xs-down">
        <p class="text-center">
          <a href="#.html">
            <i class="fa fa-user-md fa-2x" aria-hidden="true"></i>
            <br>お気に入りの<br class="hidden-lg-down">医師
          </a>
        </p>
      </div>
      <div class="col-sm-1 hidden-xs-down">
        <p class="text-center tab"><a href="#.html">
          <i class="fa fa-question fa-2x" aria-hidden="true"></i>
          <br>ヘルプ
        </a></p>
      </div>

      <div class="col-2 hidden-sm-up">
        <p class="text-center tab"><a href="#.html">
          <i class="fa fa-clock-o fa-3x" aria-hidden="true"></i>
          <br>閲覧履歴
        </a></p>
      </div>
      <div class="col-2 hidden-sm-up">
        <p class="text-center tab"><a href="#.html">
          <i class="fa fa-star fa-3x" aria-hidden="true"></i>
          <br>お気に入り
        </a></p>
      </div>
      <div id="menuBtn" class="col-2 hidden-sm-up">
        <p class="text-center tab"><a href="#">
          <i class="fa fa-bars fa-3x" aria-hidden="true"></i>
          <br>メニュー
        </a></p>
      </div>
		</div><!-- .row -->
  </div><!-- .container-fluid -->
</header>
