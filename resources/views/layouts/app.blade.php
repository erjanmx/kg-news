<!DOCTYPE html>
<html lang="ru" xmlns:v-on="http://www.w3.org/1999/xhtml" xmlns:v-bind="http://www.w3.org/1999/xhtml">
<head>
    <title>Новости Кыргызстан - KG-News</title>
    <meta name="description" content="Новостной агрегатор: актуальные новости Кыргызстана в режиме онлайн" />
    <meta name="keywords" content="новости Кыргызстана,новости Киргизии,новостной агрегатор,новости,агрегатор новостей,сми Кыргызстана,заноза,24.кг,акипресс,kloop" />
    <meta name="generator" content="Новостной агрегатор Кыргызстана" />
    <meta name="yandex-verification" content="f23d1ea06271ed31" />

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="HandheldFriendly" content="true" />

    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="theme-color" content="#f60">
{{--     <link rel="stylesheet" type="text/css" href="{{ url() }}/css/tooltipster.bundle.css" />
    <link href="{{ url() }}/compiled/styles.css?_={{ rand() }}" rel="stylesheet">
 --}}</head>

<body>
<script type="text/x-template" id="modal-template">
    <transition name="modal">
        <div class="modal-mask">
            <div class="modal-wrapper">
                <div class="modal-container">
                    <a @click="$emit('close')" class="boxclose" id="boxclose"></a>
                    <div class="modal-body">
                        <form action="/" class="form-wrapper cf">
                            <input name="q" value="{{ app('request')->input('q') }}" type="text" placeholder="Поиск...">
                            <button type="submit">Найти</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </transition>
</script>

@yield('content')
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
<script type="text/javascript" src="/js/tooltipster.bundle.js"></script>
<script src="compiled/app.js"></script>
{{--<script src="compiled/app.js?_={{ rand() }}"></script>--}}
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-100329126-1', 'auto');
    ga('send', 'pageview');

</script>
<script>
    $(document).ready(function() {
    $('.tooltip').tooltipster();
    });
</script>
</body>
</html>
