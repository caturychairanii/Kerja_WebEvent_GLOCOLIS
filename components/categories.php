<div class="menu">
    <?php foreach ($Categories as $Ic => $Tx) { ?>

    <div class="first-thumb active">
        <div class="thumb">
            <span class="icon"><img src="assets/images/icon/<?= $Ic ?>.png" alt=""></span>
            <?= $Tx ?>
        </div>
    </div>

    <?php } ?>

    <div class="last-thumb">
        <div class="thumb">
            <span class="icon"><img src="assets/images/service-icon-01.png" alt=""></span>
            Others
        </div>
    </div>

</div>