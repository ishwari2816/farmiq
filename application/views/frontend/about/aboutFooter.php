<div id="footer">

</div>


<!--google bottom ad starts here-->
<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12  no-padding">
    <div class="container-main-fluid no-padding">
        <div class="adcontainer">
            <div class="container">
                <div class="d-flex justify-content-center">

                    <ins class="adsbygoogle btslot" style="display:inline-block" data-full-width-responsive="true" data-ad-client="ca-pub-3607455106280747" data-ad-slot="3108612860">
                    </ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>

<!--google bottom ad ends here-->

<!-- Compare html end here-->
<!-- Container end here-->



<script type="text/javascript">
    //<![CDATA[
    Sys.Application.add_init(function() {
        $create(AjaxControlToolkit.CascadingDropDownBehavior, {
            "Category": "State",
            "ClientStateFieldID": "CascadingState_ClientState",
            "LoadingText": "Loading States...",
            "PromptText": "Select State",
            "SelectedValue": "telangana",
            "ServiceMethod": "BindState",
            "ServicePath": "/get_data_ws.asmx",
            "id": "CascadingState"
        }, null, null, $get("ddlState"));
    });
    Sys.Application.add_init(function() {
        $create(AjaxControlToolkit.CascadingDropDownBehavior, {
            "Category": "District",
            "ClientStateFieldID": "CascadingDistrict_ClientState",
            "LoadingText": "Loading Districts...",
            "ParentControlID": "ddlState",
            "PromptText": "Select District",
            "SelectedValue": "hyderabad",
            "ServiceMethod": "BindDistrict",
            "ServicePath": "/get_data_ws.asmx",
            "id": "CascadingDistrict"
        }, null, null, $get("ddlDistrict"));
    });
    Sys.Application.add_init(function() {
        $create(AjaxControlToolkit.CascadingDropDownBehavior, {
            "Category": "Market",
            "ClientStateFieldID": "CascadingMarket_ClientState",
            "LoadingText": "Loading Markets...",
            "ParentControlID": "ddlDistrict",
            "PromptText": "Select Market",
            "SelectedValue": "bowenpally",
            "ServiceMethod": "BindMarket",
            "ServicePath": "/get_data_ws.asmx",
            "id": "CascadingMarket"
        }, null, null, $get("ddlMarket"));
    });
    //]]>
</script>
</form>
<!-- Vendor JS-->
<script async src="https://securepubads.g.doubleclick.net/tag/js/gpt.js">

</script>
<script src="<?php echo base_url(); ?>assets/js/main/modernizr-3.6.0.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main/jquery-3.6.0.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main/jquery-migrate-3.3.0.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main/slick.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main/jquery.syotimer.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main/wow.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main/slider-range.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main/perfect-scrollbar.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main/magnific-popup.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main/select2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main/waypoints.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main/counterup.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main/jquery.countdown.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main/images-loaded.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main/isotope.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main/scrollup.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main/jquery.vticker-min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main/jquery.theia.sticky.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main/jquery.elevatezoom.js"></script>
<!-- Template  JS -->
<script src="<?php echo base_url(); ?>assets/js/main/main.js?v=5.3"></script>
<script src="<?php echo base_url(); ?>assets/js/main/shop.js?v=5.3"></script>

<script>
    $(function() {
        $("#header").load("https://www.napanta.com/header.html");
        $("#footer").load("https://www.napanta.com/footer.html");
    });
</script>
<script async src="https://cse.google.com/cse.js?cx=0353f814ffb0eadc6"></script>
<div class="gcse-search"></div>
</body>

<script>
    function searchData() {
        if (document.getElementById("ddlState").value == "") {
            alert("Please select State");
        } else if (document.getElementById("ddlDistrict").value == "") {
            alert("Please select District");
        } else if (document.getElementById("ddlMarket").value == "") {
            alert("Please select Market");
        } else if (document.getElementById("fromdate").value == "") {
            alert("Please select Date");
        } else {
            var monthNames = ["", "jan", "feb", "mar", "apr", "may", "jun",
                "jul", "aug", "sep", "oct", "nov", "dec"
            ];
            var date_text = document.getElementById("fromdate").value.split("-");
            var date_value = date_text[2] + "-" + monthNames[parseInt(date_text[1])] + "-" + date_text[0];
            window.location = "https://www.napanta.com/market-price/" + document.getElementById("ddlState").value + "/" + document.getElementById("ddlDistrict").value + "/" + document.getElementById("ddlMarket").value + "/" + date_value;

        }
    }
