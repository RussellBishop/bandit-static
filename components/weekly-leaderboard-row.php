<?php

    $ptsGained = 500 - ($i * round($i/2) * 5);

?>

<li class="u-bgcolor-fold <?=($i != 1) ? 'u-opac-05 u-opac-1@hover' : ''?>">
    <a href="/single-player.php" class="u-flex u-ai-center u-pv-1bl u-ph-1bl">

        <div class="u-mr-1bl">
            <?php
                $photoWidth = 3;
                include('components/player-photo.php');
            ?>
        </div>

        <dl class="u-flex u-jc-between u-ai-center u-width-100pc">
            <div class="u-grow-1 u-vspace-03r">
                <dt class="u-color-paste">Rebekah Reeves</dt>
                <dd class="u-flex u-ai-center u-hspace-4px u-size-13px">
                    <span class="u-color-win">+<?=$ptsGained?> <abbr title="rating points">pts.</abbr></span>
                    <span><span class="o-dictate">from</span> 12 wins</span>
                    <span><span class="o-dictate">and</span> 3 losses</span>
                </dd>
            </div>
            <dd class="u-color-paste u-size-h4 u-weight-bold u-ws-no">#<?=$i?></dd>
        </dl>
    </a>
</li>
