<div class="pagination-holder">
    <div class="row">
        <div class="col-xs-12 col-sm-6 text-left">
            <ul class="pagination">
              <?php if ($page->current != 1) { ?>
                <li><a href="<?= \VoltHelpers\Helpers::paginationPath() ?>1">&laquo;</a></li>
              <?php } ?>

              <?php foreach (range(1, $page->total_pages) as $i) { ?>
                <li><a <?php if ($i == $page->current) { ?>class="active"<?php } ?> href="<?= \VoltHelpers\Helpers::paginationPath() ?><?= $i ?>"><?= $i ?></a></li>
              <?php } ?>

              <?php if ($page->current != $page->last) { ?>
                <li><a href="<?= \VoltHelpers\Helpers::paginationPath() ?><?= $page->last ?>">&raquo;</a></li>
              <?php } ?>
            </ul>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="result-counter">
                <?php $start = ($limit * ($page->current - 1)) + 1; ?>
                <?php $end = ($limit * ($page->current - 1)) + $limit; ?>
                <?php if ($end > $page->total_items) { ?>
                  <?php $end = $page->total_items; ?>
                <?php } ?>

                <?php if ($limit) { ?>
                  <div>Showing <?= $start ?> - <?= $end ?> of <?= $page->total_items ?></div>
                <?php } ?>
            </div><!-- /.result-counter -->
        </div>
    </div><!-- /.row -->
</div><!-- /.pagination-holder -->