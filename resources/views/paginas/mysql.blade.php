@extends('template')

@section('contain')

<html lang="en" class="svg js"><head><style type="text/css">.truste_caIcon_display {display: inline !important;}</style><style type="text/css">.truste_cursor_pointer {cursor: pointer;}.truste_border_none {border: none;}</style>
    <meta charset="utf-8">
    <!--[if IE ]>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="country" content="United States">
    <meta name="siteid" content="us">
        <meta name="Language" content="en">

    <title>MySQL</title>
    

            <style>
                    #fp-banner1 { background: url('https://labs.mysql.com/common/themes/sakila/banners/b1280-mysql-cloudworld23b-back.jpg') repeat-x top; }
            #fp-banner-image1 { background: url('https://labs.mysql.com/common/themes/sakila/banners/b1280-mysql-cloudworld23b.en.jpg') no-repeat; }
            #fp-banner-image1 .link-960 { left: 43px; top: 223px; width: 155px; height: 40px; }
            #fp-banner-image1 .link-640 { left: 29px; top: 149px; width: 103px; height: 27px; }
            #fp-banner-image1 .link-320 { left: 37px; top: 207px; width: 116px; height: 32px; }
                    #fp-banner2 { background: url('https://labs.mysql.com/common/themes/sakila/banners/b1280-grey-gradient-background.jpg') repeat-x top; }
            #fp-banner-image2 { background: url('https://labs.mysql.com/common/themes/sakila/banners/b1280-mysql-ocw-keynote2.en.jpg') no-repeat; }
            #fp-banner-image2 .link-960 { left: 50px; top: 242px; width: 220px; height: 40px; }
            #fp-banner-image2 .link-640 { left: 33px; top: 161px; width: 147px; height: 27px; }
            #fp-banner-image2 .link-320 { left: 78px; top: 260px; width: 165px; height: 32px; }
                    #fp-banner3 { background: url('https://labs.mysql.com/common/themes/sakila/banners/b1280-grey-gradient-background.jpg') repeat-x top; }
            #fp-banner-image3 { background: url('https://labs.mysql.com/common/themes/sakila/banners/b1280-mysql-hw-developer3.en.jpg') no-repeat; }
            #fp-banner-image3 .link-960 { left: 334px; top: 224px; width: 197px; height: 40px; }
            #fp-banner-image3 .link-640 { left: 222px; top: 149px; width: 131px; height: 27px; }
            #fp-banner-image3 .link-320 { left: 93px; top: 260px; width: 141px; height: 32px; }
                    #fp-banner4 { background: url('https://labs.mysql.com/common/themes/sakila/banners/b1280-grey-gradient-background.jpg') repeat-x top; }
            #fp-banner-image4 { background: url('https://labs.mysql.com/common/themes/sakila/banners/b1280-mysql-hw-migration.en.jpg') no-repeat; }
            #fp-banner-image4 .link-960 { left: 322px; top: 237px; width: 197px; height: 40px; }
            #fp-banner-image4 .link-640 { left: 214px; top: 158px; width: 131px; height: 27px; }
            #fp-banner-image4 .link-320 { left: 93px; top: 260px; width: 141px; height: 32px; }
                    #fp-banner5 { background: url('https://labs.mysql.com/common/themes/sakila/banners/b1280-grey-gradient-background.jpg') repeat-x top; }
            #fp-banner-image5 { background: url('https://labs.mysql.com/common/themes/sakila/banners/b1280-mysql-mds-aws-azure6.en.jpg') no-repeat; }
            #fp-banner-image5 .link-960 { left: 743px; top: 207px; width: 152px; height: 39px; }
            #fp-banner-image5 .link-640 { left: 495px; top: 138px; width: 101px; height: 26px; }
            #fp-banner-image5 .link-320 { left: 103px; top: 269px; width: 113px; height: 30px; }
                    #fp-banner6 { background: url('https://labs.mysql.com/common/themes/sakila/banners/b1280-blue-gradient-background.jpg') repeat-x top; }
            #fp-banner-image6 { background: url('https://labs.mysql.com/common/themes/sakila/banners/b1280-mysql-ee-generic2.en.jpg') no-repeat; }
            #fp-banner-image6 .link-960 { left: 340px; top: 231px; width: 154px; height: 42px; }
            #fp-banner-image6 .link-640 { left: 226px; top: 154px; width: 103px; height: 28px; }
            #fp-banner-image6 .link-320 { left: 93px; top: 260px; width: 134px; height: 32px; }
                    @media
            only screen and (-webkit-min-device-pixel-ratio: 1.25),
            only screen and (   min--moz-device-pixel-ratio: 1.25),
            only screen and (     -o-min-device-pixel-ratio: 5/4),
            only screen and (        min-device-pixel-ratio: 1.25),
            only screen and (                min-resolution: 120dpi),
            only screen and (                min-resolution: 1.25dppx) {
                        #fp-banner1 { background: url('https://labs.mysql.com/common/themes/sakila/banners/b2560-mysql-cloudworld23b-back.jpg') repeat-x top; }
                #fp-banner-image1 { background: url('https://labs.mysql.com/common/themes/sakila/banners/b2560-mysql-cloudworld23b.en.jpg') no-repeat; }
                        #fp-banner2 { background: url('https://labs.mysql.com/common/themes/sakila/banners/b2560-grey-gradient-background.jpg') repeat-x top; }
                #fp-banner-image2 { background: url('https://labs.mysql.com/common/themes/sakila/banners/b2560-mysql-ocw-keynote2.en.jpg') no-repeat; }
                        #fp-banner3 { background: url('https://labs.mysql.com/common/themes/sakila/banners/b2560-grey-gradient-background.jpg') repeat-x top; }
                #fp-banner-image3 { background: url('https://labs.mysql.com/common/themes/sakila/banners/b2560-mysql-hw-developer3.en.jpg') no-repeat; }
                        #fp-banner4 { background: url('https://labs.mysql.com/common/themes/sakila/banners/b2560-grey-gradient-background.jpg') repeat-x top; }
                #fp-banner-image4 { background: url('https://labs.mysql.com/common/themes/sakila/banners/b2560-mysql-hw-migration.en.jpg') no-repeat; }
                        #fp-banner5 { background: url('https://labs.mysql.com/common/themes/sakila/banners/b2560-grey-gradient-background.jpg') repeat-x top; }
                #fp-banner-image5 { background: url('https://labs.mysql.com/common/themes/sakila/banners/b2560-mysql-mds-aws-azure6.en.jpg') no-repeat; }
                        #fp-banner6 { background: url('https://labs.mysql.com/common/themes/sakila/banners/b2560-blue-gradient-background.jpg') repeat-x top; }
                #fp-banner-image6 { background: url('https://labs.mysql.com/common/themes/sakila/banners/b2560-mysql-ee-generic2.en.jpg') no-repeat; }
                </style>
    
    
            <link rel="alternate" type="application/rss+xml" title="RSS feed" href="/mysql.rss">
    
                    <link rel="alternate" hreflang="en" href="https://www.mysql.com/">
                <link rel="alternate" hreflang="de" href="https://www.mysql.com/de/">
                <link rel="alternate" hreflang="fr" href="https://www.mysql.com/fr/">
                <link rel="alternate" hreflang="it" href="https://www.mysql.com/it/">
                <link rel="alternate" hreflang="ja" href="https://www.mysql.com/jp/">
                <link rel="alternate" hreflang="zh" href="https://www.mysql.com/cn/">
            
    
    <link rel="shortcut icon" href="https://labs.mysql.com/common/themes/sakila/favicon.ico">
    <script type="text/javascript" async="" src="https://www.oracle.com/asset/web/analytics/infinity_common.js"></script><script async="async" type="text/javascript" src="https://consent.truste.com/notice?domain=oracle.com&amp;c=teconsent&amp;js=bb&amp;noticeType=bb&amp;text=true&amp;cdn=1&amp;pcookie&amp;gtm=1" crossorigin="" id="truste_0.8056782424273095"></script>
    <script src="https://www.oracle.com/assets/truste-oraclelib.js"></script>
    <script>(function(H){ H.className=H.className.replace(/\bno-js\b/,'js') })(document.documentElement)</script>
    <script src="https://labs.mysql.com/common/js/site-20230630.min.js"></script>

    
    
    <!--[if lt IE 9]>
        <script src="https://labs.mysql.com/common/js/polyfills/html5shiv-printshiv-3.7.2.min.js"></script>
        <script src="https://labs.mysql.com/common/js/polyfills/respond-1.4.2.min.js"></script>
    <![endif]-->
        
                              <script>!function(e){var n="https://s.go-mpulse.net/boomerang/";if("False"=="True")e.BOOMR_config=e.BOOMR_config||{},e.BOOMR_config.PageParams=e.BOOMR_config.PageParams||{},e.BOOMR_config.PageParams.pci=!0,n="https://s2.go-mpulse.net/boomerang/";if(window.BOOMR_API_key="E6BB6-B37B4-898B7-F97BA-BBCDB",function(){function e(){if(!o){var e=document.createElement("script");e.id="boomr-scr-as",e.src=window.BOOMR.url,e.async=!0,i.parentNode.appendChild(e),o=!0}}function t(e){o=!0;var n,t,a,r,d=document,O=window;if(window.BOOMR.snippetMethod=e?"if":"i",t=function(e,n){var t=d.createElement("script");t.id=n||"boomr-if-as",t.src=window.BOOMR.url,BOOMR_lstart=(new Date).getTime(),e=e||d.body,e.appendChild(t)},!window.addEventListener&&window.attachEvent&&navigator.userAgent.match(/MSIE [67]\./))return window.BOOMR.snippetMethod="s",void t(i.parentNode,"boomr-async");a=document.createElement("IFRAME"),a.src="about:blank",a.title="",a.role="presentation",a.loading="eager",r=(a.frameElement||a).style,r.width=0,r.height=0,r.border=0,r.display="none",i.parentNode.appendChild(a);try{O=a.contentWindow,d=O.document.open()}catch(_){n=document.domain,a.src="javascript:var d=document.open();d.domain='"+n+"';void(0);",O=a.contentWindow,d=O.document.open()}if(n)d._boomrl=function(){this.domain=n,t()},d.write("<bo"+"dy onload='document._boomrl();'>");else if(O._boomrl=function(){t()},O.addEventListener)O.addEventListener("load",O._boomrl,!1);else if(O.attachEvent)O.attachEvent("onload",O._boomrl);d.close()}function a(e){window.BOOMR_onload=e&&e.timeStamp||(new Date).getTime()}if(!window.BOOMR||!window.BOOMR.version&&!window.BOOMR.snippetExecuted){window.BOOMR=window.BOOMR||{},window.BOOMR.snippetStart=(new Date).getTime(),window.BOOMR.snippetExecuted=!0,window.BOOMR.snippetVersion=12,window.BOOMR.url=n+"E6BB6-B37B4-898B7-F97BA-BBCDB";var i=document.currentScript||document.getElementsByTagName("script")[0],o=!1,r=document.createElement("link");if(r.relList&&"function"==typeof r.relList.supports&&r.relList.supports("preload")&&"as"in r)window.BOOMR.snippetMethod="p",r.href=window.BOOMR.url,r.rel="preload",r.as="script",r.addEventListener("load",e),r.addEventListener("error",function(){t(!0)}),setTimeout(function(){if(!o)t(!0)},3e3),BOOMR_lstart=(new Date).getTime(),i.parentNode.appendChild(r);else t(!1);if(window.addEventListener)window.addEventListener("load",a,!1);else if(window.attachEvent)window.attachEvent("onload",a)}}(),"".length>0)if(e&&"performance"in e&&e.performance&&"function"==typeof e.performance.setResourceTimingBufferSize)e.performance.setResourceTimingBufferSize();!function(){if(BOOMR=e.BOOMR||{},BOOMR.plugins=BOOMR.plugins||{},!BOOMR.plugins.AK){var n=""=="true"?1:0,t="",a="x2ljfk5ydjgoazif4cla-f-69bb9ea83-clientnsv4-s.akamaihd.net",i="false"=="true"?2:1,o={"ak.v":"36","ak.cp":"1334304","ak.ai":parseInt("802521",10),"ak.ol":"0","ak.cr":51,"ak.ipv":4,"ak.proto":"h2","ak.rid":"cb3ae565","ak.r":42171,"ak.a2":n,"ak.m":"dscx","ak.n":"essl","ak.bpcip":"190.150.146.0","ak.cport":62428,"ak.gh":"23.218.252.87","ak.quicv":"","ak.tlsv":"tls1.3","ak.0rtt":"","ak.csrc":"-","ak.acc":"","ak.t":"1694883990","ak.ak":"hOBiQwZUYzCg5VSAfCLimQ==rvua4hFKh+H9aZyPQaFYZJf72VmQ6ZuRZIN7qZFYpDuCekn2mz5GMHvtqxPP7NSac5VIXN+uOwsUZ/AOlkFtWhM8V9xSQhS2bDTgZECUMMOcW20VeNg95BVg+U8UAZarxrHc8cq9jwVQolZ1UBQcRffKP/DIVv/eE9ycGlX3qJYkQW9sG1DQaL6dZ77PXv5biRouGn0CuUGwUHB2WfrTEGdQXBL5Yvhe2JoQSq8z3yn6A5FoMB6sv6JXfmMY2CK9yKqnbrnL9uXm3LZnWWRQU97b1QEgKGl8K+jd6ZtRsMBN6eoDtmvKu+gjAb3Cdt0y6vt9JCScCP5PdmU1DSG+JCxE4uCaIxYiKjMkGWDqXU4Id2jil8JoM9aiQTdvZN4nDedSHhmISWwssGWQidph9e6H5tnJLHzq6YW3imbxdRQ=","ak.pv":"15","ak.dpoabenc":"","ak.tf":i};if(""!==t)o["ak.ruds"]=t;var r={i:!1,av:function(n){var t="http.initiator";if(n&&(!n[t]||"spa_hard"===n[t]))o["ak.feo"]=void 0!==e.aFeoApplied?1:0,BOOMR.addVar(o)},rv:function(){var e=["ak.bpcip","ak.cport","ak.cr","ak.csrc","ak.gh","ak.ipv","ak.m","ak.n","ak.ol","ak.proto","ak.quicv","ak.tlsv","ak.0rtt","ak.r","ak.acc","ak.t","ak.tf"];BOOMR.removeVar(e)}};BOOMR.plugins.AK={akVars:o,akDNSPreFetchDomain:a,init:function(){if(!r.i){var e=BOOMR.subscribe;e("before_beacon",r.av,null,null),e("onbeacon",r.rv,null,null),r.i=!0}return this},is_complete:function(){return!0}}}}()}(window);</script><link href="https://s.go-mpulse.net/boomerang/E6BB6-B37B4-898B7-F97BA-BBCDB" rel="preload" as="script"><script src="//static.atgsvcs.com/js/atgsvcs.js" type="text/javascript"></script><link href="https://www.oracle.com/asset/web/css/oracle-chat.css" rel="stylesheet"><script id="boomr-scr-as" src="https://s.go-mpulse.net/boomerang/E6BB6-B37B4-898B7-F97BA-BBCDB" async=""></script><script type="text/javascript" src="https://c.oracleinfinity.io/acs/account/wh3g12c3gg/js/mysql/analytics-production.js" async="true" defer="true"></script><script src="//sc-oal-en.custhelp.com/rnt/rnw/javascript/vs/1/vsapi.js" type="text/javascript"></script><script src="//sc-oal-en.custhelp.com/vs/1/vsopts.js" type="text/javascript"></script><script type="text/javascript" src="https://c.oracleinfinity.io/acs/common/js/1.3.43/common.js" async="true" defer="true"></script><script type="text/javascript" src="https://c.oracleinfinity.io/acs/account/wh3g12c3gg/js/mysql/analytics-production/analytics.js" async="true" defer="true"></script><script type="text/javascript" src="//sc-oal-en.widget.custhelp.com/euf/rightnow/RightNow.Client.js"></script><script type="text/javascript" src="//vsvippi01.rightnowtech.com/vs/site/oal_ces/visitor/105CBS47OD9CT58RUM8g6Z5xohglNJg31ZxJwdW6DRowN7EF4D9/session/38a65498:18a9eaa24bc:-5dfe-10.4.48.173/type/PAGE_LOAD?url=https%3A%2F%2Fwww.mysql.com%2F&amp;title=MySQL"></script><script charset="utf-8" src="https://static.atgsvcs.com/js/pp.js"></script><script id="yui__dyn_0" type="text/javascript" charset="utf-8" src="//sc-oal-en.widget.custhelp.com/ci/ws/get/w/7/co/%5B%7B%22c%22%3A%2217%22%2C%22chat_login_page%22%3A%22%2Fapp%2Fchat%2Fsc_launch_v3%22%2C%22chat_login_page_height%22%3A600%2C%22chat_login_page_width%22%3A400%2C%22common_fields%22%3A%22%7B%5C%22incidents.prod%5C%22%3A%5C%22224%5C%22%7D%22%2C%22container_element_id%22%3A%22oReactiveChatContainer%22%2C%22custom_fields%22%3A%22%7B%5C%2211%5C%22%3A%5C%22MySQL%5C%22%2C%5C%2214%5C%22%3A%5C%22SC%20MYSQL%20HQ%5C%22%2C%5C%226%5C%22%3A%5C%22170%5C%22%2C%5C%2278%5C%22%3A%5C%22https%3A%2F%2Fwww.mysql.com%2F%5C%22%7D%22%2C%22enable_availability_check%22%3Afalse%2C%22ignore_preroute%22%3Afalse%2C%22info_element_id%22%3A%22atgchat-flyout-info%22%2C%22instance_id%22%3A%22sccl_4499221%22%2C%22label_default%22%3A%22Live%20Sales%20Chat%22%2C%22link_element_id%22%3A%22atgchat-flyout%22%2C%22min_sessions_avail%22%3A0%2C%22module%22%3A%22ConditionalChatLink%22%2C%22open_in_new_window%22%3Atrue%2C%22ruleId%22%3A%2234926131%22%2C%22type%22%3A7%2C%22vstype%22%3A4%2C%22widget_id%22%3A%224499221%22%2C%22widget_name%22%3A%22chat_conditional%22%7D%5D/https_request/1"></script><script type="text/javascript" src="//vsvippi01.rightnowtech.com/vs/site/oal_ces/visitor/105CBS47OD9CT58RUM8g6Z5xohglNJg31ZxJwdW6DRowN7EF4D9/session/38a65498:18a9eaa24bc:-5dfe-10.4.48.173/type/OFFER/val1/4499221/val2/chat_conditional/val3/4?url=https%3A%2F%2Fwww.mysql.com%2F&amp;title=MySQL&amp;prodId=224&amp;categId=17"></script><link id="yui__dyn_1" type="text/css" charset="utf-8" rel="stylesheet" href="https://sc-oal-en.widget.custhelp.com/euf/assets/css/syndicated_widgets/standard/ConditionalChatLink.css"><script src="//static.atgsvcs.com/js/atgsvcs.js" type="text/javascript"></script><script src="//sc-oal-en.custhelp.com/rnt/rnw/javascript/vs/1/vsapi.js" type="text/javascript"></script><script src="//sc-oal-en.custhelp.com/vs/1/vsopts.js" type="text/javascript"></script></head>

<body class="no-sidebar full-page www en ochat_slideout_loaded" style="padding-top: 0px;">
<a class="skip-main" href="#main">Skip to Main Content</a>
<div class="page-wrapper">
    <header>

                        <a href="https://www.mysql.com/" aria-label="MySQL Home" title="MySQL" id="l1-home-link"></a>
        
        <div id="l1-nav-container">
            <div id="l1-line1">
                <div id="l1-lhs">
                    <div id="l1-slogan">
                        The world's most popular open source database
                    </div>
                    <div id="l1-search-box">
                        <form id="l1-search-form" method="get" action="https://www.oracle.com/search/results">
                        <input type="hidden" name="cat" value="mysql">
                        <input type="hidden" name="Ntk" value="SI-ALL5">
                        <input id="l1-search-input" type="search" class="icon-search" placeholder="Search" aria-label="Search" name="Ntt">
                        </form>
                    </div>
                    <div id="l1-auth-links">
                        <nav aria-label="Contact/Login Navigation" role="navigation">
                            <a href="https://www.mysql.com/about/contact/"><b>Contact MySQL</b></a>
                            <span id="l1-contact-separator">&nbsp;|&nbsp;</span>
                            <span id="l1-contact-separator-br"><br></span>
                                                             <a href="https://www.mysql.com/auth/login/?dest=https%3A%2F%2Fwww.mysql.com%2F">Login</a> &nbsp;|&nbsp;
                                 <a href="https://www.mysql.com/auth/register/">Register</a>
                                                    </nav>
                    </div>
                </div>
            </div>
            <div id="l1-line2">
                <nav aria-label="Primary Navigation" role="navigation">
                    <ul id="l1-nav">
                        <li class="active">
                            <a href="/"><!-- <span class="icon-sakila"></span>  -->MySQL.com</a>
                        </li><li>
                            <a href="/downloads/"><!-- <span class="icon-download-thin"></span>  -->Downloads</a>
                        </li><li>
                            <a href="https://dev.mysql.com/doc/"><!-- <span class="icon-books"></span>  -->Documentation</a>
                        </li><li>
                            <a href="https://dev.mysql.com/"><!-- <span class="icon-code"></span>  -->Developer Zone</a>
                        </li>                    </ul>
                </nav>
                <div class="social-icons">
                    <nav aria-label="Social Navigation" role="navigation">
                        <a aria-label="Join us on Facebook" title="Join us on Facebook" href="http://www.facebook.com/mysql"><span class="icon-facebook"></span></a>
                        <a aria-label="Follow us on Twitter" title="Follow us on Twitter" href="https://twitter.com/mysql"><span class="icon-twitter"></span></a>
                        <a aria-label="Follow us on LinkedIn" title="Follow us on LinkedIn" href="https://www.linkedin.com/company/mysql"><span class="icon-linkedin"></span></a>
                        <a aria-label="Visit our YouTube channel" title="Visit our YouTube channel" href="http://www.youtube.com/mysqlchannel"><span class="icon-youtube"></span></a>
                    </nav>
                </div>
            </div>
        </div>
        <div id="sub-header" class="">
            <div id="l2-nav-container">
                <div id="l2-nav-toggle">
                    <span class="icon-three-bars"></span>
                </div>
                                                                                        <a class="button nav-button-3" href="https://dev.mysql.com/"><span class="icon-code"></span> Developer Zone</a>
                                                                                                <a class="button nav-button-2" href="https://dev.mysql.com/doc/"><span class="icon-books"></span> Documentation</a>
                                                                                                <a class="button nav-button-1" href="/downloads/"><span class="icon-download-thin"></span> Downloads</a>
                                                                                                            <div id="l2-search-toggle">
                    <span class="icon-search"></span>
                </div>
                <div id="l2-site-icon">
                                                                                                                            <span class="icon-sakila"></span>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </div>
                <div id="l1-section-title">
                    <span id="l1-section-label">
                        <a href="/">MySQL.com</a>
                    </span>
                </div>
                <nav aria-label="Secondary Navigation" role="navigation">
                    

<ul id="l2-nav">
            	<li class=""><a href="/products/">Products</a>
    			</li>
	        	<li class=""><a href="/cloud/">Cloud</a>
    			</li>
	        	<li class=""><a href="/services/">Services</a>
    			</li>
	        	<li class=""><a href="/partners/">Partners</a>
    			</li>
	        	<li class=""><a href="/customers/">Customers</a>
    			</li>
	        	<li class=""><a href="/why-mysql/">Why MySQL?</a>
    			</li>
	        	<li class=""><a href="/news-and-events/web-seminars/">News &amp; Events</a>
    			</li>
	        	<li class=" last"><a href="/buy-mysql/">How to Buy</a>
    			</li>
	                                    <li class="other-section"><a href="/downloads/">Downloads</a></li>
                            <li class="other-section"><a href="https://dev.mysql.com/doc/">Documentation</a></li>
                            <li class="other-section"><a href="https://dev.mysql.com/">Developer Zone</a></li>
            </ul>
                </nav>
            </div>
            <div id="l3-search-container"></div>
            <div id="top-orange"><span id="section-nav">Section Menu: &nbsp; </span></div>
        </div>
    </header>
        <div id="page">
                        <div role="main" id="main" tabindex="-1">

            
                

<div id="banners">

    <div class="fp-banner hidden current" id="fp-banner1" style="display: block;">
        <div class="fp-banner-image" id="fp-banner-image1">
            <a class="fp-banner-link link-960" href="/news-and-events/events/mysql-ocw.html"></a>
            <a class="fp-banner-link link-640 hidden" href="/news-and-events/events/mysql-ocw.html"></a>
            <a class="fp-banner-link link-320 hidden" href="/news-and-events/events/mysql-ocw.html"></a>
        </div>
    </div>
    <div class="fp-banner hidden" id="fp-banner2" style="display: none;">
        <div class="fp-banner-image" id="fp-banner-image2">
            <a class="fp-banner-link link-960" href="https://reg.rf.oracle.com/flow/oracle/cwoh23/catalog/page/catalog/session/1686614339032001mWwL"></a>
            <a class="fp-banner-link link-640 hidden" href="https://reg.rf.oracle.com/flow/oracle/cwoh23/catalog/page/catalog/session/1686614339032001mWwL"></a>
            <a class="fp-banner-link link-320 hidden" href="https://reg.rf.oracle.com/flow/oracle/cwoh23/catalog/page/catalog/session/1686614339032001mWwL"></a>
        </div>
    </div>
    <div class="fp-banner" id="fp-banner3" style="display: none;">
        <div class="fp-banner-image" id="fp-banner-image3">
            <a class="fp-banner-link link-960" href="/cloud/developer/"></a>
            <a class="fp-banner-link link-640 hidden" href="/cloud/developer/"></a>
            <a class="fp-banner-link link-320 hidden" href="/cloud/developer/"></a>
        </div>
    </div>
    <div class="fp-banner hidden" id="fp-banner4" style="display: none;">
        <div class="fp-banner-image" id="fp-banner-image4">
            <a class="fp-banner-link link-960" href="https://www.oracle.com/mysql/migration/"></a>
            <a class="fp-banner-link link-640 hidden" href="https://www.oracle.com/mysql/migration/"></a>
            <a class="fp-banner-link link-320 hidden" href="https://www.oracle.com/mysql/migration/"></a>
        </div>
    </div>
    <div class="fp-banner hidden" id="fp-banner5" style="display: none;">
        <div class="fp-banner-image" id="fp-banner-image5">
            <a class="fp-banner-link link-960" href="/products/mysqlheatwave/"></a>
            <a class="fp-banner-link link-640 hidden" href="/products/mysqlheatwave/"></a>
            <a class="fp-banner-link link-320 hidden" href="/products/mysqlheatwave/"></a>
        </div>
    </div>
    <div class="fp-banner hidden" id="fp-banner6" style="display: none;">
        <div class="fp-banner-image" id="fp-banner-image6">
            <a class="fp-banner-link link-960" href="/products/enterprise/"></a>
            <a class="fp-banner-link link-640 hidden" href="/products/enterprise/"></a>
            <a class="fp-banner-link link-320 hidden" href="/products/enterprise/"></a>
        </div>
    </div>

    <div class="fp-banner-dots">
        <div class="fp-banner-dots-center">
            <span class="fp-banner-dots-left"></span><a id="fp-dot1" href="" class="on"></a><a id="fp-dot2" href="" class=""></a><a id="fp-dot3" class="" href=""></a><a id="fp-dot4" href="" class=""></a><a id="fp-dot5" href="" class=""></a><a id="fp-dot6" href="" class=""></a><span class="fp-banner-dots-right"></span>
        </div>
    </div>

</div>


<div class="con" style="background-color: #ebf2f7; padding: 10px 100px; text-align: center; font-size: 120%; font-weight: 400;">
    <a href="https://www.oracle.com/mysql/">MySQL HeatWave - One MySQL Database service for OLTP, OLAP, ML, and Lakehouse</a>
</div>

<div class="con pad-normal" id="fp-products">
    <div class="rw">
        <div class="col-1-of-2 pad-tb-slight">
            <div class="fp-product-icon">
                <div id="fp-product-icon-cloud"></div>
            </div>
            <div class="fp-product">
                <h2><a href="/products/mysqlheatwave/">MySQL HeatWave</a></h2>
                <p>MySQL HeatWave is a fully managed database service for transactions, real- time analytics across data warehouses and data lakes, and machine learning services, without the complexity, latency, and cost of ETL duplication. It is available on OCI, AWS, and Azure.
                <br> <a href="/products/mysqlheatwave/">Learn More »</a></p>
            </div>
        </div>
        <div class="col-1-of-2 pad-tb-slight">
            <div class="fp-product-icon">
                <div id="fp-product-icon-enterpise"></div>
            </div>
            <div class="fp-product">
                <h2><a href="/products/enterprise/">MySQL Enterprise Edition</a></h2>
                <p>The most comprehensive set of advanced features, management tools and technical support to achieve the highest levels of MySQL scalability, security, reliability, and uptime.
                <br> <a href="/products/enterprise/">Learn More »</a></p>
            </div>
        </div>
    </div>
    <div class="rw pad-b-slight">
        <div class="col-1-of-2 pad-tb-slight">
            <div class="fp-product-icon">
                <div id="fp-product-icon-embedded"></div>
            </div>
            <div class="fp-product">
                <h2><a href="/oem/">MySQL for OEM/ISV</a></h2>
                <p>Over 2000 ISVs, OEMs, and VARs rely on MySQL as their products' embedded database to make their applications, hardware and appliances more competitive, bring them to market faster, and lower their cost of goods sold.
                <br> <a href="/oem/">Learn More »</a></p>
            </div>
        </div>
        <div class="col-1-of-2 pad-tb-slight">
            <div class="fp-product-icon">
                <div id="fp-product-icon-cluster"></div>
            </div>
            <div class="fp-product">
                <h2><a href="/products/cluster/">MySQL Cluster CGE</a></h2>
                <p>MySQL Cluster enables users to meet the database challenges of next generation web, cloud, and communications services with uncompromising scalability, uptime and agility.
                <br> <a href="/products/cluster/">Learn More »</a></p>
            </div>
        </div>
    </div>
</div>

<div class="con pad-lr-heavy pad-tb-slight dark-blue" id="fp-content-app">
    <div class="rw">
            <div class="col-1-of-2 pad-slight">
            <h2>
                                <span class="icon-laptop"></span>
                                Free Webinars
            </h2>
            <ul>
                            <li><a href="/news-and-events/web-seminars/migrating-from-mysql-on-premises-to-mysql-heatwave/">Migrating from MySQL On-premises to MySQL HeatWave</a>
                                    <br>Thursday, September 28, 2023                                </li>
                            <li><a href="/news-and-events/web-seminars/whats-new-with-mysql-and-mysql-heatwave-announcements-at-cloudworld/">What’s New with MySQL and MySQL HeatWave (Announcements at CloudWorld)</a>
                                    <br>Thursday, October 05, 2023                                </li>
                            <li><a href="/news-and-events/web-seminars/virtual-conference-machine-learning-beginners-from-data-to-insights/">Virtual Conference: Machine Learning for Beginners - From Data to Insights</a>
                                    <br>Thursday, October 05, 2023                                </li>
                                        <li style="list-style-image: none; list-style-type: none;">
                    <a href="/news-and-events/web-seminars/">More »</a></li>
                        </ul>
        </div>
            <div class="col-1-of-2 pad-slight">
            <h2>
                                <span class="icon-files"></span>
                                White Papers
            </h2>
            <ul>
                            <li><a href="/why-mysql/white-papers/mysql-heatwave-lakehouse/">MySQL HeatWave Lakehouse</a>
                                </li>
                            <li><a href="/why-mysql/white-papers/mysql-heatwave-on-aws/">MySQL HeatWave on AWS</a>
                                </li>
                            <li><a href="/why-mysql/white-papers/introduction-to-mysql-and-healthcare/">Introduction to MySQL and Healthcare</a>
                                </li>
                            <li><a href="/why-mysql/white-papers/mysql-heatwave-ml-in-database-machine-learning/">Technical Guide to HeatWave AutoML</a>
                                </li>
                            <li><a href="/why-mysql/white-papers/guide-to-mysql-in-fintech/">Guide to MySQL in Fintech and Financial Services</a>
                                </li>
                                        <li style="list-style-image: none; list-style-type: none;">
                    <a href="/why-mysql/white-papers/">More »</a></li>
                        </ul>
        </div>
        </div>
</div>

<div class="fp-logo-container">
    <div id="fp-logos">
        Some of our customers<br><br>        <div style="max-height: 270px; overflow: hidden; font-size: 10%;">
            <a class="fp-logo-youtube" href="/customers/view/?id=750"></a>
            <a class="fp-logo-paypal" href="/customers/view/?id=1223"></a>
            <a class="fp-logo-linkedin" href="/customers/view/?id=975"></a>
            <a class="fp-logo-facebook" href="/customers/view/?id=757"></a>
            <a class="fp-logo-twitter" href="/customers/view/?id=951"></a>
            <a class="fp-logo-ebay" href="/customers/view/?id=961"></a>
            <a class="fp-logo-cisco" href="/customers/"></a>
            <a class="fp-logo-verizon" href="/customers/view/?id=1225"></a>
            <a class="fp-logo-uber" href="/customers/view/?id=1269"></a>
            <a class="fp-logo-shopify" href="/customers/view/?id=1303"></a>
            <a class="fp-logo-netflix" href="/customers/view/?id=1276"></a>
            <a class="fp-logo-github" href="/customers/view/?id=1265"></a>
            <a class="fp-logo-walmart" href="/customers/"></a>
            <a class="fp-logo-booking" href="/customers/view/?id=901"></a>
            <a class="fp-logo-zappos" href="/customers/view/?id=892"></a>
            <a class="fp-logo-bankamer" href="/customers/view/?id=1309"></a>
            <a class="fp-logo-flipkart" href="/customers/view/?id=1268"></a>
            <a class="fp-logo-paytm" href="/customers/view/?id=1283"></a>
            <a class="fp-logo-alibaba" href="/customers/view/?id=1289"></a>
            <a class="fp-logo-wechat" href="/customers/view/?id=1287"></a>
            <a class="fp-logo-tencent" href="/customers/view/?id=1282"></a>
            <a class="fp-logo-taobao" href="/customers/view/?id=1290"></a>
            <a class="fp-logo-airbnb" href="/customers/view/?id=1271"></a>
            <a class="fp-logo-toyota" href="/customers/"></a>
        </div>
    </div>
    <br class="clear">
</div>


            
        </div>
    </div>

    <footer>
        <div id="footer-bottom">
                                    <div class="footer-contact">
                <div id="footer-contact-icon">
                    <span class="icon-call-phone"></span>
                </div>
                <div id="footer-contact-numbers">
                    <strong>Contact MySQL Sales</strong><br>
                    USA/Canada: +1-866-221-0634 &nbsp;
                    (<a href="https://www.mysql.com/about/contact/phone/" class="darker-blue">More Countries »</a>)
                </div>
                <div id="footer-contact-copyright">
                    <a href="http://www.oracle.com/" aria-label="Oracle" title="Oracle"><span class="oracle-logo"></span></a>
                    &nbsp; <a href="https://www.oracle.com/legal/copyright.html">© 2023 Oracle</a>
                </div>
            </div>
            <div class="social-icons">
                <a aria-label="Join us on Facebook" title="Join us on Facebook" href="http://www.facebook.com/mysql"><span class="icon-facebook-square"></span></a>
                <a aria-label="Follow us on Twitter" title="Follow us on Twitter" href="https://twitter.com/mysql"><span class="icon-twitter-square"></span></a>
                <a aria-label="Follow us on LinkedIn" title="Follow us on LinkedIn" href="https://www.linkedin.com/company/mysql"><span class="icon-linkedin-square"></span></a>
                <a aria-label="Visit our YouTube channel" title="Visit our YouTube channel" href="http://www.youtube.com/mysqlchannel"><span class="icon-youtube-square"></span></a>
            </div>
            <br class="clear">
        </div>
        <div id="footer-links">

            <div id="site-footer-links">
                <div id="footer-nav"></div>

                <div class="links">
                    <ul>
                        <li class="top"><a href="https://www.mysql.com/products/">Products</a></li>
                        <li><a href="https://www.mysql.com/cloud/">MySQL HeatWave</a></li>
                        <li><a href="https://www.mysql.com/products/enterprise/">MySQL Enterprise Edition</a></li>
                        <li><a href="https://www.mysql.com/products/standard/">MySQL Standard Edition</a></li>
                        <li><a href="https://www.mysql.com/products/classic/">MySQL Classic Edition</a></li>
                        <li><a href="https://www.mysql.com/products/cluster/">MySQL Cluster CGE</a></li>
                        <li><a href="https://www.mysql.com/oem/">MySQL Embedded (OEM/ISV)</a></li>
                    </ul>
                </div>

                <div class="links">
                    <ul>
                        <li class="top"><a href="https://www.mysql.com/services/">Services</a></li>
                        <li><a href="https://www.mysql.com/training/">Training</a></li>
                        <li><a href="https://www.mysql.com/certification/">Certification</a></li>
                        <li><a href="https://www.mysql.com/support/">Support</a></li>
                    </ul>
                </div>

                <div class="links">
                    <ul>
                        <li class="top"><a href="https://www.mysql.com/downloads/">Downloads</a></li>
                        <li><a href="https://dev.mysql.com/downloads/mysql/">MySQL Community Server</a></li>
                        <li><a href="https://dev.mysql.com/downloads/cluster/">MySQL NDB Cluster</a></li>
                        <li><a href="https://dev.mysql.com/downloads/shell/">MySQL Shell</a></li>
                        <li><a href="https://dev.mysql.com/downloads/router/">MySQL Router</a></li>
                        <li><a href="https://dev.mysql.com/downloads/workbench/">MySQL Workbench</a></li>
                    </ul>
                </div>

                <div class="links">
                    <ul>
                        <li class="top"><a href="https://dev.mysql.com/doc/">Documentation</a></li>
                        <li><a href="https://dev.mysql.com/doc/refman/en/">MySQL Reference Manual</a></li>
                        <li><a href="https://dev.mysql.com/doc/workbench/en/">MySQL Workbench</a></li>
                        <li><a href="https://dev.mysql.com/doc/index-cluster.html">MySQL NDB Cluster</a></li>
                        <li><a href="https://dev.mysql.com/doc/index-connectors.html">MySQL Connectors</a></li>
                        <li><a href="https://dev.mysql.com/doc/#topic">Topic Guides</a></li>
                    </ul>
                </div>

                <div class="links">
                    <ul>
                        <li class="top"><a href="https://www.mysql.com/about/">About MySQL</a></li>
                        <li><a href="https://www.mysql.com/about/contact/">Contact Us</a></li>
                        <li><a href="https://blogs.oracle.com/mysql/">Blogs</a></li>
                                                                        <li><a href="https://www.mysql.com/buy-mysql/">How to Buy</a></li>
                        <li><a href="https://www.mysql.com/partners/">Partners</a></li>
                        <li><a href="https://www.mysql.com/about/jobs/">Job Opportunities</a></li>
                        <li><a href="https://www.mysql.com/sitemap.html">Site Map</a></li>
                    </ul>
                </div>

                                <div id="footer-langs">
                    <span class="icon-earth"></span> English &nbsp;
                (
                                            <a data-localize-url="no" href="https://www.mysql.com/de/">Deutsch</a> |                                             <a data-localize-url="no" href="https://www.mysql.com/fr/">Français</a> |                                             <a data-localize-url="no" href="https://www.mysql.com/it/">Italiano</a> |                                             <a data-localize-url="no" href="https://www.mysql.com/jp/">日本</a> |                                             <a data-localize-url="no" href="https://www.mysql.com/cn/">中文</a>                                    )
                </div>
                            </div>

            <div id="footer-logo">
                <a href="http://www.oracle.com/" aria-label="Oracle" title="Oracle"><span class="oracle-logo"></span></a>
                &nbsp; <a href="https://www.oracle.com/legal/copyright.html">© 2023 Oracle</a>
                <div class="footer-legal-links">
                    <a href="https://www.oracle.com/legal/privacy/">Privacy</a> /
                    <a href="https://www.oracle.com/legal/privacy/privacy-choices.html">Do Not Sell My Info</a> |
                    <a href="https://www.oracle.com/us/legal/terms/index.html">Terms of Use</a> |
                    <a href="https://www.oracle.com/us/legal/third-party-trademarks/index.html">Trademark Policy</a> |
                    <div id="teconsent" consent="undefined" aria-label="Open Cookie Preferences Modal" class="truste_caIcon_display" role="complementary"><script async="async" type="text/javascript" crossorigin="" importance="high" src="https://consent.trustarc.com/asset/notice.js/v/v1.7-2141"></script><a role="link" id="icon-id08310888080108865" tabindex="0" lang="es" aria-haspopup="dialog" aria-label="Cookie Preferences, opens a dedicated popup modal window" class="truste_cursor_pointer">Preferencias sobre cookies</a></div>
                </div>
            </div>

        </div>
    </footer>
</div>

            <script>
    if ((oracle.truste.api.getGdprConsentDecision().consentDecision) &&
            (oracle.truste.api.getGdprConsentDecision().consentDecision.indexOf(0) != -1 ||
             oracle.truste.api.getGdprConsentDecision().consentDecision.indexOf(2) != -1) )
    {
        document.write('<script src="https://labs.mysql.com/common/js/metrics/ora_mysql.js"><\/script>');
        document.write('<script type="text/javascript" async src="//c.oracleinfinity.io/acs/account/wh3g12c3gg/js/mysql/odc.js?_ora.context=analytics:production"><\/script>');
    }
    </script><script src="https://labs.mysql.com/common/js/metrics/ora_mysql.js"></script><script src="https://www.oracle.com/us/assets/metrics/ora_code.js"></script><script type="text/javascript" async="" src="//c.oracleinfinity.io/acs/account/wh3g12c3gg/js/mysql/odc.js?_ora.context=analytics:production"></script>

                            
            <script>
                $(function(){
                    var rotator = new $.rotator();
                    rotator.init();
                    //var slider = new $.slider();
                    //slider.init();
                });
            </script>
            
            <script>var sc_product = 224;</script>
        <iframe src="javascript:false" title="Action Capture" role="presentation" style="position: absolute; width: 0px; height: 0px; border: 0px;"></iframe><script data-reqjq="" src="//www.oracle.com/asset/web/js/oracle-chat.js" id="oracle_chat" data-scchannel="SC MYSQL" data-path="/common/chat/chat-translation-data.json"></script><div id="oReactiveChatContainer" style="display:none" class="rn_ConditionalChatLink rn_ChatAvailable"><div id="atgchat-flyout" class="rn_ChatAvailable"><a id="rn_sccl_4499221_Link" href="javascript:void(0);" onclick="sccl_4499221.chatLinkClicked();"><div id="atgchat-flyout-info" class="rn_ChatAvailable">&nbsp;<span>Live Sales Chat</span></div></a></div><div id="oProactiveChat"></div></div>
    


<iframe name="trustarc_notice" id="trustarcNoticeFrame" title="Trustarc Cross-Domain Consent Frame" src="https://consent.trustarc.com/get?name=crossdomain.html&amp;domain=oracle.com" style="display: none;"></iframe><div class="ochat_slideout" data-trackas="ochat_slideout"><ul class="ochat_slidew2 active"><div class="ochat_flyout flyout-show flyout-fadein"><a href="#close" data-lbl="proactive:flyout-close" data-trackas="ochat-proactive-flyout" id="ochat-flyoutclose" aria-label="close-button"></a><a href="#saleschat" data-lbl="proactive:chatcta" data-trackas="proactive-chat-cta" class="procta chatcta">Start chat</a></div><li class="ochaticon1"><a href="#" data-lbl="chatslideout" class="ochat" aria-label="chat"></a></li></ul></div><div class="ochat_modal" data-trackas="ochat-modal" id="ochat_modal"><div class="ochat_modalw1"><div class="ochat_modalw2"><div id="proactivewrap" class="chatwrap"></div><a href="#closemodal" data-lbl="callchat:modal-close" id="chatclose"></a><a href="#minimize" data-lbl="callchat:modal-minimize" id="chatmin"></a><section class="ochat_panel ochat_sales iframechatwrap"><strong class="ochattitle">Sales Chat<a data-type="ochat_sales" class="ochaticon iframechat icnclass icnchat" target="_self" href="#saleschat"></a></strong><a href="#saleschat" data-lbl="sales:chatcta" data-type="ochat_sales" class="subcta iframechat ochat_sales" target="_self"><p class="ochatsub">Considering a purchase?</p></a><a href="#saleschat" data-lbl="sales:chatcta" data-type="ochat_sales" class="chatcta iframechat ochat_sales" target="_self">Start chat</a></section><div id="ochat_sales" class="chatwrap"></div><section class="ochat_panel ochat_support"><strong class="ochattitle">MySQL Support Options<a class="ochaticon icnclass icnsupport" target="_self" href="/support/"></a></strong><a href="/support/" data-lbl="support:chatcta" class="subcta" target="_self"><p class="ochatsub">Have a support request?</p></a><a href="/support/" data-lbl="support:chatcta" class="chatcta" target="_self">View support options</a></section></div></div></div></body></html>
@endsection