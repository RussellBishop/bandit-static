<nav>
    <div class="o-container u-pv-1bl">
        <div class="u-ph-1bl u-flex u-jc-between">
            <a href="/" class="u-flex u-ai-center">
                <div class="u-pos-relative">
                    <svg class="u-width-2bl u-mr-1bl u-height-auto" width="95" height="95" viewBox="0 0 95 95"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/dist/svg/sprite.svg#logo-head"></use></svg>
                    <svg class="c-player-photo__knot u-z-1 u-pos-absolute u-top-0 u-left-0 u-width-1bl u-height-auto" width="36" height="31" viewBox="0 0 36 31"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/dist/svg/sprite.svg#logo-knot"></use></svg>
                </div>
                <span class="u-color-orange u-uppercase u-weight-bold">Bandit</span>
            </a>

            <a href="/user" class="u-flex u-ai-center u-hspace-1bl u-opac-05 u-opac-1@hover">
                <?php include('components/player-photo.php'); ?>
                <span class="u-color-orange u-uppercase u-weight-bold">Stephen</span>
            </a>
        </div>
    </div>

    <?php
        $navPlayer = 'true';
        include('nav.php');
    ?>
</nav>
