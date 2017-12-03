<?php 
  $base_url = 'http://localhost:8888/CoffeeStoreWeb/public';
 ?> 
<div class="ui inverted segment">
  <div class="ui inverted secondary pointing menu">
    <a class="active item" href="<?= $base_url ?>">
      Manage Page
    </a>
    <a class="item" href="<?= $base_url ?>/upload">
      Insert New Store
    </a>
    <a class="item" href = "<?= $base_url ?>/upload/member">
      Insert New Member
    </a>
    <a class="item" href = "<?= $base_url ?>/upload/viewStore">
      View Store
    </a>
  </div>
</div>