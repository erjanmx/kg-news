<!DOCTYPE html>
<html lang="en">
<head>
    <title>title</title>
    <meta charset="utf-8">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link rel="apple-touch-icon" sizes="120x120" href="/public/logo-120.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
    <link rel="shortcut icon" sizes="48x48" href="/public/logo-48.png">
    <meta name="theme-color" content="#f60">
    <link rel="manifest" href="/manifest.json">
    <style>
        #skip a {
            position: absolute;
            left: -10000px;
            top: auto;
            width: 1px;
            height: 1px;
            overflow: hidden;
        }

        #skip a:focus {
            position: static;
            width: auto;
            height: auto;
        }
    </style>
    <style data-vue-ssr-id="336e1da2:0">
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif;
            font-size: 15px;
            background-color: #f2f3f5;
            margin: 0;
            padding-top: 55px;
            color: #34495e;
            overflow-y: scroll;
        }

        a {
            color: #34495e;
            text-decoration: none;
        }

        .header {
            background-color: #f60;
            position: fixed;
            z-index: 999;
            height: 55px;
            top: 0;
            left: 0;
            right: 0;
        }

        .header .inner {
            max-width: 800px;
            box-sizing: border-box;
            margin: 0px auto;
            padding: 15px 5px;
        }

        .header a {
            color: rgba(255, 255, 255, 0.8);
            line-height: 24px;
            transition: color 0.15s ease;
            display: inline-block;
            vertical-align: middle;
            font-weight: 300;
            letter-spacing: 0.075em;
            margin-right: 1.8em;
        }

        .header a:hover {
            color: #fff;
        }

        .header a.router-link-active {
            color: #fff;
            font-weight: 400;
        }

        .header a:nth-child(6) {
            margin-right: 0;
        }

        .header .github {
            color: #fff;
            font-size: 0.9em;
            margin: 0;
            float: right;
        }

        .logo {
            width: 24px;
            margin-right: 10px;
            display: inline-block;
            vertical-align: middle;
        }

        .view {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
        }

        .fade-enter-active,
        .fade-leave-active {
            transition: all 0.2s ease;
        }

        .fade-enter,
        .fade-leave-active {
            opacity: 0;
        }

        @media (max-width: 860px) {
            .header .inner {
                padding: 15px 30px;
            }
        }

        @media (max-width: 600px) {
            .header .inner {
                padding: 15px;
            }

            .header a {
                margin-right: 1em;
            }

            .header .github {
                display: none;
            }
        }
    </style>
    <style data-vue-ssr-id="1920cfc6:0">
        .news-list-nav,
        .news-list {
            background-color: #fff;
            border-radius: 2px;
        }

        .news-list-nav {
            padding: 15px 30px;
            position: fixed;
            text-align: center;
            top: 55px;
            left: 0;
            right: 0;
            z-index: 998;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
        }

        .news-list-nav a {
            margin: 0 1em;
        }

        .news-list-nav .disabled {
            color: #ccc;
        }

        .news-list {
            position: absolute;
            margin: 30px 0;
            width: 100%;
            transition: all 0.5s cubic-bezier(0.55, 0, 0.1, 1);
        }

        .news-list ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .slide-left-enter,
        .slide-right-leave-to {
            opacity: 0;
            -ms-transform: translate(30px, 0);
            transform: translate(30px, 0);
        }

        .slide-left-leave-to,
        .slide-right-enter {
            opacity: 0;
            -ms-transform: translate(-30px, 0);
            transform: translate(-30px, 0);
        }

        .item-move,
        .item-enter-active,
        .item-leave-active {
            transition: all 0.5s cubic-bezier(0.55, 0, 0.1, 1);
        }

        .item-enter {
            opacity: 0;
            -ms-transform: translate(30px, 0);
            transform: translate(30px, 0);
        }

        .item-leave-active {
            position: absolute;
            opacity: 0;
            -ms-transform: translate(30px, 0);
            transform: translate(30px, 0);
        }

        @media (max-width: 600px) {
            .news-list {
                margin: 10px 0;
            }
        }
    </style>
    <style data-vue-ssr-id="7b5c9bfb:0">
        .news-item {
            background-color: #fff;
            padding: 20px 30px 20px 80px;
            border-bottom: 1px solid #eee;
            position: relative;
            line-height: 20px;
        }

        .news-item .score {
            color: #f60;
            font-size: 1.1em;
            font-weight: 700;
            position: absolute;
            top: 50%;
            left: 0;
            width: 80px;
            text-align: center;
            margin-top: -10px;
        }

        .news-item .meta,
        .news-item .host {
            font-size: 0.85em;
            color: #828282;
        }

        .news-item .meta a,
        .news-item .host a {
            color: #828282;
            text-decoration: underline;
        }

        .news-item .meta a:hover,
        .news-item .host a:hover {
            color: #f60;
        }
    </style>
