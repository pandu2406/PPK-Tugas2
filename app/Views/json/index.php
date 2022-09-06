<?php
echo "<pre>";
print_r($ppk2_json_portal);

?>
<?=$this->extend('layout/page_layout')?>

<?=$this->section('content')?>
<div class="list-group">
<?php foreach ($ppk2_json_portal['Infogempa']['gempa'] as $key => $value): ?>
  <a href="https://data.bmkg.go.id/DataMKG/TEWS/gempadirasakan.json" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1"><?php echo $value['Wilayah'] ?></h5>
      <!-- date now minus date published -->
        <small><?php echo $value['Tanggal'] ?></small>
    </div>
    <small class="text-muted"><?php echo $value['Dirasakan'] ?></small>
  </a>
<?php endforeach?>
</div>
<?=$this->endSection()?>