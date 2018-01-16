<!doctype html>
<html lang="en">
<head>

    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/pace/themes/orange/pace-theme-minimal.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/datatables/css-main/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/datatables/css-bootstrap/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/datatables-tabletools/css/dataTables.tableTools.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/vendor/animate/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/x-editable/bootstrap3-editable/css/bootstrap-editable.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap-tour/css/bootstrap-tour.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/jqvmap/jqvmap.min.css')}}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/skins/sidebar-nav-darkgray.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('admin/assets/css/skins/navbar3.css')}}" type="text/css">
    <!-- FOR DEMO PURPOSES ONLY. You should/may remove this in your project -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/favicon.png')}}">
</head>
<body>
<!-- WRAPPER -->
<div id="wrapper">
    <!-- NAVBAR -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="brand">
            <a href="/admin/admin">
                <img src="{{asset('images/logo-outplayed.png')}}" alt="Outplayed" class="img-responsive logo">
            </a>
        </div>
        <div class="container-fluid">
            <div id="tour-fullwidth" class="navbar-btn">
                <button type="button" class="btn-toggle-fullwidth"><i class="ti-arrow-circle-left"></i></button>
            </div>
            <div id="navbar-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{asset('admin/assets/img/user.png')}}" alt="Avatar">
                            <span>Samuel</span>
                        </a>
                        <ul class="dropdown-menu logged-user-menu">
                            <li><a href="#"><i class="ti-user"></i> <span>My Profile</span></a></li>
                            <li><a href="/logout"><i class="ti-power-off"></i> <span>Logout</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- LEFT SIDEBAR -->
    <div id="sidebar-nav" class="sidebar">
        <nav>
            <ul class="nav" id="sidebar-nav-menu">
                <li class="menu-group">Main</li>
                <li class="panel">
                    <a href="/admin/admin"><i class="ti-dashboard"></i> <span class="title">Dashboards</span></a>
                </li>
                <li class="panel">
                    <a href="#subNews" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i class="ti-notepad"></i> <span class="title">News</span> <i class="icon-submenu ti-angle-left"></i></a>
                    <div id="subNews" class="collapse ">
                        <ul class="submenu">
                            <li><a href="#">Add News</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="/admin/users"><i class="ti-user"></i> <span class="title">Users</span></a></li>
            </ul>
            <button type="button" class="btn-toggle-minified" title="Toggle Minified Menu"><i class="ti-arrows-horizontal"></i></button>
        </nav>
    </div>
    <!-- END LEFT SIDEBAR -->
    <!-- MAIN -->
    <div class="main">
        <!-- MAIN CONTENT -->
            @yield('body')
        <!-- END MAIN CONTENT -->
    </div>
    <!-- END MAIN -->
    <div class="clearfix"></div>
    <footer>
        <div class="container-fluid">
            <p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
        </div>
    </footer>
