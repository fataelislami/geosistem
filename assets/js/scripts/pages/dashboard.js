$(window).on("load", function() {
    var e="#7367F0", t="#EA5455", a="#FF9F43", o="#b9c3cd", r="#e7eef7", s= {
        chart: {
            height:100, type:"area", toolbar: {
                show: !1
            }
            , sparkline: {
                enabled: !0
            }
            , grid: {
                show:!1, padding: {
                    left: 0, right: 0
                }
            }
        }
        , colors:[e], dataLabels: {
            enabled: !1
        }
        , stroke: {
            curve: "smooth", width: 2.5
        }
        , fill: {
            type:"gradient", gradient: {
                shadeIntensity: .9, opacityFrom: .7, opacityTo: .5, stops: [0, 80, 100]
            }
        }
        , series:[ {
            name: "Subscribers", data: [28, 40, 36, 52, 38, 60, 55]
        }
        ], xaxis: {
            labels: {
                show: !1
            }
            , axisBorder: {
                show: !1
            }
        }
        , yaxis:[ {
            y:0, offsetX:0, offsetY:0, padding: {
                left: 0, right: 0
            }
        }
        ], tooltip: {
            x: {
                show: !1
            }
        }
    }
    ;
    new ApexCharts(document.querySelector("#subscribe-gain-chart"), s).render();
    var i= {
        chart: {
            height:100, type:"area", toolbar: {
                show: !1
            }
            , sparkline: {
                enabled: !0
            }
            , grid: {
                show:!1, padding: {
                    left: 0, right: 0
                }
            }
        }
        , colors:[a], dataLabels: {
            enabled: !1
        }
        , stroke: {
            curve: "smooth", width: 2.5
        }
        , fill: {
            type:"gradient", gradient: {
                shadeIntensity: .9, opacityFrom: .7, opacityTo: .5, stops: [0, 80, 100]
            }
        }
        , series:[ {
            name: "Orders", data: [10, 15, 8, 15, 7, 12, 8]
        }
        ], xaxis: {
            labels: {
                show: !1
            }
            , axisBorder: {
                show: !1
            }
        }
        , yaxis:[ {
            y:0, offsetX:0, offsetY:0, padding: {
                left: 0, right: 0
            }
        }
        ], tooltip: {
            x: {
                show: !1
            }
        }
    }
    ;
    new ApexCharts(document.querySelector("#orders-received-chart"), i).render();
    var n= {
        chart: {
            type:"bar", height:200, sparkline: {
                enabled: !0
            }
            , toolbar: {
                show: !1
            }
        }
        , states: {
            hover: {
                filter: "none"
            }
        }
        , colors:[r, r, e, r, r, r], series:[ {
            name: "Sessions", data: [75, 125, 225, 175, 125, 75, 25]
        }
        ], grid: {
            show:!1, padding: {
                left: 0, right: 0
            }
        }
        , plotOptions: {
            bar: {
                columnWidth: "45%", distributed: !0
            }
        }
        , tooltip: {
            x: {
                show: !1
            }
        }
        , xaxis: {
            type: "numeric"
        }
    }
    ;
    new ApexCharts(document.querySelector("#avg-session-chart"), n).render();
    var l= {
        chart: {
            height: 270, type: "radialBar"
        }
        , plotOptions: {
            radialBar: {
                size:150, startAngle:-150, endAngle:150, offsetY:20, hollow: {
                    size: "65%"
                }
                , track: {
                    background: "#fff", strokeWidth: "100%"
                }
                , dataLabels: {
                    value: {
                        offsetY: 30, color: "#99a2ac", fontSize: "2rem"
                    }
                }
            }
        }
        , colors:[t], fill: {
            type:"gradient", gradient: {
                shade: "dark", type: "horizontal", shadeIntensity: .5, gradientToColors: [e], inverseColors: !0, opacityFrom: 1, opacityTo: 1, stops: [0, 100]
            }
        }
        , stroke: {
            dashArray: 8
        }
        , series:[83], labels:["Completed Tickets"]
    }
    ;
    new ApexCharts(document.querySelector("#support-tracker-chart"), l).render();
    var d= {
        chart: {
            height: 325, type: "radialBar"
        }
        , colors:[e, a, t], fill: {
            type:"gradient", gradient: {
                shade: "dark", type: "vertical", shadeIntensity: .5, gradientToColors: ["#8F80F9", "#FFC085", "#f29292"], inverseColors: !1, opacityFrom: 1, opacityTo: 1, stops: [0, 100]
            }
        }
        , stroke: {
            lineCap: "round"
        }
        , plotOptions: {
            radialBar: {
                size:165, hollow: {
                    size: "20%"
                }
                , track: {
                    strokeWidth: "100%", margin: 15
                }
                , dataLabels: {
                    name: {
                        fontSize: "18px"
                    }
                    , value: {
                        fontSize: "16px"
                    }
                    , total: {
                        show:!0, label:"Total", formatter:function(e) {
                            return 42459
                        }
                    }
                }
            }
        }
        , series:[70, 52, 26], labels:["Finished", "Pending", "Rejected"]
    }
    ;
    new ApexCharts(document.querySelector("#product-order-chart"), d).render();
    var c= {
        chart: {
            height:400, type:"radar", dropShadow: {
                enabled: !0, blur: 8, left: 1, top: 1, opacity: .2
            }
            , toolbar: {
                show: !1
            }
        }
        , toolbar: {
            show: !1
        }
        , series:[ {
            name: "Sales", data: [90, 50, 86, 40, 100, 20]
        }
        , {
            name: "Visit", data: [70, 75, 70, 76, 20, 85]
        }
        ], stroke: {
            width: 0
        }
        , colors:[e, "#0DCCE1"], plotOptions: {
            radar: {
                polygons: {
                    strokeColors: ["#e8e8e8", "transparent", "transparent", "transparent", "transparent", "transparent"], connectorColors: "transparent"
                }
            }
        }
        , fill: {
            type:"gradient", gradient: {
                shade: "dark", gradientToColors: ["#9f8ed7", "#1edec5"], shadeIntensity: 1, type: "horizontal", opacityFrom: 1, opacityTo: 1, stops: [0, 100, 100, 100]
            }
        }
        , markers: {
            size: 0
        }
        , legend: {
            show:!0, position:"top", horizontalAlign:"left", fontSize:"16px", markers: {
                width: 10, height: 10
            }
        }
        , labels:["Jan", "Feb", "Mar", "Apr", "May", "Jun"], dataLabels: {
            style: {
                colors: [o, o, o, o, o, o]
            }
        }
        , yaxis: {
            show: !1
        }
        , grid: {
            show: !1
        }
    }
    ;
    new ApexCharts(document.querySelector("#sales-chart"), c).render();
    // var p=new Shepherd.Tour( {
    //     classes: "shadow-md bg-purple-dark", scrollTo: !0
    // }
    // );
    // p.addStep("step-1", {
    //     text:"Toggle Collapse Sidebar.", attachTo:".modern-nav-toggle .collapse-toggle-icon bottom", buttons:[ {
    //         text: "Skip", action: p.complete
    //     }
    //     , {
    //         text: "Next", action: p.next
    //     }
    //     ]
    // }
    // ), p.addStep("step-2", {
    //     text:"Create your own bookmarks. You can also re-arrange them using drag & drop.", attachTo:".bookmark-icons .icon-mail bottom", buttons:[ {
    //         text: "Skip", action: p.complete
    //     }
    //     , {
    //         text: "previous", action: p.back
    //     }
    //     , {
    //         text: "Next", action: p.next
    //     }
    //     ]
    // }
    // ), p.addStep("step-3", {
    //     text:"You can change language from here.", attachTo:".dropdown-language .flag-icon bottom", buttons:[ {
    //         text: "Skip", action: p.complete
    //     }
    //     , {
    //         text: "previous", action: p.back
    //     }
    //     , {
    //         text: "Next", action: p.next
    //     }
    //     ]
    // }
    // ), p.addStep("step-4", {
    //     text:"Try fuzzy search to visit pages in flash.", attachTo:".nav-link-search .icon-search bottom", buttons:[ {
    //         text: "Skip", action: p.complete
    //     }
    //     , {
    //         text: "previous", action: p.back
    //     }
    //     , {
    //         text: "Next", action: p.next
    //     }
    //     ]
    // }
    // ), p.addStep("step-5", {
    //     text:"Buy this awesomeness at affordable price!", attachTo:".buy-now bottom", buttons:[ {
    //         text: "previous", action: p.back
    //     }
    //     , {
    //         text: "Finish", action: p.complete
    //     }
    //     ]
    // }
    // ), 1200<$(window).width()&&!$("body").hasClass("menu-collapsed")?p.start():p.cancel(), $(window).on("resize", function() {
    //     p.cancel()
    // }
    // )
}

);
