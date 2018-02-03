<footer>

    <hr class="c-hr" />

    <div class="o-container u-flex u-jc-between u-ai-center u-ph-1bl u-pv-2bl">

        <select class="u-color-playdough">
            <option selected="">Britannia Squash</option>
            <optgroup label="Switch club:">
                <option>Shoreditch Park Squash</option>
                <option>Coolhurst London Premier League Squash</option>
            </optgroup>
        </select>

        <a href="/invite" class="u-color-playdough">Invite player</a>

    </div>

</footer>


<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

<script>

    $.fn.extend({
        scrollRight: function (val) {
            if (val === undefined) {
                return this[0].scrollWidth - (this[0].scrollLeft + this[0].clientWidth) + 1;
            }
            return this.scrollLeft(this[0].scrollWidth - this[0].clientWidth - val);
        }
    });

    var elem = $('.o-scroll-overflow');

    elem.scroll(function() {
       if(elem.scrollLeft() > 1) {
            $('.c-fade--left').css('width', '4rem');
       } else {
            $('.c-fade--left').css('width', '0');
       }
    });

    elem.scroll(function() {
        if(elem.scrollRight() > 1) {
            $('.c-fade--right').css('width', '4rem');
       } else {
            $('.c-fade--right').css('width', '0');
       }
    });

</script>