</div>
<!-- END WRAPPER -->
<!-- Javascript -->
<script src="{{asset('/admin/assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('/admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/admin/assets/vendor/pace/pace.min.js')}}"></script>
<script src="{{asset('/admin/assets/vendor/bootstrap-progressbar/js/bootstrap-progressbar.min.js')}}"></script>
<script src="{{asset('/admin/assets/vendor/Flot/jquery.flot.js')}}"></script>
<script src="{{asset('/admin/assets/vendor/Flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('/admin/assets/vendor/Flot/jquery.flot.time.js')}}"></script>
<script src="{{asset('/admin/assets/vendor/flot.tooltip/jquery.flot.tooltip.js')}}"></script>
<script src="{{asset('/admin/assets/vendor/x-editable/bootstrap3-editable/js/bootstrap-editable.min.js')}}"></script>
<script src="{{asset('/admin/assets/vendor/jquery.maskedinput/jquery.maskedinput.min.js')}}"></script>
<script src="{{asset('/admin/assets/vendor/moment/min/moment.min.js')}}"></script>
<script src="{{asset('/admin/assets/vendor/jquery-sparkline/js/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('/admin/assets/vendor/bootstrap-tour/js/bootstrap-tour.min.js')}}"></script>
<script src="{{asset('/admin/assets/vendor/jquery-ui/ui/widget.js')}}"></script>
<script src="{{asset('/admin/assets/vendor/jquery-ui/ui/data.js')}}"></script>
<script src="{{asset('/admin/assets/vendor/jquery-ui/ui/scroll-parent.js')}}"></script>
<script src="{{asset('/admin/assets/vendor/jquery-ui/ui/disable-selection.js')}}"></script>
<script src="{{asset('/admin/assets/vendor/jquery-ui/ui/widgets/mouse.js')}}"></script>
<script src="{{asset('/admin/assets/vendor/jquery-ui/ui/widgets/sortable.js')}}"></script>
<script src="{{asset('/admin/assets/vendor/datatables/js-main/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/admin/assets/vendor/datatables/js-bootstrap/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('/admin/assets/vendor/jquery-appear/jquery.appear.min.js')}}"></script>
<script src="{{asset('/admin/assets/vendor/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('/admin/assets/vendor/jqvmap/maps/jquery.vmap.world.js')}}"></script>
<script src="{{asset('/admin/assets/vendor/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{asset('/admin/assets/vendor/chart-js/Chart.min.js')}}"></script>
<script src="{{asset('/admin/assets/vendor/raphael/raphael.min.js')}}"></script>
<script src="{{asset('/admin/assets/vendor/justgage-toorshia/justgage.js')}}"></script>
<script src="{{asset('/admin/assets/scripts/klorofilpro-common.js')}}"></script>

