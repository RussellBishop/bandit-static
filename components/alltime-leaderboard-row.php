

<li class="u-bgcolor-fold <?=($i != 2) ? 'u-opac-05 u-opac-1@hover' : ''?>">
    <a href="/all-time-leaderboard#1" class="u-flex u-ai-center u-pv-1bl u-ph-1bl">

        <div class="u-mr-1bl">
            <?php include('components/player-photo.php'); ?>
        </div>

        <dl class="u-flex u-jc-between u-ai-center u-width-100pc">
            <div class="u-grow-1 u-vspace-03r">
                <dt class="u-color-paste">Rebekah Reeves</dt>
                <dd class="u-size-13px">
                    <span class=""><?= 2000 - ($i * 5 * (20 - $i)); ?> <span class="o-dictate">rating</span>
                    <span class="u-uppercase u-color-<?=$level?>"><?=$level?></span>
                </dd>
            </div>
        </dl>
    </a>
</li>
