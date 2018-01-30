<!DOCTYPE html>
<html lang="en" class="u-bgcolor-basement">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bandit Time, Motherfucker</title>
    <link rel="stylesheet" type="text/css" href="/dist/css/main.css">

    <script>
      (function(d) {
        var config = {
          kitId: 'zgp3lhc',
          scriptTimeout: 3000,
          async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);
    </script>
</head>
<body>

    <div class="o-window u-color-blanket u-font-europa" style="margin-top: 3vw;">

        <nav>
            <div class="o-container  u-pv-1bl">
                <div class="u-ph-1bl u-flex u-jc-between">
                    <a href="/" class="u-flex u-ai-center">
                        <div class="u-pos-relative">
                            <svg class="u-width-2bl u-mr-1bl u-height-auto" width="95" height="95" viewBox="0 0 95 95"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/dist/svg/sprite.svg#logo-head"></use></svg>
                            <svg class="c-player-photo__knot u-z-1 u-pos-absolute u-top-0 u-left-0 u-width-1bl u-height-auto" width="36" height="31" viewBox="0 0 36 31"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/dist/svg/sprite.svg#logo-knot"></use></svg>
                        </div>
                        <span class="u-color-orange u-uppercase u-weight-bold">Bandit</span>
                    </a>

                    <a href="/user" class="u-flex u-ai-center u-hspace-1bl u-opac-05 u-opac-1@hover">
                        <?php include('components/player-photo.php'); ?>
                        <span class="u-color-orange u-uppercase u-weight-bold">Stephen</span>
                    </a>
                </div>
            </div>

            <?php
                $navPlayer = 'true';
                include('components/nav.php');
            ?>
        </nav>

        <main class="u-grow-1 u-bgcolor-floor u-borrad-6 u-borrad-6 u-pv-3bl u-vspace-3bl">

            <section id="disputes" class="o-container">

                <header class="u-ph-1bl">
                    <h1 class="u-size-h2 u-color-white">Disputes</h1>
                </header>

                <dl class="u-mt-1bl u-vspace-1px u-borrad-first-2200 u-borrad-last-0022">

                    <?php include('components/dispute-active.php'); ?>
                    <?php include('components/dispute-passive.php'); ?>

                </dl>

            </section>

            <section id="results" class="o-container">

                <header class="u-flex u-jc-between u-ai-center u-ph-1bl">
                    <h1 class="u-size-h2 u-color-white">Results</h1>
                    <a href="/results" class="c-go">go to</a>
                </header>

                <ol class="u-mt-1bl u-vspace-1px u-borrad-first-2200 u-borrad-last-0022">
                    <?php

                        for ($i = 1; $i < 4; $i++) {
                            include('components/result-row.php');
                        }

                    ?>
                </ol>

                <footer class="u-ph-1bl">
                    <a href="/results" class="c-button c-button--default u-mt-1bl">Add results</a>
                </footer>

            </section>

            <section id="weekly-leaderboard" class="o-container">

                <header class="u-flex u-jc-between u-ai-center u-ph-1bl">
                    <h1 class="u-size-h2 u-color-white">Weekly <span class="u-color-steam">leaderboard</span></h1>
                    <a href="/results" class="c-go">go to</a>
                </header>

                <ol class="u-mt-1bl u-vspace-1px u-borrad-first-2200 u-borrad-last-0022">
                    <?php

                        for ($i = 1; $i < 4; $i++) {
                            include('components/weekly-leaderboard-row.php');
                        }

                    ?>
                </ol>

            </section>

            <section id="alltime-leaderboard" class="o-container">

                <header class="u-flex u-jc-between u-ai-center u-ph-1bl">
                    <h1 class="u-size-h2 u-color-white">All time <span class="u-color-steam">leaderboard</span></h1>
                    <a href="/results" class="c-go">go to</a>
                </header>

                <ol class="u-mt-1bl u-vspace-1px u-borrad-first-2200 u-borrad-last-0022">
                    <?php

                        for ($i = 1; $i < 4; $i++) {
                            include('components/alltime-leaderboard-row.php');
                        }

                    ?>
                </ol>

            </section>

            <footer class="o-container u-flex u-jc-between u-ph-1bl">

                <a href="/invite" class="u-color-playdough">Invite player</a>

                <!-- <a href="/invite" class="u-color-playdough u-align-right">Create Club</a> -->

            </footer>

        </main>

    </div>

</body>
</html>
