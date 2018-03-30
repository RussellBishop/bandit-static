<?php include('components/head.php'); ?>

<body>

    <div class="o-window">

        <?php
            $view = 'club';
            $page = 'dashboard';
            include('components/header.php');
        ?>

        <main class="o-main">

            <?php /*

            <section id="disputes" class="o-container">

                <header class="u-ph-1bl">
                    <h1 class="u-size-h2 u-color-white">Disputes</h1>
                </header>

                <dl class="u-mt-1bl u-vspace-1px u-borrad-first-2200 u-borrad-last-0022">

                    <?php include('components/dispute-active.php'); ?>
                    <?php include('components/dispute-passive.php'); ?>

                </dl>

            </section>

            */ ?>

            <section id="matches" class="o-container u-pos-relative">

                <div class="o-abscentre u-z-2">
                    <div class="c-loading">
                        <div class="c-loading__hexagon">
                            <span class="c-loading__line c-loading__line--r"></span>
                            <span class="c-loading__line c-loading__line--br"></span>
                            <span class="c-loading__line c-loading__line--bl"></span>
                            <span class="c-loading__line c-loading__line--l"></span>
                            <span class="c-loading__line c-loading__line--tl"></span>
                            <span class="c-loading__line c-loading__line--tr"></span>
                        </div>
                    </div>
                </div>

                <header class="u-flex u-jc-between u-ai-center u-ph-1bl">
                    <h1 class="u-size-h2 u-color-white">Matches</h1>
                    <a href="/matches.php" class="c-go">Go</a></a>
                </header>

                <ol class="u-mt-1bl u-vspace-1px u-borrad-first-2200 u-borrad-last-0022">
                    <?php

                        for ($i = 1; $i < 4; $i++) {
                            include('components/result-row.php');
                        }

                    ?>
                </ol>

                <footer class="u-ph-1bl">
                    <a href="/add-matches.php" class="c-button c-button--default u-mt-1bl">Add Matches</a>
                </footer>

            </section>

            <section id="weekly-leaderboard" class="o-container u-pos-relative">

                <header class="u-flex u-jc-between u-ai-center u-ph-1bl">
                    <h1 class="u-size-h2 u-color-white">Weekly <span class="u-color-steam">leaderboard</span></h1>
                    <a href="/leaderboards.php" class="c-go">Go</a></a>
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
                    <a href="/leaderboards.php" class="c-go">Go</a></a>
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
