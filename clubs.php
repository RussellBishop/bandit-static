<?php include('components/head.php'); ?>

<body>

    <div class="o-window">

        <?php
            $view = 'player';
            $page = 'clubs';
            include('components/header.php');
        ?>

        <main class="o-main">

            <header class="o-container u-ph-1bl u-vspace-06r">

                <h1 class="u-size-h1 u-color-white">Clubs</h1>
                <h2 class="u-size-h4">Need to jump into a different tribe?</h2>

            </header>

            <hr class="c-hr" />

            <section class="o-container u-vspace-3bl">

                <div class="u-ph-1bl u-vspace-1px">

                    <?php include('components/club-active.php'); ?>
                    <?php include('components/club-passive.php'); ?>
                    <?php include('components/club-passive.php'); ?>
                    <?php include('components/club-passive.php'); ?>

                </div>

            </section>

            <?php include('components/footer-player.php'); ?>

        </main>

    </div>

</body>
</html>
