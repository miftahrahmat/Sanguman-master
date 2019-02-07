<!DOCTYPE html><html lang="en"><head><meta charSet="utf-8"/><meta http-equiv="X-UA-Compatible" content="IE=edge"/><title>Instalasi · Sanguman</title><meta name="viewport" content="width=device-width"/><meta name="generator" content="Docusaurus"/><meta name="description" content="&lt;p&gt;Sanguman dirancang untuk mempermudah anda dalam melakukan pemesanan nasi.&lt;/p&gt;
"/><meta name="docsearch:language" content="en"/><meta property="og:title" content="Instalasi · Sanguman"/><meta property="og:type" content="website"/><meta property="og:url" content="/sanguman-master/website/build/Sanguman-master/index"/><meta property="og:description" content="&lt;p&gt;Sanguman dirancang untuk mempermudah anda dalam melakukan pemesanan nasi.&lt;/p&gt;
"/><meta name="twitter:card" content="summary"/><link rel="shortcut icon" href="/sanguman-master/website/build/Sanguman-master/img/nasi.png"/><link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/dark.min.css"/><link rel="alternate" type="application/atom+xml" href="/sanguman-master/website/build/Sanguman-master/blog/atom.xml" title="Sanguman Blog ATOM Feed"/><link rel="alternate" type="application/rss+xml" href="/sanguman-master/website/build/Sanguman-master/blog/feed.xml" title="Sanguman Blog RSS Feed"/><script type="text/javascript" src="https://buttons.github.io/buttons.js"></script><script src="https://unpkg.com/vanilla-back-to-top@7.1.14/dist/vanilla-back-to-top.min.js"></script><script>
        document.addEventListener('DOMContentLoaded', function() {
          addBackToTop(
            {"zIndex":100}
          )
        });
        </script><link rel="stylesheet" href="/sanguman-master/website/build/Sanguman-master/css/main.css"/><script src="/sanguman-master/website/build/Sanguman-master/js/codetabs.js"></script></head><body class="sideNavVisible separateOnPageNav"><div class="fixedHeaderContainer"><div class="headerWrapper wrapper"><header><a href="/sanguman-master/website/build/Sanguman-master/"><img class="logo" src="/sanguman-master/website/build/Sanguman-master/img/nasi.png" alt="Sanguman"/><h2 class="headerTitleWithLogo">Sanguman</h2></a><div class="navigationWrapper navigationSlider"><nav class="slidingNav"><ul class="nav-site nav-site-internal"><li class="siteNavGroupActive siteNavItemActive"><a href="/sanguman-master/website/build/Sanguman-master/docs/en/doc" target="_self">Documents</a></li><li class=""><a href="/sanguman-master/website/build/Sanguman-master/en/help" target="_self">Help</a></li><li class=""><a href="/sanguman-master/website/build/Sanguman-master/blog" target="_self">Blog</a></li></ul></nav></div></header></div></div><div class="navPusher"><div class="docMainWrapper wrapper"><div class="container docsNavContainer" id="docsNav"><nav class="toc"><div class="toggleNav"><section class="navWrapper wrapper"><div class="navBreadcrumb wrapper"><div class="navToggle" id="navToggler"><i></i></div><h2><i>›</i><span>Mulai</span></h2><div class="tocToggler" id="tocToggler"><i class="icon-toc"></i></div></div><div class="navGroups"><div class="navGroup"><h3 class="navGroupCategoryTitle collapsible">Mulai<span class="arrow"><svg width="24" height="24" viewBox="0 0 24 24"><path fill="#565656" d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z"></path><path d="M0 0h24v24H0z" fill="none"></path></svg></span></h3><ul class="hide"><li class="navListItem navListItemActive"><a class="navItem" href="/sanguman-master/website/build/Sanguman-master/docs/en/doc">Instalasi</a></li><li class="navListItem"><a class="navItem" href="/sanguman-master/website/build/Sanguman-master/docs/en/doc1">Penggunaan Dasar</a></li><li class="navListItem"><a class="navItem" href="/sanguman-master/website/build/Sanguman-master/en/profile">Profile</a></li></ul></div><div class="navGroup"><h3 class="navGroupCategoryTitle collapsible">Penghargaan<span class="arrow"><svg width="24" height="24" viewBox="0 0 24 24"><path fill="#565656" d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z"></path><path d="M0 0h24v24H0z" fill="none"></path></svg></span></h3><ul class="hide"><li class="navListItem"><a class="navItem" href="/sanguman-master/website/build/Sanguman-master/docs/en/doc2">Koki Terajin</a></li><li class="navListItem"><a class="navItem" href="/sanguman/docs/en/doc3">Member paling sering makan</a></li><li class="navListItem"><a class="navItem" href="/sanguman-master/website/build/Sanguman-master/docs/en/doc4">Makanan Mubadzir</a></li></ul></div></div></section></div><script>
            var coll = document.getElementsByClassName('collapsible');
            var checkActiveCategory = true;
            for (var i = 0; i < coll.length; i++) {
              var links = coll[i].nextElementSibling.getElementsByTagName('*');
              if (checkActiveCategory){
                for (var j = 0; j < links.length; j++) {
                  if (links[j].classList.contains('navListItemActive')){
                    coll[i].nextElementSibling.classList.toggle('hide');
                    coll[i].childNodes[1].classList.toggle('rotate');
                    checkActiveCategory = false;
                    break;
                  }
                }
              }

              coll[i].addEventListener('click', function() {
                var arrow = this.childNodes[1];
                arrow.classList.toggle('rotate');
                var content = this.nextElementSibling;
                content.classList.toggle('hide');
              });
            }

            document.addEventListener('DOMContentLoaded', function() {
              createToggler('#navToggler', '#docsNav', 'docsSliderActive');
              createToggler('#tocToggler', 'body', 'tocActive');

              const headings = document.querySelector('.toc-headings');
              headings && headings.addEventListener('click', function(event) {
                if (event.target.tagName === 'A') {
                  document.body.classList.remove('tocActive');
                }
              }, false);

              function createToggler(togglerSelector, targetSelector, className) {
                var toggler = document.querySelector(togglerSelector);
                var target = document.querySelector(targetSelector);

                if (!toggler) {
                  return;
                }

                toggler.onclick = function(event) {
                  event.preventDefault();

                  target.classList.toggle(className);
                };
              }
            });
        </script></nav></div><div class="container mainContainer"><div class="wrapper"><div class="post"><header class="postHeader"><h1 class="postHeaderTitle">Instalasi</h1></header><article><div><span><p>Sanguman dirancang untuk mempermudah anda dalam melakukan pemesanan nasi.</p>
