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

                <header class="o-container u-ph-1bl">

                <div class="u-flex u-ai-center u-jc-between">

                    <div class="u-vspace-06r">
                        <h1 class="u-size-h1 u-color-white">Club Players</h1>
                        <h2 class="u-size-h4">Who to play ball with?</h2>
                    </div>

                </div>

            </header>

            </div>

            <hr class="c-hr" />

            <section class="o-container u-vspace-3bl">

                <div class="u-vspace-2bl">

                    <div class="u-vspace-1px">
                        <?php include('components/add-result-row.php'); ?>
                        <?php include('components/add-result-row.php'); ?>
                    </div>

                    <div class="u-flex u-ai-center u-ph-1bl u-hspace-05bl u-size-14px">
                        <span>Monday 11th January 2017</span>
                    </div>

                    <a href="#add-result" class="c-button" disabled>Add Result</a>

                </div>

            </section>

            <?php include('components/footer.php'); ?>

        </main>

    </div>

</body>
</html>
