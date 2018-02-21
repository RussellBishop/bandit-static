<!DOCTYPE html>
<html lang="en" class="u-bgcolor-basement">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <title>Bandit Time, Motherfucker</title>
    <link rel="stylesheet" type="text/css" href="/dist/css/main.css">
    <link rel="stylesheet" href="https://use.typekit.net/zgp3lhc.css">

    <meta name="theme-color" content="#000207" />

    <link rel="shortcut icon" href="/favicon.ico?2=yes">
    <link rel="shortcut icon" sizes="192x192" href="/favicon@196w.png">
    <link rel="shortcut icon" sizes="128x128" href="/favicon@128w.png">

    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

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

    $('input').keyup(function() {
        console.log('input change');

        var empty = $(this).closest('div[title]').find("input").filter(function() {
            return this.value === "";
            console.log('// No inputs are empty');
        });

        if(empty.length) {
            console.log('// At least one input is empty');
        }
    });

</script>

</head>

<?php include('data/data.php'); ?>
