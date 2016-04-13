<div>
  <h3><?php print $customer->title; ?></h3>
  <?php foreach($content as $key => $field): ?>
    <?php if (strpos($key, '#') === FALSE): ?>
      <?php print render($field); ?><br>
    <?php endif; ?>
  <?php endforeach; ?>
</div>
