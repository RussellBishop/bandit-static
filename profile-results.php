<?php include('components/head.php'); ?>

<body>

    <div class="o-window">

        <?php
            $view = 'player';
            $page = 'profile';
            include('components/header.php');
        ?>

        <main class="o-main">

            <div class="o-container u-vspace-3bl">

                <a href="/profile.php" class="u-color-playdough">Back to Profile</a>

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

            </div>

            <hr class="c-hr" />

            <section class="o-container">

                <header class="u-flex u-jc-between u-ai-center u-ph-1bl">
                    <h1 class="u-size-h2 u-color-white">Sunday 18th</h1>
                </header>

                <ol class="u-mt-1bl u-vspace-1px u-borrad-first-2200 u-borrad-last-0022">
                    <?php

                        for ($i = 1; $i < rand(2,11); $i++) {
                            include('components/result-row.php');
                        }

                    ?>
                </ol>

            </section>

            <section class="o-container">

                <header class="u-flex u-jc-between u-ai-center u-ph-1bl">
                    <h1 class="u-size-h2 u-color-white">Saturday 17th</h1>
                </header>

                <ol class="u-mt-1bl u-vspace-1px u-borrad-first-2200 u-borrad-last-0022">
                    <?php

                        for ($i = 1; $i < rand(2,11); $i++) {
                            include('components/result-row.php');
                        }

                    ?>
                </ol>

            </section>

            <section class="o-container">

                <header class="u-flex u-jc-between u-ai-center u-ph-1bl">
                    <h1 class="u-size-h2 u-color-white">Thursday 14th</h1>
                </header>

                <ol class="u-mt-1bl u-vspace-1px u-borrad-first-2200 u-borrad-last-0022">
                    <?php

                        for ($i = 1; $i < rand(2,11); $i++) {
                            include('components/result-row.php');
                        }

                    ?>
                </ol>

            </section>

            <footer class="o-container u-ph-1bl">
                <a href="/results.php" class="c-button c-button--default u-mt-2bl">Load more&hellip;</a>
            </footer>

            <?php include('components/footer.php'); ?>

        </main>

    </div>

</body>
</html>
