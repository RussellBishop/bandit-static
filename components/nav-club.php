<div class="u-pos-relative">
    <div class="c-fade c-fade--left" style="width: 0;"></div>
    <div class="c-fade c-fade--right"></div>
    <div class="o-scroll-overflow">
        <ul class="u-flex u-ph-1bl u-hspace-1bl">
            <li><a href="/" class="c-tab c-tab--<?=($page==='dashboard'?'active':'inactive')?>">Dashboard</a></li>
            <li><a href="/profile.php" class="c-tab c-tab--<?=($page==='profile'?'active':'inactive')?>">Profile</a></li>
            <li><a href="/matches.php" class="c-tab c-tab--<?=($page==='matches'?'active':'inactive')?>">Matches</a></li>
            <li><a href="/leaderboards.php" class="c-tab c-tab--<?=($page==='leaderboards'?'active':'inactive')?>">Leaderboards</a></li>
            <li><a href="/players.php" class="c-tab c-tab--<?=($page==='players'?'active':'inactive')?>">Players</a></li>
            <?php /* <li><a href="/club-info.php" class="c-tab c-tab--<?=($page==='club'?'active':'inactive')?>">Club</a></li> */ ?>
            <li aria-hidden="true">&nbsp;</li>
        </ul>
    </div>
</div>
