<?php include('components/head.php'); ?>

<body>

    <div class="o-window">

        <?php
            $view = 'club';
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
                                <h2><a href="/single-player.php">Teddy Brompsky</a></h2>
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
                                <h2><a href="/single-player.php">Angelica Thompson</a></h2>
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
                    <a href="/results.php" class="c-button c-button--warning u-mt-1bl">Delete match</a>
                </footer>

            </section>

            <?php include('components/footer.php'); ?>

        </main>

    </div>

</body>
</html>
