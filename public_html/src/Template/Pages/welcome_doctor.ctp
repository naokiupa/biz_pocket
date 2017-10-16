<div id="page" class="row">
  <div id="pageBody" class="col-10 offset-1">
  <article>
    <div class="text-center">
      <h1><font color="#6e321d" size="12">先生のお力で<strong>一人でも多くの</strong>尊い命を</font></h1>
    </div>
    <div class="row">
      <div class="col-md-6">
        <p><font color="White">初めてのご利用の方</font></p>
        <?= $this->Form->button('新規登録') ?>
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
 </div><!-- #pageBody.container -->
</div><!-- #page -->
