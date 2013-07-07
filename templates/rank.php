<?php ob_start(); ?>
<div class="row">
    <div class="span1">
    </div>
    <div class="span11">
        <h1 class="topic-big">タイムアタックランキング</h1>
        <?php if (isset($message)): ?>
            <h3><?php echo h($message); ?></h3>
        <?php endif; ?>
        <?php //var_dump($res['response']); ?>
        <?php $i = 1; ?>
        <table class="table table-condensed">
        <thead><tr>
      <th>順位</th>
      <th>ユーザ名</th>
      <th>正解数</th>
      <th>解答時間</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($res['response'] as $row): ?>
            <tr>
            <td><?php echo $i; ?>位</td>
            <td>
            <?php if (!empty($row['MoridaiUser']['user_name'])): ?>
            <?php echo $row['MoridaiUser']['user_name']; ?>
            <?php else: ?>
            名無しさん
            <?php endif; ?>
            </td>
            <td><?php echo $row['MoridaiTime']['right_answer_count']; ?></td>
            <td><?php echo $row['MoridaiTime']['time']; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
        </tbody>
        </table>
             
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php include('layout_test.php'); ?>