<script>
    $(function()
    {
        // sales statistic chart
        var plot, sales, earnings;
        sales = [
            [gt(2013, 1, 1), 54],
            [gt(2013, 2, 1), 75],
            [gt(2013, 3, 1), 66],
            [gt(2013, 4, 1), 80],
            [gt(2013, 5, 1), 75],
            [gt(2013, 6, 1), 85],
            [gt(2013, 7, 1), 90]
        ];
        earnings = [
            [gt(2013, 1, 1), 200],
            [gt(2013, 2, 1), 600],
            [gt(2013, 3, 1), 360],
            [gt(2013, 4, 1), 550],
            [gt(2013, 5, 1), 300],
            [gt(2013, 6, 1), 800],
            [gt(2013, 7, 1), 900]
        ];
        plot = $.plot($('#sales-stat'),
            // data
            [
                {
                    data: sales,
                    label: "Sales"
                },
                {
                    data: earnings,
                    label: "Earnings",
                    yaxis: 2
                }],
            // options
            {
                series:
                    {
                        lines:
                            {
                                show: true,
                                lineWidth: 2,
                                fill: false
                            },
                        points:
                            {
                                show: true,
                                lineWidth: 1,
                                fill: true,
                                fillColor: "#fff"
                            },
                        shadowSize: 0
                    },
                grid:
                    {
                        hoverable: true,
                        clickable: true,
                        borderWidth: 0,
                        tickColor: "#EFF1F5",
                    },
                colors: ["#45AEEF", "#F89B03"],
                xaxis:
                    {
                        mode: "time",
                        timezone: "browser",
                        minTickSize: [1, "day"],
                        timeformat: "%a",
                        font:
                            {
                                color: "#a0aeba"
                            },
                        tickColor: "transparent",
                        autoscaleMargin: 0.02
                    },
                yaxis:
                    {
                        font:
                            {
                                color: "#a0aeba"
                            },
                    },
                yaxes: [
                    {},
                    {
                        position: "right",
                        tickFormatter: function(val, axis)
                        {
                            return '$' + val;
                        }
                    }],
                legend:
                    {
                        show: false
                    },
                tooltip:
                    {
                        show: true,
                        cssClass: 'flotTip-black',
                        content: '%s: %y'
                    }
            }
        );
        // get day function
        function gt(y, m, d)
        {
            return new Date(y, m - 1, d).getTime();
        }
        // profile completeness meter
        var cPbar = $('.completeness-progress');
        cPbar.progressbar(
            {
                display_text: 'fill',
                update: function(current_percentage)
                {
                    if (current_percentage == 100)
                    {
                        $('.complete-info').addClass('text-success').html('<i class="fa fa-check-circle"></i> Hooray, it\'s done!');
                        cPbar.removeClass('progress-bar-info').addClass('progress-bar-success');
                        $('.completeness-meter .editable').editable('disable');
                    }
                }
            });
        $.fn.editable.defaults.mode = 'inline';
        $('#complete-phone-number').on('shown', function(e, editable)
        {
            editable.input.$input.mask('(999) 999-9999');
        }).on('hidden', function(e, reason)
        {
            if (reason == 'save')
            {
                $(this).parent().prepend('Phone: ');
                updateProfileMeter($(this), cPbar, 10);
            }
        });
        $('#complete-sex').on('hidden', function(e, reason)
        {
            if (reason == 'save')
            {
                $(this).parent().prepend('Sex: ');
                updateProfileMeter($(this), cPbar, 10);
            }
        });
        $('#complete-birthdate').on('hidden', function(e, reason)
        {
            if (reason == 'save')
            {
                $(this).parent().prepend('Birthdate: ');
                updateProfileMeter($(this), cPbar, 10);
            }
        });
        $('#complete-nickname').on('shown', function(e, editable)
        {
            editable.input.$input.val('');
        }).on('hidden', function(e, reason)
        {
            if (reason == 'save')
            {
                $(this).parent().prepend('Nickname: ');
                updateProfileMeter($(this), cPbar, 10);
            }
        });
        $('.completeness-meter #complete-phone-number').editable();
        $('#complete-sex').editable(
            {
                source: [
                    {
                        value: 1,
                        text: 'Male'
                    },
                    {
                        value: 2,
                        text: 'Female'
                    }]
            });
        $('#complete-birthdate').editable();
        $('#complete-nickname').editable();
        function updateProfileMeter(el, pbar, valueAdded)
        {
            // update progress bar
            pbar.attr('data-transitiongoal', parseInt(pbar.attr('data-transitiongoal')) + valueAdded).progressbar();
            // update element
            $(el).parent().find('i').removeClass('fa-circle-o').addClass('fa-check-circle');
            $(el).parent().addClass('done');
        }
        // mini bar charts
        $('#mini-bar-chart1').sparkline('html',
            {
                type: 'bar',
                barWidth: 8,
                height: 45,
                barColor: '#00B9EB',
                chartRangeMin: 0,
                chartRangeMax: 100
            });
        $('#mini-bar-chart2').sparkline('html',
            {
                type: 'bar',
                barWidth: 8,
                height: 45,
                barColor: '#EB9700',
                chartRangeMin: 0,
                chartRangeMax: 100
            });
        $('#mini-bar-chart3').sparkline('html',
            {
                type: 'bar',
                barWidth: 8,
                height: 45,
                barColor: '#72BB23',
                chartRangeMin: 0,
                chartRangeMax: 100
            });
        $('#mini-bar-chart4').sparkline('html',
            {
                type: 'bar',
                barWidth: 8,
                height: 45,
                barColor: '#FB5021',
                chartRangeMin: 0,
                chartRangeMax: 100
            });
        // Bootstrap tour
        var tour = new Tour(
            {
                steps: [
                    {
                        element: '#tour-help',
                        placement: 'bottom',
                        title: 'Welcome to Klorofil Pro',
                        content: 'Hello, welcome to Klorofil Pro. Use this tour feature to guide new users to your website or show existing users new features.',
                        onShow: function()
                        {
                            var popupSound = new Audio();
                            if (navigator.userAgent.match("Firefox/"))
                            {
                                popupSound.src = "assets/audio/popup.ogg";
                            }
                            else
                            {
                                popupSound.src = "assets/audio/popup.mp3";
                            }
                            // sound setting saved on localStorage as 0 or 1, by default sound on (null value on localStorage)
                            $globalVolume = localStorage.getItem('global-volume');
                            if (($globalVolume == null || $globalVolume == '1'))
                            {
                                popupSound.play();
                            }
                        }
                    },
                    {
                        element: '#tour-sales-stat',
                        title: 'Backdrop Container',
                        backdrop: true,
                        content: 'Add backdrop container to give focus on the step. It can be added to all steps or certain step you choose.'
                    },
                    {
                        element: '#tour-online-count',
                        placement: 'top',
                        title: 'Anywhere on page',
                        content: 'You can target specific element on the page like this one. You can also determine the placement either right (default), bottom, left, top or auto.'
                    },
                    {
                        element: '#tour-fullwidth',
                        placement: 'bottom',
                        title: 'Layout',
                        content: 'This toggle button will make the layout at fullwidth mode. More space, more content. Try now!'
                    }, ],
                template: "<div class='popover tour'> " +
                "<div class='arrow'></div> " +
                "<h3 class='popover-title'></h3>" +
                "<div class='popover-content'></div>" +
                "<div class='popover-navigation'>" +
                "<button class='btn btn-default btn-sm' data-role='prev'>« Prev</button>" +
                "<button class='btn btn-primary btn-sm' data-role='next'>Next »</button>" +
                "<button class='btn btn-default btn-sm' data-role='end'>End tour</button>" +
                "</div>" +
                "</div>",
            });
       // tour.init();
      //  tour.start();
//        if (tour.ended())
//        {
//            tour.restart();
//        }
        $('.sortable-grid .sortable-item').sortable(
            {
                connectWith: '.sortable-grid .sortable-item',
                handle: '.panel-heading',
                forcePlaceholderSize: true,
            }).disableSelection();
        // online visitor, demo purpose
        setInterval(function()
        {
            $('.online-visitors .number').text(Math.floor(Math.random() * 100));
        }, 3000);
        // live chat support
        $('.table-chat-support').dataTable(
            {
                scrollX: false,
                scrollY: "300px",
                ordering: false,
                searching: false,
                info: false,
                scrollCollapse: true,
                paging: false,
            });
        $('.table-chat-support .page-tooltip').tooltip(
            {
                placement: 'bottom',
            });
        $('[data-toggle="popover"]').popover(
            {
                trigger: 'hover',
                container: 'body',
                html: true,
                content: function()
                {
                    var visitorContent, visitorImgPath;
                    var visitorName = 'Guest';
                    if ($(this).attr('data-visitor-img') === undefined)
                    {
                        visitorContent = '<i class="fa fa-user picture guest-avatar"></i>';
                    }
                    else
                    {
                        visitorName = $(this).attr('data-visitor-name');
                        visitorImgPath = $(this).attr('data-visitor-img');
                        visitorContent = '<img src="' + visitorImgPath + '" class="picture img-circle">';
                    }
                    console.log($(this).attr('data-visitor'));
                    return '<div class="online-visitor-data">' + '<div class="left">' + visitorContent + '<a href="#">Details</a>' + '</div>' + '<div class="right">' + '<div class="data">' + '<span class="label-data">Name :</span>' + '<span>' + visitorName + '</span>' + '</div>' + '<div class="data">' + '<span class="label-data">IP :</span>' + '<span><a href="#">123.111.101.76</a></span>' + '</div>' + '<div class="data">' + '<span class="label-data">Type :</span>' + '<span>Returning</span>' + '</div>' + '</div>' + '</div>';
                }
            });
        var runProgressShareOnce = false;
        $('#progress-share').bind('appear', function()
        {
            if (runProgressShareOnce) return false;
            $(this).each(function()
            {
                var $bar = $(this).find(".bar");
                var $val = $(this).find(".value");
                var perc = parseInt($val.text(), 10);
                var scale = 180 / parseInt($(this).attr('data-max'));
                $(
                    {
                        p: 0
                    }).animate(
                    {
                        p: perc
                    },
                    {
                        duration: 3000,
                        easing: "swing",
                        step: function(p)
                        {
                            $bar.css(
                                {
                                    transform: "rotate(" + (45 + (p * scale)) + "deg)",
                                });
                            $val.text(p | 0);
                        }
                    });
            });
            runProgressShareOnce = true;
        });
        var mapData = {
            "us": "2936",
            "dz": "2812",
            "ru": "2735",
            "fr": "2674",
            "mx": "2584",
            "de": "1986",
            "br": "1921",
            "ca": "1865",
            "id": "1352",
            "cn": "1322"
        }
        $('#map-email-opens').vectorMap(
            {
                map: 'world_en',
                backgroundColor: 'transparent',
                color: '#f2f4f6',
                borderColor: '#D1D4D7',
                borderOpacity: 0.5,
                values: mapData,
                scaleColors: ["#E7F5FF", "#9AA9B4"],
                normalizeFunction: 'polynomial'
            });
        $('#sales-performance').sparkline('html',
            {
                width: '70%',
                height: '40px',
                lineWidth: '2',
                lineColor: '#00aaff',
                fillColor: false,
                spotRadius: '2',
                highlightLineColor: '#aedaff',
                highlightSpotColor: '#71aadb',
                spotColor: false,
                minSpotColor: false,
                maxSpotColor: false,
                disableInteraction: false
            });
        // US customer locations
        var usMapData = {
            "al": "2936",
            "ca": "2812",
            "fl": "2735",
            "ga": "2674",
            "il": "2584",
            "ma": "1986",
            "nv": "1921",
            "ny": "1865",
            "ok": "1352",
            "tx": "1322"
        }
        $('#us-customers-map').vectorMap(
            {
                map: 'usa_en',
                backgroundColor: '#FAFBFC',
                color: '#f2f4f6',
                borderColor: '#D1D4D7',
                borderOpacity: 0.7,
                values: usMapData,
                scaleColors: ["#4671E0", "#5AA6F0"],
                normalizeFunction: 'polynomial'
            });
        // age bar chart
        Chart.defaults.global.defaultFontSize = 11;
        var ctxAgeBarChart = document.getElementById("age-chart").getContext("2d");
        var ageBarChart = new Chart(ctxAgeBarChart,
            {
                type: 'horizontalBar',
                data:
                    {
                        labels: ['18-22', '23-27', '28-32', '33-37', '38-42', '> 42'],
                        datasets: [
                            {
                                data: [400, 800, 500, 450, 300, 250],
                                backgroundColor: 'rgba(245,165,35,0.5)',
                            }]
                    },
                options:
                    {
                        responsive: true,
                        legend:
                            {
                                display: false
                            },
                        scales:
                            {
                                xAxes: [
                                    {
                                        display: false,
                                        ticks:
                                            {
                                                min: 0,
                                                max: 1000,
                                            }
                                    }],
                                yAxes: [
                                    {
                                        gridLines:
                                            {
                                                display: false,
                                                drawBorder: false
                                            }
                                    }]
                            }
                    }
            });
        // gauge chart
        var activityGauge = new JustGage(
            {
                id: "gauge",
                value: getRandomInt(0, 100),
                valueFontColor: '#5E6773',
                valueFontFamily: 'Roboto, sans-serif',
                valueMinFontSize: 28,
                symbol: '%',
                min: 0,
                max: 100,
                minTxt: '0%',
                maxTxt: '100%',
                label: 'resource allocated',
                labelFontColor: '#A0AEBA',
                labelMinFontSize: 12,
                counter: true,
                pointer: true,
                pointerOptions:
                    {
                        color: '#5E6773'
                    }
            });
        setInterval(function()
        {
            activityGauge.refresh(getRandomInt(0, 100));
        }, 2000);
        // sales chart
        var ctxSalesLineChart = document.getElementById("sales-chart").getContext("2d");
        var lineChart = new Chart(ctxSalesLineChart,
            {
                type: 'line',
                data:
                    {
                        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                        datasets: [
                            {
                                data: [400, 450, 370, 299, 205, 142, 120],
                                fill: false,
                                borderWidth: 2,
                                pointRadius: 5,
                                pointHoverRadius: 7,
                                borderColor: '#AB7DF6',
                                backgroundColor: '#fff',
                            }]
                    },
                options:
                    {
                        responsive: true,
                        legend:
                            {
                                display: false
                            },
                        layout:
                            {
                                padding:
                                    {
                                        left: 8,
                                        right: 8,
                                        top: 8,
                                        bottom: 8
                                    }
                            },
                        scales:
                            {
                                xAxes: [
                                    {
                                        display: false
                                    }],
                                yAxes: [
                                    {
                                        display: false
                                    }]
                            }
                    }
            });
    });
</script>
</body>
</html>