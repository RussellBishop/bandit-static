<?php include('components/head.php'); ?>

<body>

    <div class="o-window">

        <?php
            $view = 'club';
            $page = 'players';
            include('components/header.php');
        ?>

        <main class="o-main">

            <div class="o-container u-ph-1bl u-vspace-2bl">

                <a href="/players.php" class="u-color-playdough">Back to Players</a>

                <header class="u-vspace-06r">

                    <h1 class="u-size-h1 u-color-white">Invite Player</h1>
                    <h2 class="u-size-h4">Friendships end &mdash; where Bandit begins.</h2>

                </header>

            </div>

            <hr class="c-hr" />

            <section class="o-container u-vspace-3bl">

                <div class="u-ph-1bl u-vspace-3bl">

                    <fieldset class="u-pos-relative">
                        <input type="text" />
                        <label>Name:</label>
                    </fieldset>

                    <fieldset class="u-pos-relative">
                        <input type="email" />
                        <label>Email:</label>
                    </fieldset>

                </div>

                <a href="/" class="c-button c-button--default">Send invite</a>

            </section>

            <?php include('components/footer-player.php'); ?>

        </main>

    </div>

</body>
</html>