<hr>
<li><strong>Menginstall Sanguman</strong></li>
<br> 
<pre>
  <code class="hljs">
    1. Clone sanguman dari Github https://github.com/miftahrahmat/Sanguman-master.git
       atau klik link github yang terdapat di footer

    2. Setelah proses clone berhasil, kemudian buka terminal dan lakukan &quot;composer install&quot;

    3. Copy file example.env kemudian save dengan format .env

    4. Setelah file .env dimodifikasi, buka lagi terminal dan lakukan &quot;php artisan migrate&quot;
</code></pre>
</span></div></article></div><div class="docs-prevnext"><a class="docs-next button" href="/sanguman-master/website/build/Sanguman-master/docs/en/doc1"><span>Penggunaan Dasar</span><span class="arrow-next"> →</span></a></div></div></div><nav class="onPageNav"></nav></div><footer class="nav-footer" id="footer"><section class="sitemap"><a href="/sanguman-master/website/build/Sanguman-master/" class="nav-home"><img src="/sanguman-master/website/build/Sanguman-master/img/nasi.png" alt="Sanguman" width="66" height="58"/></a><div><h5>Document</h5><a href="/sanguman-master/website/build/Sanguman-master/docs/en/doc">Installasi</a><a href="/sanguman-master/website/build/Sanguman-master/docs/en/doc1">Cara Penggunaaan</a><a href="/sanguman-master/website/build/Sanguman-master/docs/en/doc2">Penghargaan</a></div><div><h5>Komunitas</h5><a href="/sanguman-master/website/build/Sanguman-master/en/users">User Showcase</a><a href="https://3.basecamp.com/4145457/buckets/10250713/chats/1487178050">Basecamp Chat</a><a href="https://twitter.com/" target="_blank" rel="noreferrer noopener">Twitter</a></div><div><h5>More</h5><a href="/sanguman-master/website/build/Sanguman-master/blog/index">Blog</a><a href="https://github.com/miftahrahmat/Sanguman-master">GitHub</a><a class="github-button" data-icon="octicon-star" data-count-href="/facebook/docusaurus/stargazers" data-show-count="true" data-count-aria-label="stargazers on GitHub" aria-label="Buka sanguman di Github">Star</a></div></section><a href="https://github.com/miftahrahmat/Sanguman-master" target="_blank" rel="noreferrer noopener" class="fbOpenSource"></a><section class="copyright">Copyright © 2019 Sanguman.co.id</section></footer></div><script>window.fbAsyncInit = function() {FB.init({appId:'1073891869459344',xfbml:true,version:'v2.7'});};(function(d, s, id){var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) {return;}js = d.createElement(s); js.id = id;js.src = '//connect.facebook.net/en_US/sdk.js';fjs.parentNode.insertBefore(js, fjs);}(document, 'script','facebook-jssdk'));
                </script><script>window.twttr=(function(d,s, id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return t;js=d.createElement(s);js.id=id;js.src='https://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js, fjs);t._e = [];t.ready = function(f) {t._e.push(f);};return t;}(document, 'script', 'twitter-wjs'));</script></body></html>