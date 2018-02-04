<?php

    $fadedClasses = 'u-opac-05 u-opac-1@hover';

?>

<nav>
    <div class="o-container u-pv-1bl">
        <div class="u-ph-1bl u-flex u-jc-between">
            <a href="/" class="u-flex u-ai-center u-hspace-05bl <?php if($view != 'club') echo $fadedClasses; ?>">
                <div class="u-pos-relative">
                    <svg class="u-width-2bl u-height-auto" width="95" height="95" viewBox="0 0 95 95"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/dist/svg/sprite.svg#logo-head"></use></svg>
                    <svg class="c-player-photo__knot u-z-1 u-pos-absolute u-top-0 u-left-0 u-width-1bl u-height-auto" width="36" height="31" viewBox="0 0 36 31"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/dist/svg/sprite.svg#logo-knot"></use></svg>
                </div>
                <span class="u-color-orange u-uppercase u-weight-bold">Bandit</span>
            </a>

            <a href="/settings.php" class="u-flex u-ai-center u-hspace-05bl <?php if($view != 'player') echo $fadedClasses; ?>">
                <?php
                    $photoWidth = 2;
                    $photoId = 54;
                    include('components/player-photo.php');
                ?>
                <span class="u-color-orange u-uppercase u-weight-bold">Stephen</span>
            </a>
        </div>
    </div>

    <?php
        $photoWidth = 2;

        if($view == 'club') include('nav-club.php');

        if($view == 'player') include('nav-player.php');
    ?>
</nav>
