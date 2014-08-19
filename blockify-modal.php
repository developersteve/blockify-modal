<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#<? echo $block->document['name']; ?>">
  <? echo $block->document['btn-name']; ?>
</button>

<div class="modal fade" id="<? echo $block->document['name']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">  <? echo $block->document['modal-title']; ?></h4>
      </div>
      <div class="modal-body">
		<? $block->document->tag('p', 'body'); ?>
      </div>
    </div>
  </div>
</div>
