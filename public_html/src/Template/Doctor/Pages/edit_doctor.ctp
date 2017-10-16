<div id="pageBody" class="row">
  <div class="col-8 offset-2">
    <article>
      <?= $this->Form->create($doctor) ?>
      <fieldset id="addDoctor">
        <legend class="text-center"><?= __('登録情報の変更') ?></legend>
        <div class="row">
          <div class="col-md-6 required">
            <label>医籍番号</label>
          </div>
          <div class="col-md-6">
          <?php
            echo $this->Form->control('number', ['label' => false,]);
          ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 required">
            <label>ログインID</label>
          </div>
          <div class="col-md-6">
          <?php
            echo $this->Form->control('login_name', ['label' => false,]);
          ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 required">
            <label>パスワード</label>
          </div>
          <div class="col-md-6">
          <?php
            echo $this->Form->control('password', ['label' => false,]);
          ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 required">
            <label>姓</label>
          </div>
          <div class="col-md-6">
          <?php
            echo $this->Form->control('firstname', ['label' => false,]);
          ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 required">
            <label>名</label>
          </div>
          <div class="col-md-6">
          <?php
            echo $this->Form->control('lastname', ['label' => false,]);
          ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 required">
            <label>セイ</label>
          </div>
          <div class="col-md-6">
          <?php
            echo $this->Form->control('last_kana', ['label' => false,]);
          ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 required">
            <label>メイ</label>
          </div>
          <div class="col-md-6">
          <?php
            echo $this->Form->control('first_kana', ['label' => false,]);
          ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 required">
            <label>性別</label>
          </div>
          <div class="col-md-6">
          <?php
          echo $this->Form->control('jender', array(
            'label' => false,
            'before' => '--before--',
            'after' => '--after--',
            'between' => '--between---',
            'separator' => '--separator--',
            'options' => array('男性', '女性'),
            'type' => 'radio'
          ));
          ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 required">
            <label>生年月日</label>
          </div>
          <div class="col-md-6">
          <?php
            echo $this->Form->control('birthday', [
              'label' => false,
              'type' => 'date',
              'dateFormat' => 'YMD',
              'monthNames' => false,
              'maxYear' => date('Y'),
              'minYear' => date('Y') - 110,
              'empty' => '---'
            ]);
          ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 required">
            <label>所属先医療機関</label>
          </div>
          <div class="col-md-6">
          <?php
            echo $this->Form->control('hospital_id', [
              'options' => $hospitals,
              'label' => false,
            ]);
          ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 required">
            <label>診療科</label>
          </div>
          <div class="col-md-6">
          <?php
            echo $this->Form->control('department_id', [
              'options' => $departments,
              'label' => false,
            ]);
          ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label>専門分野</label>
          </div>
          <div class="col-md-6">
          <?php
            echo $this->Form->control('specialty', [
              'label' => false,
            ]);
          ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 required">
            <label>医師免許取得年</label>
          </div>
          <div class="col-md-6">
          <?php
            echo $this->Form->control('registar', [
              'label' => false,
              'class' => 'form-control',
              'type' => 'date',
              'dateFormat' => 'YMD',
              'monthNames' => false,
              'maxYear' => date('Y'),
              'minYear' => date('Y') - 110,
              'empty' => '---'
            ]);
          ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 required">
            <label>電話番号</label>
          </div>
          <div class="col-md-6">
          <?php
            echo $this->Form->control('tel', ['label' => false,]);
          ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label>FAX番号</label>
          </div>
          <div class="col-md-6">
          <?php
            echo $this->Form->control('fax', ['label' => false, 'type' => 'tel']);
          ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 required">
            <label>メールアドレス</label>
          </div>
          <div class="col-md-6">
          <?php
            echo $this->Form->control('mail', ['label' => false, 'type' => 'email']);
          ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 required">
            <label>秘密の質問</label>
          </div>
          <div class="col-md-6">
          <?php
            echo $this->Form->control('secret_q', ['label' => false,]);
          ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 required">
            <label>秘密の答え</label>
          </div>
          <div class="col-md-6">
          <?php
            echo $this->Form->control('secret_a', ['label' => false,]);
          ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 required">
            <label>登録したきっかけ</label>
          </div>
          <div class="col-md-6">
          <?php
            echo $this->Form->control('opportunity', ['label' => false,]);
          ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 required">
            <label>登録した理由</label>
          </div>
          <div class="col-md-6">
          <?php
            echo $this->Form->control('reazon', ['label' => false,]);
          ?>
          </div>
        </div>
      </fieldset>
      <p><?= $this->Form->button(__('登録')) ?></p>
      <?= $this->Form->end() ?>
    </article>
  </div><!-- .col-8.offset-2 -->
</div><!-- #pageBody -->
