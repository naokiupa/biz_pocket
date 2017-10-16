<div id="pageBody" class="row">
  <div class="col-8 offset-2">
    <article>
      <?= $this->Form->create($hospital) ?>
      <fieldset id="addDoctor">
          <legend class="text-center"><?= __('新規登録') ?></legend>
          <div class="row">
            <div class="col-md-6 required">
              <label>病院名</label>
            </div>
            <div class="col-md-6">
            <?php
              echo $this->Form->control('name', ['label' => false,]);
            ?>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 required">
              <label>郵便番号</label>
            </div>
            <div class="col-md-6">
            <?php
              echo $this->Form->control('postalcode', ['label' => false,]);
            ?>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 required">
              <label>都道府県</label>
            </div>
            <div class="col-md-6">
            <?php
              echo $this->Form->control('prefecture', ['label' => false,]);
            ?>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 required">
              <label>住所</label>
            </div>
            <div class="col-md-6">
            <?php
              echo $this->Form->control('address', ['label' => false,]);
            ?>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label>開業年</label>
            </div>
            <div class="col-md-6">
            <?php
              echo $this->Form->control('open', [
                'label' => false,
                'type' => 'date',
                'dateFormat' => 'Y',
                'monthNames' => false,
                'maxYear' => date('Y'),
                'minYear' => date('Y') - 110,
                'empty' => '---'
              ]);
            ?>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label>在籍医師数</label>
            </div>
            <div class="col-md-6">
            <?php
              echo $this->Form->control('how_many_doctors', ['label' => false, 'empty' => true]);
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
              echo $this->Form->control('fax', ['label' => false, 'empty' => true]);
            ?>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label>メールアドレス</label>
            </div>
            <div class="col-md-6">
            <?php
              echo $this->Form->control('mail', ['label' => false,]);
            ?>
            </div
          </div>
          <div class="row">
            <div class="col-md-6 required">
              <label>診療科</label>
            </div>
            <div class="col-md-6">
            <?php
              echo $this->Form->control('departments._ids', ['label' => false, 'options' => $departments]);
            ?>
            </div>
          </div>
      </fieldset>
      <p><?= $this->Form->button(__('登録')) ?></p>
      <?= $this->Form->end() ?>
    </article>
  </div><!-- .col-8.offset-2 -->
</div><!-- #pageBody -->
