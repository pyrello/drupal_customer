<div id="customer-listing">
  <?php if (!empty($customers)): ?>

    <?php foreach ($customers as $customer): ?>

      <?php print $customer ?>

    <?php endforeach; ?>

  <?php else: ?>
    <p><em>No customers added yet.</em></p>
  <?php endif; ?>
</div>