</script>
<script data-ad-client="ca-pub-3607455106280747" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-93071946-1', 'auto');
    ga('send', 'pageview');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-51H410YD4L"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-51H410YD4L');
</script>

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "SoftwareApplication",
        "name": "NaPanta Smart Kisan Agri App",
        "operatingSystem": "ANDROID",
        "applicationCategory": "SmartAgriculture",
        "downloadUrl": "https://play.google.com/store/apps/details?id=com.napanta.farmer.app",
        "aggregateRating": {
            "@type": "AggregateRating",
            "bestRating": "5",
            "worstRating": "1",
            "ratingValue": "4.4",
            "reviewCount": "4712"
        },
        "screenshot": [
            "https://www.napanta.com/ad-img/app-features1.png",
            "https://www.napanta.com/ad-img/app-features.png"
        ],
        "offers": {
            "@type": "Offer",
            "price": "0",
            "priceCurrency": "INR"
        }
    }
</script>

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "brand",
        "name": "NaPanta Smart Kisan Agri App",
        "logo": "https://www.napanta.com/images/napanta-logo.png",
        "sameAs": ["https://www.instagram.com/napantaofficial",
            "https://twitter.com/napantaofficial",
            "https://www.facebook.com/napantaofficial",
            "https://www.linkedin.com/company/napanta"
        ]
    },
</script>
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "FarmGreen Agritech India Private Limited",
        "brand": "NaPanta Smart Kisan Agri App",
        "logo": "https://www.napanta.com/images/napanta-logo.png",
        "url": "https://www.napanta.com",
        "email": "support(at)NaPanta.com",
        "telephone": "(91)93461 99939",
        "sameAs": ["https://www.instagram.com/napantaofficial",
            "https://twitter.com/napantaofficial",
            "https://www.facebook.com/napantaofficial",
            "https://www.linkedin.com/company/napanta"
        ]
    }
</script>
<script type='text/javascript'>
    window.smartlook || (function(d) {
        var o = smartlook = function() {
                o.api.push(arguments)
            },
            h = d.getElementsByTagName('head')[0];
        var c = d.createElement('script');
        o.api = new Array();
        c.async = true;
        c.type = 'text/javascript';
        c.charset = 'utf-8';
        c.src = 'https://web-sdk.smartlook.com/recorder.js';
        h.appendChild(c);
    })(document);
    smartlook('init', '0e1d12790dc7c0c64b6fdc3f04ec83590c85f42b', {
        region: 'eu'
    });
</script>

<script>
    $(document).bind("contextmenu", function(e) {
        return false;
    });
</script>
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [{
            "@type": "ListItem",
            "position": 1,
            "item": {
                "@id": "https://www.napanta.com",
                "name": "NaPanta Smart Kisan Agri App"
            }
        }, {
            "@type": "ListItem",
            "position": 2,
            "item": {
                "@id": "https://www.napanta.com/market-price/telangana/hyderabad/bowenpally",
                "name": "Bowenpally market of Telangana wholesale Mandi Market prices today as of 15-Feb-2025"
            }
        }]
    }
</script>
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Table",
        "about": "Bowenpally Wholesale Mandi Market prices as of Today | 15-Feb-2025"
    }
</script>
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "Bowenpally Wholesale Mandi Market prices as of Today | 15-Feb-2025",
        "description": "Bowenpally Wholesale Mandi Market prices as of today. Find out other Mandi Market Prices daily from Telangana. A total of 3,05,103 farmers are using NaPanta Smart Kisan Agri App as of 15-02-2025."
    }
</script>
<!-- Facebook Pixel Code -->
<script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '2599739206703173');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2599739206703173&ev=PageView&noscript=1https://www.facebook.com/tr?id=2599739206703173&ev=PageView&noscript=1"></noscript>
<!-- End Facebook Pixel Code -->


</html>