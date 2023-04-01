<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <!-- 基础信息 -->
    <meta charset="utf-8">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <!-- 强制 HTTPS，若不需要可删除，但可能出现问题 -->
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="renderer" content="webkit" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="force-rendering" content="webkit" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#424242" />
    <meta name="description" content="一个默默无闻的主页">
    <meta name="keywords" content="松子分享,个人主页">
    <meta name="author" content="松子分享">
    <title>松子分享の主页</title>
    <!-- jQuery -->
    <script src="https://lf9-cdn-tos.bytecdntp.com/cdn/expire-1-y/jquery/3.5.1/jquery.min.js"></script>
    <!-- 引入样式 -->
    <link rel="stylesheet" type="text/css"
        href="https://lf9-cdn-tos.bytecdntp.com/cdn/expire-1-y/bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/mobile.css">
    <link rel="stylesheet" type="text/css" href="./css/loading.css">
    <link rel="stylesheet" type="text/css" href="./css/animation.css">
    <link rel="icon" href="./favicon.ico">
    <link rel="apple-touch-icon" href="./img/icon/apple-touch-icon.png">
    <!-- Izitoast -->
    <link rel="stylesheet" href="https://lf3-cdn-tos.bytecdntp.com/cdn/expire-1-y/izitoast/1.4.0/css/iziToast.min.css">
    <script type="text/javascript"
        src="https://lf26-cdn-tos.bytecdntp.com/cdn/expire-1-y/izitoast/1.4.0/js/iziToast.min.js">
    </script>
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <!-- Aplayer -->
    <link rel="stylesheet" href="https://lf9-cdn-tos.bytecdntp.com/cdn/expire-1-y/aplayer/1.10.1/APlayer.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://lf3-cdn-tos.bytecdntp.com/cdn/expire-1-y/aplayer/1.10.1/APlayer.min.js" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
    <!-- <script src="./js/Meting.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <!-- IE Out -->
    <script>
        if ( /*@cc_on!@*/ false || (!!window.MSInputMethodContext && !!document.documentMode)) window.location.href =
            "/upgrade-your-browser/index.html?referrer=" + encodeURIComponent(window.location.href);
    </script>
    <!-- PWA -->
    <link rel="manifest" href="./manifest.json">
    <!-- 百度统计 -->
    <script>
        var _hmt = _hmt || [];
        (function() {
          var hm = document.createElement("script");
          hm.src = "https://hm.baidu.com/hm.js?429170a799c12d9a0308599b6d9b35c0";
          var s = document.getElementsByTagName("script")[0]; 
          s.parentNode.insertBefore(hm, s);
        })();
    </script>
</head>

