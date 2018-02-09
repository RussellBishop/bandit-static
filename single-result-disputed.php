<?php include('components/head.php'); ?>

<body>

    <div class="o-window">

        <?php
            $view = 'club';
            $page = 'results';
            include('components/header.php');
        ?>

        <main class="o-main">

            <div class="o-container u-ph-1bl u-vspace-2bl">

                <a href="/results.php" class="u-color-playdough">Back to Results</a>

            </div>

            <hr class="c-hr" />

            <section class="o-container u-vspace-3bl">

                <div class="u-vspace-2bl">

                    <dl class="u-flex u-hspace-1px u-borrad-first-2002 u-borrad-last-0220">
                        <li class="u-flex u-fd-col u-grow-1 u-basis-0 u-ai-center u-pv-2bl u-bgcolor-fold u-vspace-1bl">

                            <a href="/single-player.php">
                                <?php
                                    $photoWidth = 4;
                                    include('components/player-photo.php');
                                ?>
                            </a>

                            <dt>
                                <h2 class="u-color-paste"><a href="/single-player.php">Teddy Brompsky</a></h2>
                            </dt>

                            <dd>
                                <p class="u-size-h1 u-color-white">3</p>
                            </dd>

                        </li>

                        <li class="u-flex u-fd-col u-grow-1 u-basis-0 u-ai-center u-pv-2bl u-bgcolor-fold05 u-vspace-1bl">

                            <a href="/single-player.php">
                                <?php
                                    $photoWidth = 4;
                                    include('components/player-photo.php');
                                ?>
                            </a>

                            <dt>
                                <h2 class="u-color-paste"><a href="/single-player.php">Angelica Thompson</a></h2>
                            </dt>

                            <dd>
                                <p class="u-size-h1 u-color-white">2</p>
                            </dd>

                        </li>
                    </dl>

                    <dl class="u-flex u-jc-between u-ph-1bl">

                        <li class="u-flex u-ai-center u-hspace-05bl">
                            <dt>Submitted by </dt>
                            <dd><?php $photoWidth = 2; include('components/player-photo.php'); ?> <span class="o-dictate">Christy Quinn</span></dd>
                        </li>

                        <li>
                            <dt class="o-dictate">Submitted on </dt>
                            <dd>Monday 11th January 2017</dd>
                        </li>

                    </dl>

                </div>

            </section>

            <hr class="c-hr" />

            <section>

                <style>
                    #open-dispute {
                        display: none;
                    }
                    #open-dispute:target {
                        display: block;
                    }
                </style>

                <section id="open-dispute" class="u-vspace-2bl">

                    <div class="o-container u-ph-1bl">

                        <header class="u-flex u-jc-between u-ai-center">
                            <h1 id="start-dispute" class="u-size-h1 u-color-white">Disputed Match</h1>
                        </header>

                    </div>

                    <div class="o-container u-vspace-3bl">

                        <div class="u-vspace-2bl">

                            <div class="u-flex u-ai-center u-ph-1bl u-hspace-05bl u-size-14px">
                                <span>Disputed by</span>
                                <?php $photoWidth = 2; include('components/player-photo.php'); ?>
                                <span class="o-dictate">Christy Quinn</span>
                            </div>

                            <div class="u-borrad-first-2200 u-borrad-last-0022">
                                <?php include('components/result-row.php'); ?>
                            </div>

                            <div class="u-vspace-1bl u-ph-1bl">

                                <div class="u-flex u-ai-center u-hspace-05bl">
                                    <?php $photoWidth = 2; include('components/player-photo.php'); ?>
                                    <span>Christy's comment:</span>
                                </div>

                                <p class="u-line-105">&ldquo;Sorry jess - you won the first, we levelled 1-1, then you won, I equalised, and that’s why we played the 5th and final game for <?=$winningScore?>-<?=$losingScore?>.&rdquo;</p>

                            </div>

                        </div>

                        <div class="u-ph-1bl u-vspace-1bl">

                            <a href="#start-dispute" class="c-button c-button--default">Accept Score</a>

                            <a href="#start-dispute" class="c-button c-button--warning">Disagree</a>

                        </div>

                    </div>

                </section>

            </section>

            <?php include('components/footer.php'); ?>

        </main>

    </div>

</body>
</html>
