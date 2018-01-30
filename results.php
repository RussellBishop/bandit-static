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
                    <h1 class="u-size-h1 u-color-white">Club Results</h1>
                    <h2 class="u-size-h">Who’s been collecting scalps lately?</h2>
                </div>

                <a href="/results" class="c-button c-button--default u-mt-2bl">Add results</a>

            </header>

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