<body>
    <!--加载动画-->
    <div id="loading-box">
        <div class="loading-left-bg"></div>
        <div class="loading-right-bg"></div>
        <div class="spinner-box">
            <div class="loader">
                <div class="inner one"></div>
                <div class="inner two"></div>
                <div class="inner three"></div>
            </div>
            <div class="loading-word">
                <p class="loading-title" id="loading-title">松子分享の主页</p>
                <span id="loading-text">加载中</span>
            </div>
        </div>
    </div>
    <section id="section" class="section">
        <!-- 背景图片 -->
        <div class="bg-all">
            <img id="bg" onerror="this.classList.add('error');"></img>
            <div class="cover"></div>
        </div>
        <!-- 鼠标指针 -->
        <div id="g-pointer-1"></div>
        <div id="g-pointer-2"></div>
        <!-- 主体内容 -->
        <main id="main" class="main">
            <div class="container" id="container">
                <div class="row" id="row">
                    <div class="col left">
                        <!--基本信息-->
                        <div class="main-left">
                            <!--Logo-->
                            <div class="main-img">
                                <img id="logo-img" src="./img/icon/logo.png" alt="img">
                                <div class="img-title">
                                    <span class="img-title-big" id="logo-text-1">szfx</span>
                                    <span class="img-text" id="logo-text-2">.top</span>
                                </div>
                            </div>
                            <!--介绍信息-->
                            <div class="message cards" id="switchmore">
                                <div class="des" id="des">
                                    <i class="fa-solid fa-quote-left"></i>
                                    <div class="des-title"><span id="change">Hello&nbsp;World&nbsp;!</span><br /><span
                                            id="change1">一个建立于 21 世纪的小站，存活于互联网的边缘</span></div>
                                    <i class="fa-solid fa-quote-right"></i>
                                </div>
                            </div>
                            <!--社交链接-->
                            <div class="social" id="social">
                                <a href="https://github.com/songshuxiao" class="link" id="github" style="margin-left: 4px"
                                    target="_blank">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                                <a href="https://wpa.qq.com/msgrd?v=3&uin=2189287598&site=qq&menu=yes" class="link"
                                    id="qq" target="_blank">
                                    <i class="fa-brands fa-qq"></i>
                                </a>
                                <a target="_blank" href="https://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=jishusongshu@qq.com" class="link" id="email">
                                    <i class="fa-solid fa-envelope"></i>
                                </a>
                                <a href="https://space.bilibili.com/349815672" class="link" id="bilibili"
                                    target="_blank">
                                    <i class="fa-brands fa-bilibili"></i>
                                </a>
                                <a href="" class="link" id="weixin" target="_blank">
                                    <i class="fa-brands fa-weixin"></i>
                                </a>
                                <a id="link-text">通过这里联系我</a>
                            </div>
                        </div>
                    </div>
                    <!--第二屏 Logo-->
                    <div class="logo cards" style="display: none" id="changemore">
                        <a class="logo-text" id="logo-text-small">szfx.top</a>
                    </div>
                    <div class="col right">
                        <div class="main-right">
                            <!--功能区-->
                            <div class="row rightone" id="rightone">
                                <div class="col hitokotos">
                                    <!--一言-->
                                    <div class="hitokoto cards" id="hitokoto">
                                        <!--切换音乐-->
                                        <div class="open-music fixed-top" id="open-music">
                                            <i class="fa-solid fa-compact-disc"></i>
                                            <span>&nbsp;打开音乐播放器</span>
                                        </div>
                                        <!--切换音乐结束-->
                                        <div class="hitokoto-all">
                                            <div class="hitokoto-text"><span id="hitokoto_text">每一个人都应该明确自己的方向和位置</span>
                                            </div>
                                            <div class="hitokoto-from">-「&nbsp;<span id="from_text">松子分享</span>&nbsp;」
                                            </div>
                                        </div>
                                    </div>
                                    <!--音乐-->
                                    <div class="music" id="music">
                                        <div class="music-all">
                                            <div class="music-button">
                                                <div id="music-open">音乐列表</div>
                                                <div id="music-close">回到一言</div>
                                            </div>
                                            <div class="music-control">
                                                <i class="fa-solid fa-backward-step" id="last"></i>
                                                <div id="play">
                                                    <i class="fa-solid fa-play"></i>
                                                </div>
                                                <i class="fa-solid fa-forward-step" id="next"></i>
                                            </div>
                                            <div class="music-menu">
                                                <div class="music-text">
                                                    <span id="music-name">未播放音乐</span>
                                                </div>
                                                <div class="music-volume" style="display: none;">
                                                    <div id="volume-ico">
                                                        <i class="fa-solid fa-volume-low"></i>
                                                    </div>
                                                    <input type="range" min="0" max="1" step="0.01" id="volume">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col times">
                                    <!--时间-->
                                    <div class="time cards" id="upWeather">
                                        <div class="timeshow" id="time">
                                            2000&nbsp;年&nbsp;0&nbsp;月&nbsp;00&nbsp;日&nbsp;<span
                                                class="weekday">星期一</span><br><span class="time-text">00:00:00</span>
                                        </div>
                                        <div class="weather">
                                            <span id="city_text">天气</span>&nbsp;
                                            <span id="wea_text">加载失败</span>&nbsp;
                                            <span id="tem_text"></span>
                                            <span id="win_text">次数</span>
                                            <span id="win_speed">超限</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--分隔线-->
                            <div class="line">
                                <i class="fa-solid fa-link"></i>
                                <span class="line-text">网站列表</span>
                            </div>
                            <!--网站链接-->
                            <div class="link">
                                <!--第一组-->
                                <div class="row">
                                    <div class="col">
                                        <a id="link-url-1" href="https://blog.szfx.top/" target="_blank">
                                            <div class="link-card cards">
                                                <i id="link-icon-1" class="fa-solid fa-blog"></i>
                                                <span class="link-name" id="link-name-1">博客</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col 2">
                                        <a id="link-url-2" href="https://drive.imsyy.top/" target="_blank">
                                            <div class="link-card cards">
                                                <i id="link-icon-2" class="fa-solid fa-cloud"></i>
                                                <span class="link-name" id="link-name-2">网盘</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a id="link-url-3" href="https://share.szfx.top/" target="_blank">
                                            <div class="link-card cards">
                                                <i id="link-icon-3" class="fa-solid fa-code"></i>
                                                <span class="link-name" id="link-name-3">代码</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!--第二组-->
                                <div class="row" style="margin-top: 1.5rem;">
                                    <div class="col">
                                        <a id="link-url-4" href="https://nav.imsyy.top/" target="_blank">
                                            <div class="link-card cards">
                                                <i id="link-icon-4" class="fa-solid fa-compass"></i>
                                                <span class="link-name" id="link-name-4">起始页</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col 2">
                                        <a id="link-url-5" href="https://web.imsyy.top/" target="_blank">
                                            <div class="link-card cards">
                                                <i id="link-icon-5" class="fa-solid fa-book-bookmark"></i>
                                                <span class="link-name" id="link-name-5">网址集</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a id="link-url-6" href="https://lab.imsyy.top/" target="_blank">
                                            <div class="link-card cards">
                                                <i id="link-icon-6" class="fa-solid fa-flask"></i>
                                                <span class="link-name" id="link-name-6">实验室</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--展开菜单按钮-->
                <div class="menu" id="switchmenu">
                    <a class="munu-button cards" id="menu">
                        <i class="fa-solid fa-bars"></i>
                    </a>
                </div>
                <!--更多内容-->
                <div class="more" id="more">
                    <!--关闭按钮-->
                    <div class="close fixed-top" id="close">
                        <i class="fa-solid fa-circle-xmark"></i>
                    </div>
                    <div class="line" style="margin-top: 1rem;">
                        <i class="fa-solid fa-angle-left"></i>
                        <span class="line-text">时间胶囊</span>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                    <div class="date" id="date">
                        <div class="item" id="dayProgress">
                            <div class="date-text" style="margin-top: 0rem;">今日已经度过了&nbsp;<span></span>&nbsp;小时</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                        </div>
                        <div class="item" id="weekProgress">
                            <div class="date-text">本周已经度过了&nbsp;<span></span>&nbsp;天</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                        </div>
                        <div class="item" id="monthProgress">
                            <div class="date-text">本月已经度过了&nbsp;<span></span>&nbsp;天</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                        </div>
                        <div class="item" id="yearProgress">
                            <div class="date-text">今年已经度过了&nbsp;<span></span>&nbsp;个月</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                        </div>
                    </div>
                    <div class="line">
                        <i class="fa-solid fa-angle-left"></i>
                        <span class="line-text">杂七杂八</span>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                    <!--网站链接-->
                    <div class="row">
                        <div class="col">
                            <a href="https://view.szfx.top/status/service" target="_blank">
                                <div class="link-card cards">
                                    <span class="link-name">站点监测</span>
                                </div>
                            </a>
                        </div>
                        <div class="col 2">
                            <a href="https://url.szfx.top/" target="_blank">
                                <div class="link-card cards">
                                    <span class="link-name">短网址</span>
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a href="https://tools.jishusongshu.com/" target="_blank">
                                <div class="link-card cards">
                                    <span class="link-name">工具箱</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 1.5rem;">
                        <div class="col">
                            <a href="https://pan.szfx.top/" target="_blank">
                                <div class="link-card cards">
                                    <span class="link-name">松子云盘</span>
                                </div>
                            </a>
                        </div>
                        <div class="col 2">
                            <a href="https://search.szfx.top/" target="_blank">
                                <div class="link-card cards">
                                    <span class="link-name">Search</span>
                                </div>
                            </a>
                        </div>
                        <div class="col">
                            <a id="openmore">
                                <div class="link-card cards">
                                    <span class="link-name">更多</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!--更多页面-->
                <div class="box" id="box" style="display: none">
                    <div class="box-wrapper">
                        <!--关闭按钮-->
                        <div class="closebox fixed-top" id="closemore">
                            <i class="fa-solid fa-circle-xmark"></i>
                        </div>
                        <!--左侧内容-->
                        <div class="box-left">
                            <div class="img-title">
                                <span class="img-title-big" id="logo-title-other">imsyy</span>
                                <span class="img-text" id="logo-title-other-small">.top</span><br />
                                <span class="img-text">&nbsp;v&nbsp;3.3</span>
                                <a href="https://github.com/imsyy/home" target="_blank">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                            </div>
                            <!--更多内容-->
                            <div class="accordion" id="accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            壁纸设置
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <div class="set">
                                                <div class="wallpaper" id="wallpaper">
                                                    <div class="form-radio">
                                                        <input type="radio" class="set-wallpaper" style="display: none;"
                                                            id="radio1" value="1" name="wallpaper-type">
                                                        <label for="radio1">默认壁纸</label>
                                                    </div>
                                                    <div class="form-radio">
                                                        <input type="radio" class="set-wallpaper" style="display: none;"
                                                            id="radio2" value="2" name="wallpaper-type">
                                                        <label for="radio2" id="wallpaper_text1">每日一图</label>
                                                    </div>
                                                    <div class="form-radio">
                                                        <input type="radio" class="set-wallpaper" style="display: none;"
                                                            id="radio3" value="3" name="wallpaper-type">
                                                        <label for="radio3" id="wallpaper_text2">随机风景</label>
                                                    </div>
                                                    <div class="form-radio">
                                                        <input type="radio" class="set-wallpaper" style="display: none;"
                                                            id="radio4" value="4" name="wallpaper-type">
                                                        <label for="radio4" id="wallpaper_text3">随机动漫</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--更新日志-->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            更新日志
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <div class="upnote">
                                                <span class="uptext">
                                                    <i class="fa-solid fa-circle-plus"></i>&nbsp;音乐歌单支持快速自定义
                                                </span>
                                                <span class="uptext">
                                                    <i class="fa-solid fa-circle-plus"></i>&nbsp;壁纸支持个性化设置
                                                </span>
                                                <span class="uptext">
                                                    <i class="fa-solid fa-circle-plus"></i>&nbsp;音乐播放器支持音量控制
                                                </span>
                                                <span class="uptext">
                                                    <i class="fa-solid fa-screwdriver-wrench"></i>&nbsp;修复天气 API
                                                </span>
                                                <span class="uptext">
                                                    <i class="fa-solid fa-screwdriver-wrench"></i>&nbsp;时光胶囊显示错误
                                                </span>
                                                <span class="uptext">
                                                    <i class="fa-solid fa-screwdriver-wrench"></i>&nbsp;移动端动画及细节
                                                </span>
                                                <span class="uptext">
                                                    <i class="fa-solid fa-screwdriver-wrench"></i>&nbsp;图标更换为 Font
                                                    Awesome</span>
                                                <span class="uptext">
                                                    <i class="fa-solid fa-rotate-left"></i>
                                                    <a href="./old/" style="color:#efefef">返回旧版站点</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Aplayer-->
                        <div class="box-right">
                            <div id="aplayer">
                                <span>音乐播放器加载失败</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- 版权信息 -->
        <footer id="footer" class="fixed-bottom footer">
            <div class="power">
                <span id="power">Copyright&nbsp;&copy;
                    <script>
                        document.write((new Date()).getFullYear());
                    </script>
                    <a href="https://szfx.top" id="power-text">松子分享</a>
                </span>
                <!-- 以下信息请不要修改哦 -->
                <span id="made">&amp;&nbsp;Made&nbsp;by&nbsp;<a href="https://github.com/imsyy/home"
                        target="_blank">imsyy</a></span>
                <!-- 站点备案 -->
                <a href="https://beian.miit.gov.cn" id="beian" target="_blank">&amp;&nbsp;豫ICP备2022018134号-1</a>
            </div>
            <!-- 歌词显示 -->
            <div id="lrc"></div>
        </footer>
    </section>
    <!-- sw.js -->
    <script>
        if ("serviceWorker" in navigator) {
            window.addEventListener("load", function () {
                navigator.serviceWorker.register("sw.js");
            });
        }
    </script>
    <!-- noscript -->
    <noscript>
        <div class="noscript fixed-top">请开启 JavaScript</div>
    </noscript>
    <!-- JS -->
    <script type="text/javascript" src=<?php echo "\"./js/main.js?ver=".time()."\"" ?>></script>
    <script type="text/javascript" src=<?php echo "\"./js/set.js?ver=".time()."\"" ?>></script>
    <script type="text/javascript" src="./js/time.js"></script>
    <script type="text/javascript" src="./js/js.cookie.js"></script>
    <script type="text/javascript"
        src="https://lf9-cdn-tos.bytecdntp.com/cdn/expire-1-y/bootstrap/5.1.0/js/bootstrap.min.js">
    </script>
</body>

</html>