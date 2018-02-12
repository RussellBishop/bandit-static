<?php include('components/head.php'); ?>

<body>

    <div class="o-window">

        <?php
            $view = 'club';
            $page = 'players';
            include('components/header.php');
        ?>

        <main class="o-main">

            <div class="o-container u-ph-1bl u-vspace-2bl">

                <a href="/players.php" class="u-color-playdough">Back to Players</a>

                <header class="u-flex u-ai-center">

                    <div class="u-mr-1bl">
                        <?php
                            $photoWidth = 4;
                            include('components/player-photo.php');
                        ?>
                    </div>

                    <dl class="u-flex u-jc-between u-ai-center u-width-100pc">
                        <div class="u-grow-1 u-vspace-06r">
                            <dt><h1 class="u-size-h1 u-color-white">Rebekah Reeves</h1></dt>
                            <dd class="u-flex u-ai-center u-hspace-8px u-size-15px">
                                <span class="u-flex u-ai-center u-hspace-8px">
                                    <span class="u-flex u-ai-center u-hspace-4px">
                                        <svg class="u-width-1bl u-height-auto" width="11" height="13" viewBox="0 0 11 13">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/dist/svg/sprite.svg#rating"></use>
                                        </svg>
                                        <span class="u-color-paste"><?= 2000 - ($i * 5 * (20 - $i)); ?> <span class="o-dictate">rating</span></span>
                                    </span>

                                    <span class="u-uppercase u-color-<?=$level?>"><?=$level?></span>

                                    <span><span class="o-dictate">from</span> <?= rand(1,20) * rand(1,20)?> games</span>
                                </span>
                            </dd>
                        </div>
                    </dl>

                </header>

            </div>

            <hr class="c-hr" />

            <section id="results" class="o-container">

                <header class="u-flex u-jc-between u-ai-center u-ph-1bl">
                    <h1 class="u-size-h2 u-color-white">Results</h1>
                    <a href="/single-player-matches.php" class="c-go u-color-playdough">See all</a>
                </header>

                <ol class="u-mt-1bl u-vspace-1px u-borrad-first-2200 u-borrad-last-0022">
                    <?php

                        for ($i = 1; $i < 4; $i++) {
                            include('components/result-row.php');
                        }

                    ?>
                </ol>

            </section>

            <section id="weekly-leaderboard" class="o-container">

                <header class="u-flex u-jc-between u-ai-center u-ph-1bl">
                    <h1 class="u-size-h2 u-color-white">Weekly <span class="u-color-steam">leaderboard</span></h1>
                    <a href="/leaderboards.php" class="c-go u-color-playdough">See all</a>
                </header>

                <ol class="u-mt-1bl u-vspace-1px u-borrad-first-2200 u-borrad-last-0022">
                    <?php

                        for ($i = 1; $i < 4; $i++) {
                            include('components/weekly-leaderboard-row.php');
                        }

                    ?>
                </ol>

            </section>

            <section id="alltime-leaderboard" class="o-container">

                <header class="u-flex u-jc-between u-ai-center u-ph-1bl">
                    <h1 class="u-size-h2 u-color-white">All time <span class="u-color-steam">leaderboard</span></h1>
                    <a href="/leaderboards.php" class="c-go u-color-playdough">See all</a>
                </header>

                <ol class="u-mt-1bl u-vspace-1px u-borrad-first-2200 u-borrad-last-0022">
                    <?php

                        for ($i = 1; $i < 4; $i++) {
                            include('components/alltime-leaderboard-row.php');
                        }

                    ?>
                </ol>

            </section>

            <?php include('components/footer.php'); ?>

        </main>

    </div>

</body>
</html>
