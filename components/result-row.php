<?php
    $winningScore = rand(2,7);
    $losingScore = max($winningScore - rand(1,4), 0);
?>

<li class="u-pos-relative u-bgcolor-fold">

    <?php if ($i % 4 == 0) : ?>
        <div class="o-absolute-fill u-borrad-inherit u-shadow-you u-pointer-none"></div>
    <?php endif; ?>

    <a href="/single-result.php" class="u-flex u-ai-center u-pv-1bl u-ph-1bl u-color-paste">

        <div class="u-grow-1 u-basis-0 u-flex u-ai-center u-jc-center u-order-2 u-align-center u-hspace-1bl">

            <?php
                $photoWidth = 3;
                include('components/player-photo.php');
            ?>

            <dt class="u-size-h4 u-weight-bold u-ws-no">
                <span class="o-dictate"><?php randomName(); ?> </span> <?=$winningScore?> &ndash; <span class="o-dictate"><?php randomName(); ?> </span><?=$losingScore?>
            </dt>

            <?php
                $photoWidth = 3;
                include('components/player-photo.php');
            ?>

        </div>

        <div class="u-grow-1 u-basis-0 u-order-1 u-align-left o-ellipsis">

            <span aria-hidden="true"><?php randomFirst(); ?></span>

        </div>


        <div class="u-grow-1 u-basis-0 u-order-3 u-align-right o-ellipsis">

            <span aria-hidden="true"><?php randomFirst(); ?></span>

        </div>

    </a>
</li>
