<?php include('components/head.php'); ?>

<body>

    <div class="o-window">

        <?php
            $view = 'club';
            $page = 'matches';
            include('components/header.php');
        ?>

        <main class="o-main">

            <div class="o-container u-ph-1bl u-vspace-2bl">

                <a href="/matches.php" class="c-go c-go--default">Back</a>

                <header>

                    <div class="u-flex u-ai-center u-jc-between">

                        <div class="u-vspace-06r">
                            <h1 class="u-size-h1 u-color-white">Add Matches</h1>
                            <h2 class="u-size-h4">Get those games in, Stephen!</h2>
                        </div>

                    </div>

                </header>

            </div>

            <div class="c-info">

                <div class="o-container u-ph-1bl u-pv-2bl u-color-puss u-line-105">

                    <h3 class="u-size-h4">What’s the score <em>if</em>&hellip;?</h3>

                    <ol class="u-vspace-mt-">
                        <li>You won <strong class="u-color-white">5 games</strong></li>
                        <li>Your opponent won <strong class="u-color-white">3 games</strong></li>
                        <li>Score is <strong class="u-color-white">5 &ndash; 3</strong></li>
                    </ol>

                </div>

            </div>

            <?php /* hr class="c-hr" /> */ ?>

            <section class="o-container u-vspace-3bl">

                <div class="u-vspace-2bl">

                    <div class="u-vspace-1px">
                        <div title>
                            <?php include('components/add-result-row.php'); ?>
                        </div>
                        <?php /*
                        <div title class="u-opac-02">
                            <?php $disabled = true; ?>
                            <?php include('components/add-result-row.php'); ?>
                        </div>
                        */ ?>
                    </div>

                    <div class="u-flex u-ai-center u-ph-1bl u-hspace-05bl u-size-14px">
                        <span>Monday 11th January 2017</span>
                    </div>

                    <?php /*
                    <a href="#add-result" class="c-button c-button--loading">
                        <div class="o-abscentre u-z-2">
                            <div
                            class="c-loading"
                            style="--loadingWidth: 2rem; --lineWidth: 20%; --cycleTime: 0.4s;">
                                <div class="c-loading__hexagon">
                                    <span class="c-loading__line"></span>
                                    <span class="c-loading__line"></span>
                                    <span class="c-loading__line"></span>
                                    <span class="c-loading__line"></span>
                                    <span class="c-loading__line"></span>
                                    <span class="c-loading__line"></span>
                                </div>
                            </div>
                        </div>
                    Add Result</a>
                    */ ?>

                    <a href="#add-result" class="c-button c-button--default">Add Result</a>

                </div>

            </section>

            <?php include('components/footer.php'); ?>

        </main>

    </div>

</body>
</html>
