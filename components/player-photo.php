<?php

    $levels = [
        // 'bandit',
        'god',
        'legendary',
        'monster',

        'warrior',
        'ninja',
        'assassin',
        'knight',

        'fighter',
        'scout',
        'junior',
        'rookie',
    ];

    $level = $levels[array_rand($levels, 1)];

?>

<div class="u-pos-relative" aria-hidden="true">

    <?php if($level == 'god') : ?>
        <svg class="c-player-photo__knot u-z-1 u-pos-absolute u-top-0 u-left-0 u-width-1bl u-height-auto" width="36" height="31" viewBox="0 0 36 31"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/dist/svg/sprite.svg#logo-knot"></use></svg>
    <?php endif; ?>

    <div class="c-player-photo u-width-<?=$photoWidth?>bl" style="background-image: url('https://randomuser.me/api/portraits/men/<?=rand(1,100)?>.jpg');">
        <div class="c-player-photo__level u-bgcolor-<?=$level?>"></div>

        <?php if($level == 'god') : ?>
            <div class="c-player-photo__level u-bgcolor-bandit"></div>
        <?php endif; ?>
    </div>
</div>

