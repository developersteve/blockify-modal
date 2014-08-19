<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#<?php echo $block->document['name']; ?>">
  <?php echo $block->document['btn-name']; ?>
</button>

<div class="modal fade" id="<?php echo $block->document['name']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $block->document['modal-title']; ?></h4>
      </div>
      <div class="modal-body">
		<?php $block->document->tag('p', 'body'); ?>
      </div>
    <?php
    if($block->document['footer-btn']){
      ?>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger"><?php echo $block->document['footer-btn'];?></button>
        </div>
      <?php
    }
      ?>
    </div>
  </div>
</div>
