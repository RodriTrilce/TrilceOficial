"use strict";

/*
https://raw.githubusercontent.com/electerious/basicScroll/master/dist/basicScroll.min.js

*/


var _createClass = function() {
    function n(t, e) {
        for (var i = 0; i < e.length; i++) {
            var n = e[i];
            n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(t, n.key, n)
        }
    }
    return function(t, e, i) {
        return e && n(t.prototype, e), i && n(t, i), t
    }
}();

function _classCallCheck(t, e) {
    if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
}

var documentBody = document.body,
    isMobile = document.documentElement.clientWidth < 768,
    home = void 0,
    work = void 0,
    journal = void 0,
    journalPost = void 0,
    reveal = void 0,
    namespace = void 0;

function initPage() {
    documentBody.classList.contains("home-page") ? documentBody.classList.remove("loading") : setTimeout(function() {
        documentBody.classList.remove("loading")
    }, 500);

    for (var t = document.querySelectorAll("[data-script-src]"), l = 0, e = t.length; l < e; l++) {
        var i = t[l],
            n = i.getAttribute("data-script-src"),
            o = document.createElement("script");
        o.src = n, i.appendChild(o)
    }

    var r = document.querySelector("body.home-page-js");
    null !== r && (home = new Home(r));
}

function stopPage() {
    null != reveal && (reveal.stopEvents(), reveal = null), null != home && (home.stopEvents(), home = null), null != work && (work.stopEvents(), work = null), null != journal && (journal.stopEvents(), journal = null), null != journalPost && (journalPost.stopEvents(), journalPost = null)
}

window.addEventListener("load", function(e) {
    var _this = void 0,
        ui = document.querySelector(".ui"),
        uiInfo = document.querySelector(".ui .info"),
        mobileNav = document.querySelector(".mobile-nav"),
        navAbout = document.querySelector(".about-li button.link"),
        aboutBack = document.querySelector(".about .btn-back"),
        aboutContainer = document.querySelector(".about .container"),
        prevPage = void 0,
        nextPage = void 0,
        barbaContainer = document.querySelector(".barba-container"),
        colorModeSelection = "default";

        namespace = barbaContainer.getAttribute("data-namespace"), isMobile && documentBody.classList.add("isMobile"), isMobile || (ui.addEventListener("mouseenter", function(t) {
        documentBody.classList.contains("journal-post-page") && ui.classList.contains("bottom") ? documentBody.classList.add("uiHover") : documentBody.classList.contains("journal-post-page") || documentBody.classList.contains("uiHover") || ui.classList.contains("outline") || documentBody.classList.add("uiHover")
    }), ui.addEventListener("mouseleave", function(t) {
        documentBody.classList.contains("uiHover") && documentBody.classList.remove("uiHover")
    })), mobileNav.addEventListener("click", function(t) {
        t.stopPropagation(), t.preventDefault(), documentBody.classList.toggle("mobileNavOpen"), documentBody.classList.remove("uiHover")
    }), isMobile || (document.onkeydown = function(t) {
        t = t || window.event, documentBody.classList.contains("aboutShow") && 27 == t.keyCode && ((documentBody.classList.contains("home-page") || documentBody.classList.contains("work-page") && ui.classList.contains("bottom") || !documentBody.classList.contains("journal-page") && ui.classList.contains("bottom")) && documentBody.classList.remove("navTop"), documentBody.classList.remove("aboutShow"))
    });

    var FadeOutTransition = Barba.BaseTransition.extend({
            start: function() {
                Promise.all([this.newContainerLoading, this.outro()]).then(this.finish.bind(this))
            },
            outro: function() {
                var e = Barba.Utils.deferred();
                return documentBody.classList.add("loading"), documentBody.classList.contains("aboutShow") && documentBody.classList.remove("aboutShow"), documentBody.classList.contains("mobileNavOpen") && documentBody.classList.remove("mobileNavOpen"), ui.classList.contains("outline") && ui.classList.remove("outline"), ui.classList.contains("bottom") && ui.classList.remove("bottom"), setTimeout(function(t) {
                    e.resolve()
                }, 1e3), e.promise
            },
            finish: function() {
                window.scrollTo(0, 0), this.done()
            }
        }),

        HomeTransition = Barba.BaseTransition.extend({
            start: function() {
                Promise.all([this.newContainerLoading, this.outro()]).then(this.finish.bind(this))
            },
            outro: function() {
                var e = Barba.Utils.deferred();
                return documentBody.classList.add("overflowHidden"), documentBody.classList.contains("aboutShow") && documentBody.classList.remove("aboutShow"), documentBody.classList.contains("mobileNavOpen") && documentBody.classList.remove("mobileNavOpen"), ui.classList.contains("outline") && ui.classList.remove("outline"), ui.classList.contains("bottom") && ui.classList.remove("bottom"), setTimeout(function(t) {
                    documentBody.classList.add("outro")
                }, 250), setTimeout(function(t) {
                    "default" == colorModeSelection && documentBody.classList.remove("ultra-mode")
                }, 1500), setTimeout(function(t) {
                    documentBody.classList.add("loading"), documentBody.classList.remove("overflowHidden"), e.resolve()
                }, 2e3), e.promise
            },
            finish: function() {
                documentBody.classList.remove("outro"), window.scrollTo(0, 0), this.done()
            }
        });

    Barba.Pjax.getTransition = function() {
        return null != nextPage ? eval(nextPage) : FadeOutTransition
    };

    var Homepage = Barba.BaseView.extend({
        namespace: "home-page",
        onEnter: function() {
            documentBody.classList.add("home-page")
        },
        onEnterCompleted: function() {
            "default" != colorModeSelection || documentBody.classList.contains("ultra-mode") || documentBody.classList.add("ultra-mode"), documentBody.classList.add("home-page-js"), initPage(), setTimeout(function() {
                documentBody.classList.contains("navTop") && documentBody.classList.remove("navTop")
            }, 250)
        },
        onLeave: function() {
            stopPage(), documentBody.classList.remove("home-page-js")
        },
        onLeaveCompleted: function() {
            documentBody.classList.remove("home-page"), documentBody.classList.add("navTop"), documentBody.classList.remove("outro"), "default" == colorModeSelection && documentBody.classList.remove("ultra-mode")
        }
    });

    if(!this.isMobile){
      Homepage.init();
      Barba.Pjax.start();
    }
});

