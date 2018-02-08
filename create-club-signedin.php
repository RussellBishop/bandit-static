<?php include('components/head.php'); ?>

<body>

    <div class="o-window">

        <?php
            $view = 'forms';
            include('components/header.php');
        ?>

        <main class="o-main">

            <header class="o-container u-ph-1bl u-vspace-06r">

                <h1 class="u-size-h1 u-color-white">Create a Club</h1>
                <h2 class="u-size-h4">Let the games begin, Christy!</h2>

            </header>

            <hr class="c-hr" />

            <section class="o-container u-vspace-3bl">

                <div class="u-ph-1bl u-vspace-3bl">

                    <fieldset class="u-pos-relative">
                        <input type="text" />
                        <label>Club name:</label>
                    </fieldset>

                    <fieldset class="u-pos-relative">
                        <input type="text" placeholder="Tennis" />
                        <label>Sport:</label>
                    </fieldset>

                </div>

                <a href="/" class="c-button c-button--default">Next</a>

            </section>

            <?php include('components/footer-player.php'); ?>

        </main>

    </div>

</body>
</html>
