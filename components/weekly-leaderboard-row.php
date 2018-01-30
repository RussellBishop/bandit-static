<li class="u-bgcolor-fold <?=($i != 1) ? 'u-opac-05 u-opac-1@hover' : ''?>">
    <a href="/weekly-leaderboard#1" class="u-flex u-ai-center u-pv-1bl u-ph-1bl">

        <div class="u-mr-1bl">
            <?php include('components/player-photo.php'); ?>
        </div>

        <dl class="u-flex u-jc-between u-ai-center u-width-100pc">
            <div class="u-grow-1 u-vspace-03r">
                <dt class="u-color-paste">Rebekah Reeves</dt>
                <dd class="u-size-13px">
                    <span class="u-color-win">+425 <abbr title="rating points">pts.</abbr></span>
                    <span class="o-dictate">from</span> 12 wins
                    <span class="o-dictate">and</span> 3 losses
                </dd>
            </div>
            <dd class="u-color-paste u-size-h4 u-weight-bold u-ws-no">#<?=$i?></dd>
        </dl>
    </a>
</li>