var _createClass = function() {
    function n(t, e) {
        for (var i = 0; i < e.length; i++) {
            var n = e[i];
            n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(t, n.key, n)
        }
    }
    return function(t, e, i) {
        return e && n(t.prototype, e), i && n(t, i), t
    }
}();

function _classCallCheck(t, e) {
    if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function")
}

var Home = function() {
        function e(t) {
            _classCallCheck(this, e), this.initVars(t), this.initEvents(), this.initHome()
        }
        return _createClass(e, [{
            key: "initVars",
            value: function(t) {
                this.documentBody = document.body, this.stagePerspective = document.querySelector(".stagePerspective"), this.stageContainer = document.querySelector(".stageContainer"), this.stage = document.querySelector(".stage"), this.projectsLi = document.querySelectorAll(".projects li"), this.projectsLiA = document.querySelectorAll(".projects li a"), this.isMobile = document.documentElement.clientWidth < 768, this.isSafari = !1, /^((?!chrome|android).)*safari/i.test(navigator.userAgent) && !this.isMobile && (this.isSafari = !0, this.documentBody.classList.add("safari")), this.scrollHeight = 0, this.scrollOffset = 0, this.scrollPercent = 0, this.stagePosition = this.scrollPercent, this.modifier = 0, this.resizeRef = this.resize.bind(this), this.scrollRef = this.scroll.bind(this), this.projectsLiClickRef = this.projectsLiClick.bind(this), this.projectsLiMouseOverRef = this.projectsLiMouseOver.bind(this), this.projectsLiMouseOutRef = this.projectsLiMouseOut.bind(this), this.projectsLiAClickRef = this.projectsLiAClick.bind(this)
            }
        }, {
            key: "initEvents",
            value: function() {
                var e = this;
                this.isMobile || setTimeout(function(t) {
                    window.addEventListener("resize", e.resizeRef, !1), e.stagePerspective.addEventListener("scroll", e.scrollRef, !1)
                }, 3e3);

                this.projectsLi.forEach(function(t) {
                    t.addEventListener("click", e.projectsLiClickRef, !1), t.addEventListener("mouseover", e.projectsLiMouseOverRef, !1), t.addEventListener("mouseout", e.projectsLiMouseOutRef, !1)
                })

                this.projectsLiA.forEach(function(t) {
                    t.addEventListener("click", e.projectsLiAClickRef, !1)
                });
            }
        }, {
            key: "stopEvents",
            value: function() {
                var e = this;
                window.removeEventListener("resize", e.resizeRef, !1), this.stagePerspective.removeEventListener("scroll", e.scrollRef, !1), this.projectsLi.forEach(function(t) {
                    t.removeEventListener("click", e.projectsLiClickRef, !1), t.removeEventListener("mouseover", e.projectsLiMouseOverRef, !1), t.removeEventListener("mouseout", e.projectsLiMouseOutRef, !1)
                }), this.projectsLiA.forEach(function(t) {
                    t.removeEventListener("click", e.projectsLiAClickRef, !1)
                })
            }
        }, {
            key: "initHome",
            value: function() {
                var t = this;
                this.documentBody.classList.add("intro"), setTimeout(function() {
                    t.stageContainer.style.opacity = 1
                }, 300), this.isMobile || (this.resize(), this.loop()), setTimeout(function() {
                    t.documentBody.classList.remove("intro")
                }, 2900), this.isMobile && document.querySelectorAll(".perspective-origin-tt-bb").forEach(function(t) {

                  /*
                    basicScroll.create({
                        elem: t,
                        from: "top-top",
                        to: "bottom-bottom",
                        direct: !0,
                        props: {
                            "perspective-origin-y": {
                                from: "25%",
                                to: "85%"
                            },
                            "--perspective-origin-y": {
                                from: "25%",
                                to: "85%"
                            }
                        }
                    }).start()
                    */
                })
            }
        }, {
            key: "resize",
            value: function() {
                this.isSafari || (this.modifier = .075 * this.documentBody.scrollWidth + 158), this.scrollHeight = this.stage.offsetHeight - this.modifier, this.stageContainer.style.height = this.scrollHeight + "px"
            }
        }, {
            key: "loop",
            value: function() {
                this.stagePosition = this.lerp(this.stagePosition, this.scrollPercent, .05), this.stagePosition = Math.floor(1e4 * this.stagePosition) / 1e4;
                var t = "translate3d( 0, " + this.stagePosition + "px, 0)";
                this.stage.style.mozTransform = t, this.stage.style.webkitTransform = t, this.stage.style.transform = t, this.loopRef = this.loop.bind(this), requestAnimationFrame(this.loopRef)
            }
        }, {
            key: "lerp",
            value: function(t, e, i) {
                return (1 - i) * t + i * e
            }
        }, {
            key: "scroll",
            value: function() {
                document.documentElement.clientWidth;
                this.scrollOffset = this.stagePerspective.pageYOffset || this.stagePerspective.scrollTop, this.scrollPercent = this.scrollOffset / (this.scrollHeight - this.documentBody.offsetHeight) || 0, this.scrollPercent *= -.075 * this.documentBody.scrollWidth - 158
            }
        }, {
            key: "projectsLiClick",
            value: function(t) {
              //console.log(t)

                // t.stopPropagation(), t.preventDefault();
                /*
                var e = t.target,
                    i = e.querySelector("a"),
                    n = i.getAttribute("href");
                e.classList.add("isSelected"), Barba.Dispatcher.trigger("linkClicked", i, t), Barba.Pjax.goTo(n)
                */
            }
        }, {
            key: "projectsLiMouseOver",
            value: function(t) {
                var e = document.querySelectorAll(".isHovered"),
                    i = document.querySelector(".projects");
                e.forEach(function(t, e) {
                    t.classList.remove("isHovered")
                }), t.target.classList.add("isHovered"), i.classList.add("isHovering")
            }
        }, {
            key: "projectsLiMouseOut",
            value: function(t) {
                var e = document.querySelectorAll(".isHovered"),
                    i = document.querySelector(".projects");
                e.forEach(function(t, e) {
                    t.classList.remove("isHovered")
                }), i.classList.remove("isHovering")
            }
        }, {
            key: "projectsLiAClick",
            value: function(t) {
              //console.log(t);

                //t.stopPropagation(), t.preventDefault();
            /*
            var e = t.target.getAttribute("href");
            t.target.closest(".projectsLi").classList.add("isSelected"), Barba.Dispatcher.trigger("linkClicked", t.target, t), Barba.Pjax.goTo(e)
            */
            }
        }]), e
    }(),

_createClass = function() {
    function n(t, e) {
        for (var i = 0; i < e.length; i++) {
            var n = e[i];
            n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(t, n.key, n)
        }
    }
    return function(t, e, i) {
        return e && n(t.prototype, e), i && n(t, i), t
    }
}();


/*
Barba.Pjax.preventCheck = function() {
  console.log(this)
  //return false;
};
*/


//



var a = document.querySelectorAll('.link');

function link(t){
  window.location.href = window.location.hostname + "/" + t;
}
