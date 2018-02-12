<li class="u-pos-relative u-bgcolor-fold <?=($i != 2) ? 'u-opac-05 u-opac-1@hover' : ''?>">

    <?php if ($i == 2) : ?>
        <div class="o-absolute-fill u-borrad-inherit u-shadow-you u-pointer-none"></div>
    <?php endif; ?>

    <a href="/single-player.php" class="u-flex u-ai-center u-pv-1bl u-ph-1bl">

        <div class="u-mr-1bl">
            <?php
                $photoWidth = 3;
                if ($i == 2) { $photoId = 54; }
                include('components/player-photo.php');
            ?>
        </div>

        <dl class="u-flex u-jc-between u-ai-center u-width-100pc">
            <div class="u-grow-1 u-vspace-03r">
                <dt class="u-color-paste">Rebekah Reeves</dt>
                <dd class="u-flex u-ai-center u-hspace-8px u-size-13px">
                    <span class="u-flex u-ai-center u-hspace-4px">
                        <svg class="u-width-1bl u-height-auto" width="11" height="13" viewBox="0 0 11 13">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/dist/svg/sprite.svg#rating"></use>
                        </svg>
                        <span class="u-color-paste"><?= 2000 - ($i * 5 * (20 - $i)); ?> <span class="o-dictate">rating</span></span>
                    </span>
                    <span class="u-uppercase u-color-<?=$level?>"><?=$level?></span>
                </dd>
            </div>
            <dd class="u-color-paste u-size-h4 u-weight-bold u-ws-no">#<?=$i?></dd>
        </dl>
    </a>
</li>
