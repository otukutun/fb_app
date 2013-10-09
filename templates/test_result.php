<?php ob_start(); ?>
<div class="row">
<div class="span1"></div>
<div class="span11">
<table class="table">
<tr>
<th>問題番号</th>
<th>結果</th>
<th>正解番号</th>
</tr>
<?php foreach($problems as $problem): ?>
<tr>
<td><?php echo h($num); ?>番</td>
<td>結果→<?php echo h($problem['result']); ?></td>
<td>正解は<?php echo h($problem['answer']); ?>番です。</td>
</tr>
<?php $num++; ?>
<?php endforeach; ?>
</table>
<?php if ($sum >= $pass_line): ?>
<h3 style="color:red;">合格しました。あなたは<?php echo h($sum); ?>/<?php echo h($problems_count); ?>の正解率でした。</h2>
<h3 style="color:red;">合格おめでとうございます。盛岡検定3級を受験しようと考えている方は是非下記の入力フォームより氏名・郵便番号・住所を応募してください。応募いただいた個人情報につきましては盛岡商工会議所に管理していただき盛岡検定の受験要項などの資料送付などに活用させていただきます。希望者は是非応募していただきますようよろしくお願いします。</h2>
<form action="post_personal_infomation.php" method="POST">
<label>名前</label><input type="text" name="name" />
<label>郵便番号</label><input type="text" name="postcode" />
<label>住所</label><textarea row='3' name="address"></textarea>
<input  type="submit" value="送信" class="btn btn-primary"/>
</form>

<?php else: ?>
<h2 style="color:red;">不合格です。また挑戦してください！あなたは<?php echo h($sum); ?>/<?php echo h($problems_count); ?>の正解率でした。</h2>
<?php endif; ?>
<br />
<a href="index.php"><img src='img/toppage_button.png' / ></a>
</div><!--span-->
</div><!--row-->
<?php $content = ob_get_clean(); ?>
<?php include('layout_test.php') ?>
