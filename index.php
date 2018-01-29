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
            <div class="o-container u-flex u-jc-between u-pv-1bl">
                <a href="/" class="u-flex u-ai-center">
                    <svg class="u-width-2bl u-mr-1bl u-height-auto" width="95" height="95" viewBox="0 0 95 95"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/dist/svg/sprite.svg#logo-head"></use></svg>
                    <span class="u-color-orange u-uppercase u-weight-bold">Bandit</span>
                </a>

                <a href="/user" class="u-flex u-ai-center">
                    <div class="c-player-photo u-width-2bl u-mr-1bl" aria-hidden="true" style="background-image: url('https://pbs.twimg.com/profile_images/948246178948362241/UJO1XYgk_400x400.jpg');">

                    </div>
                    <span class="u-color-orange u-uppercase u-weight-bold">Stephen</span>
                </a>
            </div>

            <div class="u-ovx-auto">
                <ul class="u-flex u-ph-1bl u-hspace-1bl">
                    <li><a href="/" class="u-block u-pv-1bl u-ph-1bl u-borrad-3300 u-size-h4 u-color-white u-bgcolor-floor">Dashboard</a></li>
                    <li><a href="/" class="u-block u-pv-1bl u-ph-1bl u-color-white@hover u-bgcolor-floor05@hover u-borrad-3300 u-size-h4">Results</a></li>
                    <li><a href="/" class="u-block u-pv-1bl u-ph-1bl u-color-white@hover u-bgcolor-floor05@hover u-borrad-3300 u-size-h4">Leaderboards</a></li>
                    <li><a href="/" class="u-block u-pv-1bl u-ph-1bl u-color-white@hover u-bgcolor-floor05@hover u-borrad-3300 u-size-h4">Players</a></li>
                </ul>
            </div>
        </nav>

        <main class="u-grow-1 u-bgcolor-floor u-borrad-6 u-borrad-6 u-pv-3bl u-vspace-3bl">

            <section id="disputes" class="o-container">

                <header class="u-ph-1bl">
                    <h1 class="u-size-h2 u-color-white">Disputes</h1>
                </header>

                <dl class="u-mt-1bl u-vspace-1px u-borrad-first-2200 u-borrad-last-0022">
                    <li class="u-bgcolor-fold">
                        <a href="/dispute" class="u-flex u-ai-center u-pv-1bl u-ph-1bl">
                            <div class="c-player-photo u-width-3bl u-mr-1bl" aria-hidden="true" style="background-image: url('https://pbs.twimg.com/profile_images/948246178948362241/UJO1XYgk_400x400.jpg');">
                            </div>
                            <div class="u-grow-1 u-vspace-03r">
                                <dt class="u-color-paste"><span class="o-dictate">Dispute with </span>Rebekah Reeves</dt>
                                <dd class="u-size-14px"><span class="o-dictate">You have </span>4 hours to respond</dd>
                            </div>
                        </a>
                    </li>
                    <li class="u-bgcolor-fold u-opac-05 u-opac-1@hover">
                        <a href="/dispute" class="u-flex u-ai-center u-pv-1bl u-ph-1bl">
                            <div class="c-player-photo u-width-3bl u-mr-1bl" aria-hidden="true" style="background-image: url('https://pbs.twimg.com/profile_images/948246178948362241/UJO1XYgk_400x400.jpg');">
                            </div>
                            <div class="u-grow-1 u-vspace-03r">
                                <dt class="u-color-paste"><span class="o-dictate">Dispute with </span>Rebekah Reeves</dt>
                                <dd class="u-size-14px">You have responded</dd>
                            </div>
                        </a>
                    </li>
                </dl>

            </section>

            <section id="results" class="o-container">

                <header class="u-flex u-jc-between u-ai-center u-ph-1bl">
                    <h1 class="u-size-h2 u-color-white">Results</h1>
                    <a href="/results">go to</a>
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
                    <a href="/results">go to</a>
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
                    <a href="/results">go to</a>
                </header>

                <ol class="u-mt-1bl u-vspace-1px u-borrad-first-2200 u-borrad-last-0022">
                    <?php

                        for ($i = 1; $i < 4; $i++) {
                            include('components/alltime-leaderboard-row.php');
                        }

                    ?>
                </ol>

            </section>

        </main>

    </div>

</body>
</html>
