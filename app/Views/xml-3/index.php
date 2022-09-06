<?=$this->extend('layout/page_layout')?>

<?=$this->section('content')?>
<div class="row row-cols-1 row-cols-md-2">
  <div class="col mb-4">
    <?php foreach ($ppk2_xml_3->channel->item as $key => $value): ?>
    <div class="card">
      <img class="card-img-top img-fluid" src="<?php echo $value->img ?>" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"><?php echo $value->title ?></h5>
        <a class="card-text" href="<?php echo $value->link ?>" target="_blank"><small class="text-muted">Baca selengkapnya</small></a>
      </div>
    </div>
    <?php endforeach?>
  </div>
</div>
<?=$this->endSection()?>