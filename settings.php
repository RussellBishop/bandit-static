<?php include('components/head.php'); ?>

<body>

    <div class="o-window">

        <?php
            $view = 'player';
            include('components/header.php');
        ?>

        <main class="o-main">

            <header class="o-container u-ph-1bl u-vspace-06r">

                <h1 class="u-size-h1 u-color-white">Settings</h1>
                <h2 class="u-size-h4">Be your true self! Unless that person is a loser.</h2>

            </header>

            <hr class="c-hr" />

            <section class="o-container u-vspace-3bl">

                <fieldset class="u-pos-relative">
                    <input type="text" value="Christy Quinn" placeholder="Christy Quinn" required />
                    <label>Name</label>
                </fieldset>

                <fieldset class="u-pos-relative">
                    <input type="email" value="christyjquinn@gmail.com" placeholder="christyjquinn@gmail.com" required />
                    <label>Email address</label>
                </fieldset>

                <fieldset class="u-flex u-hspace-2bl u-jc-between">

                    <div class="u-pos-relative" style="flex: 1 0 0;">
                        Test
                        <?php /* <input type="password" />
                        <label>New password</label> */ ?>
                    </div>

                    <div class="u-pos-relative" style="flex: 1 0 0;">
                        Test
                        <?php /* <input type="password" />
                        <label>Re-type</label> */ ?>
                    </div>

                </fieldset>

            </section>

            <?php include('components/footer.php'); ?>

        </main>

    </div>

</body>
</html>
