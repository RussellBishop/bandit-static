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

    <div class="o-window">

        <?php include('components/header.php'); ?>

        <main class="u-grow-1 u-bgcolor-floor u-borrad-6 u-pv-3bl u-vspace-3bl">

            <header class="o-container u-ph-1bl">

                <div class="u-vspace-06r">
                    <h1 class="u-size-h1 u-color-white">Club Leaderboards</h1>
                    <h2 class="u-size-h">Where competition trumps friendship.</h2>
                </div>

            </header>

            <nav class="u-bgcolor-fold u-pt-2bl">
                <ul class="u-flex u-ph-1bl u-hspace-1bl">
                    <li class="u-grow-1"><a href="/" class="u-block u-pv-1bl u-ph-1bl u-borrad-3300 u-size-h3 u-color-white u-bgcolor-floor">Weekly</a></li>
                    <li class="u-grow-1"><a href="/results.php" class="u-block u-pv-1bl u-ph-1bl u-color-white@hover u-bgcolor-floor05@hover u-borrad-3300 u-size-h3">All-time</a></li>
                </ul>
            </nav>

            <section id="weekly-leaderboard" class="o-container">

                <dl class="u-vspace-3bl">
                    <dt>Monday 8th - Sunday 15th September</dt>
                    <dd>
                        <li>
                            <ol class="u-mt-1bl u-vspace-1px u-borrad-first-2200 u-borrad-last-0022">
                                <?php

                                    for ($i = 1; $i < 4; $i++) {
                                        include('components/weekly-leaderboard-row.php');
                                    }

                                ?>
                            </ol>
                        </li>
                    </dd>
                </dl>

            </section>

            <?php include('components/footer.php'); ?>

        </main>

    </div>

</body>
</html>
