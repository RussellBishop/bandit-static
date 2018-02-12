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

                <a href="/matches.php" class="u-color-playdough">Back to Matches</a>

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

                <footer class="u-ph-1bl">
                    <a href="#open-dispute" class="c-button c-button--warning u-mt-1bl">Dispute match</a>
                </footer>

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
                            <h1 id="start-dispute" class="u-size-h1 u-color-white">Dispute</h1>

                            <a href="#" class="u-color-hotmelon">Cancel</a>
                        </header>

                    </div>

                    <nav class="u-bgcolor-fold u-pt-2bl">
                        <ul class="u-flex u-ph-1bl u-hspace-1bl">
                            <li class="u-grow-1"><a href="#" class="u-block u-width-100pc u-align-left u-pv-1bl u-ph-1bl u-borrad-3300 u-size-h4 u-color-white u-bgcolor-floor">Wrong scores</a></li>
                            <li class="u-grow-1"><a href="#" class="u-block u-width-100pc u-align-left u-pv-1bl u-ph-1bl u-color-playdough u-color-white@hover u-bgcolor-floor05 u-borrad-3300 u-size-h4">Didn't happen</a></li>
                        </ul>
                    </nav>

                    <div class="o-container u-vspace-3bl">

                        <div class="u-vspace-2bl">

                            <p class="u-ph-1bl">What <em>were</em> the scores, Christy?</p>

                            <div class="u-borrad-first-2200 u-borrad-last-0022">
                                <?php include('components/new-score-row.php'); ?>
                            </div>

                        </div>

                        <div class="u-ph-1bl u-vspace-2bl">

                            <div class="u-pos-relative u-vspace-2bl">
                                <p class="u-size-h4"><label>Comments:</label></p>
                                <textarea placeholder="Tell us what went down" class="u-width-100pc u-height-5rem"></textarea>
                            </div>

                            <div class="u-flex u-ai-center u-hspace-05bl u-size-14px">
                                <?php $photoWidth = 2; include('components/player-photo.php'); ?>
                                <span class="o-dictate">Christy Quinn</span> <span>will have 24 hours to respond to your dispute.</span>
                            </div>

                            <a href="#start-dispute" class="c-button c-button--default">Start dispute</a>

                        </div>

                    </div>

                </section>

            </section>

            <?php include('components/footer.php'); ?>

        </main>

    </div>

</body>
</html>