</head>
<body>
<header class="header">
    <nav class="inner"><a href="/" class="">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAIAAADYYG7QAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA4JpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMDE0IDc5LjE1Njc5NywgMjAxNC8wOC8yMC0wOTo1MzowMiAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo3RDBBRDcwNDU4NEMxMUU2ODdFNjg5OTYwMjlGNjQ0QSIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo1NTU3NUVGQUEyRDIxMUU2ODlEMUJBMUE3RTYxMkU1OSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo1NTU3NUVGOUEyRDIxMUU2ODlEMUJBMUE3RTYxMkU1OSIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ0MgMjAxNCAoTWFjaW50b3NoKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjE2NTUwMDE5LTVjNjQtNGRiNy1iNjhjLTQ1ZWIxYzkxM2FiYiIgc3RSZWY6ZG9jdW1lbnRJRD0iYWRvYmU6ZG9jaWQ6cGhvdG9zaG9wOmJlZDc4OTczLWViM2ItMTE3OS04YzQyLWNlMTYwYmQ0NTQ1NSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pv38lU4AAAMkSURBVHja7FnbSxRRGP+N666upqUECWK+mUqbmxbRQ4QmFEFQmtZDEPQcvfQ/9BL1WO920SyCjJCIyC5iXsmVMjVB8pbVqnhBc2dm+84azHzjbszsupPBfA8L8ztnzvzmu/zON2elcDiMrWQp2GK25QilsqvQKmB/BCW408SvkZC8iptVCE7CJdlHhjI4LQNXXyE7bwMhGguOYWba4LXkmgp43VCVGCFzeQRgM6FUj1NlDiGH0L9T6r/YWqRE9aapa7RiXuOIC/CY2gVMEyqrRnqWdqmE8PE55FAUTsQmKxdFRxk4N47RHkFrcwjRFnf4Ig5dYOCNSgy0CT8Z7Bdw4hJqrzOw6TIGe+DdrBwiN7y5bQQP1BmDiEhQKDTlZxm4PIvuJng2MalprZFOTAYYuO8UsjOMnGSgoBSFFQwMtOBH0Ey8rHhoRUHnPQbmFKDoCEJ8Jl2WnUYKz4T3Dear2fREclJvc6Rh0llFPfMQxStdQnktm/NtCEPvTMbLCiF656kxfH7JQN9J5GRpnMg9hT4U+Nmc7kYshyAlQxjViPP1Rl3VnkpNciiB/DWQdGsqa+hphDtJSk1uH2jFwjSvtXotXhku7K9hoyNvMT6cNEI0d34RfY8ZWHocuTlQ1uPlR/5eNtrRINyWxL2MSrfzLkO27URJtWBDnEQ665Jl6ScCT82nc1yEyPmjXRj/wKN2LhKvVPjPMLz/CYJzJuUnXkL0/quq0Uklx7A9E7vLkFfM5edOHM2E9TvISX0PEVrREO8OFFcJCdDb9CeMtFuNV1yEhCB9xeALBlZdQXkdQ7ruY1mGZAOh9Qrv4IJEeZ3v0+1oJD8PLFV7YoQoENQMzU/FnDDchokvNhISgrSEvkcxJ5CgKzb31H8EKVpPuvgdgWdxpHNihIQg9WIiEGWovwWz81blx3pPvVGQZBWt13DwvHHo9a1ETgcSuJW66Y5mtDdHWdIT/zFTYicd7ti64Hy5OoQcQlGrTFVEJ6/a+HzxODkWIUkcJ3gz7T70TM+EpLUpku6/jjAWZqDI+uGkGz2dPpuydyHFtZGQk9T/BaHfAgwAytLfbeiDo+IAAAAASUVORK5CYII="
                 alt="logo" class="logo"></a>
    </nav>
</header>
@yield('content')
</body>
</html>
