<?php include('components/head.php'); ?>

<body>

    <div class="o-window">

        <?php
            $view = 'club';
            $page = 'profile';
            include('components/header.php');
        ?>

        <main class="o-main">

            <div class="o-container u-vspace-3bl">

                <header class="u-flex u-ai-center u-ph-1bl">

                    <div class="u-mr-1bl">
                        <?php
                            $photoWidth = 4;
                            $photoId = 54;
                            include('components/player-photo.php');
                        ?>
                    </div>

                    <dl class="u-flex u-jc-between u-ai-center u-width-100pc">
                        <div class="u-grow-1 u-vspace-06r">
                            <dt><h1 class="u-size-h1 u-color-white">Stephen Haynult</h1></dt>
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

                <section class="u-vspace-1bl">

                    <header class="u-flex u-jc-between u-ai-center u-ph-1bl">
                        <h1 class="u-size-h2 u-color-white">Stats <span class="u-color-steam">mini</span></h1>
                    </header>

                    <dl class="u-vspace-1px u-borrad-first-2200 u-borrad-last-0022">
                        <li class="u-bgcolor-fold">

                            <dl class="u-flex u-jc-between u-ai-center u-fw-wrap u-width-100pc">
                                <div class="u-grow-1 u-basis-0 u-vspace-03r u-pv-1bl u-ph-1bl">
                                    <dt class="u-color-paste u-weight-bold">Wins</dt>
                                    <dd class="u-flex u-ai-center u-hspace-8px u-size-13px">
                                        <span class="u-color-paste"><?= rand(10,400) * 3 ; ?></span>
                                    </dd>
                                </div>

                                <div class="u-grow-1 u-basis-0 u-vspace-03r u-pv-1bl u-ph-1bl">
                                    <dt class="u-color-paste u-weight-bold">Losses</dt>
                                    <dd class="u-flex u-ai-center u-hspace-8px u-size-13px">
                                        <span class="u-color-paste"><?= rand(5,100) * 3 ; ?></span>
                                    </dd>
                                </div>

                                <div class="u-grow-1 u-basis-0 u-vspace-03r u-pv-1bl u-ph-1bl">
                                    <dt class="u-color-paste u-weight-bold">Win Ratio</dt>
                                    <dd class="u-flex u-ai-center u-hspace-8px u-size-13px">
                                        <span class="u-color-paste"><?= round(rand(5,10) / rand(1,4), 2) ?></span>
                                    </dd>
                                </div>
                            </dl>

                        </li>

                        <li class="u-bgcolor-fold">

                            <dl class="u-flex u-jc-between u-ai-center u-fw-wrap u-width-100pc">
                                <div class="u-grow-1 u-basis-0 u-vspace-03r u-pv-1bl u-ph-1bl">
                                    <dt class="u-color-paste u-weight-bold">Highest Rating</dt>
                                    <dd class="u-flex u-ai-center u-hspace-4px u-size-13px">
                                        <svg class="u-width-1bl u-height-auto" width="11" height="13" viewBox="0 0 11 13">
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/dist/svg/sprite.svg#rating"></use>
                                        </svg>
                                        <span class="u-color-paste"><?= 2000 - (rand(1,2) * 5 * (20 - rand(2,4))); ?></span>
                                    </dd>
                                </div>

                                <div class="u-grow-1 u-basis-0 u-vspace-03r u-pv-1bl u-ph-1bl">
                                    <dt class="u-color-paste u-weight-bold">Highest Level</dt>
                                    <dd class="u-flex u-ai-center u-hspace-8px u-size-13px">
                                        <?php
                                            $photoWidth = 1;
                                            include('components/player-photo-blank.php');
                                        ?>
                                        <span class="u-uppercase u-color-<?=$level?>"><?=$level?></span>
                                    </dd>
                                </div>

                                <div class="u-grow-1 u-basis-0 u-vspace-03r u-pv-1bl u-ph-1bl">
                                    <dt class="u-color-paste u-weight-bold"></dt>
                                    <dd class="u-flex u-ai-center u-hspace-8px u-size-13px">
                                        <span class="u-color-paste"></span>
                                    </dd>
                                </div>
                            </dl>

                        </li>
                    </dl>

                </section>

            </div>

            <hr class="c-hr" />

            <section id="results" class="o-container">

                <header class="u-flex u-jc-between u-ai-center u-ph-1bl">
                    <h1 class="u-size-h2 u-color-white">Matches</h1>
                    <a href="/profile-matches.php" class="c-go u-color-playdough">See all</a>
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
                            include('components/weekly-leaderboard-row-maybe-you.php');
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
                            include('components/alltime-leaderboard-row-maybe-you.php');
                        }

                    ?>
                </ol>

            </section>

            <?php include('components/footer.php'); ?>

        </main>

    </div>

</body>
</html>
