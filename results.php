<?php include('components/head.php'); ?>

<body>

    <div class="o-window">

        <?php
            $view = 'club';
            $page = 'results';
            include('components/header.php');
        ?>

        <main class="o-main">

            <header class="o-container u-ph-1bl">

                <div class="u-vspace-06r">
                    <h1 class="u-size-h1 u-color-white">Club Results</h1>
                    <h2 class="u-size-h4">Who’s been collecting scalps lately?</h2>
                </div>

                <a href="/add-results.php" class="c-button c-button--default u-mt-2bl">Add results</a>

            </header>

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

            <?php include('components/footer.php'); ?>

        </main>

    </div>

</body>
</html>
