<div id="pageBody" class="row">
  <div class="col-10 offset-1">
    <article>
      <div id="promptDoctor" class="text-center">
        <h1><font color="#6e321d" size="12">先生のお力で<strong>一人でも多くの</strong>尊い命を</font></h1>
      </div>
      <div class="row">
        <div id="addDoctor" class="col-md-6">
          <legend>初めてのご利用の方</legend>
          <button type="submit" onclick="location.href='<?= $this->Url->build(['controller' => 'Pages', 'action' => 'addDoctor']) ?>'">新規登録</button>
        </div>
        <div class="col-md-6">
          <?= $this->Flash->render() ?>
          <?= $this->Form->create() ?>
          <fieldset>
            <legend><?= __('登録済みの方') ?></legend>
            <?= $this->Form->input('login_name', ['label' => 'ログインID']) ?>
            <?= $this->Form->input('password', ['label' => 'パスワード']) ?>
            <?= $this->Form->button('ログイン') ?>
          </fieldset>
          <?= $this->Form->end() ?>
        </div>
      </div>
    </article>
  </div><!-- .col-8.offset-2 -->
</div><!-- #pageBody -->
