/*!
 * jQuery ClassyLoader
 * www.class.pm
 *
 * Originaliy written by Marius Stanciu - Sergiu <marius@class.pm>
 * Licensed under the MIT license www.class.pm/LICENSE-MIT
 * Version 1.2.0
 * 
 * 
 */

function incrProgress(a) {
    loaderObj.draw(a, loaderObj.getPercent());
}

(function ($) {
    $.fn.ClassyLoader = function (settings) {
        function radius(e) {
            return Math.PI / 180 * e;
        }
        var defaultSettings = {
            width: 200,
            height: 200,
            displayOnLoad: true,
            percentage: 100,
            speed: 0,
            roundedLine: false,
            showRemaining: true,
            fontFamily: 'Helvetica',
            fontSize: '50px',
            showText: true,
            diameter: 80,
            fontColor: 'rgba(33, 154, 179, 1)',
            lineColor: 'rgba(33, 154, 179,1)',
            remainingLineColor: 'rgba(55, 55, 55, 0.2)',
            lineWidth: 5,
            start: 'top',
            startFrom: 0
        };


        settings = $.extend({
        }, defaultSettings, settings);


        var r = $(this);


        this.draw = function (percent, startFrom) {
            if (typeof percent !== 'undefined') {
                settings.percentage = percent;
            }
            var ctx = r[0].getContext("2d");
            var hw = r.width() / 2;
            var hh = r.height() / 2;
            var u = 100;
            var a = startFrom-1;
            var startPos = 50;
            var f = function (e) {
                var t = radius(360) / u;
                return t * e;
            };
            ctx.scale(1, 1);
            ctx.lineWidth = settings.lineWidth;
            ctx.strokeStyle = settings.lineColour;
            var l = function (s, u) {
                s = s || f(a);
                u = u || f(a + 1);
                ctx.clearRect(0, 0, r.width(), r.height());
                if (settings.showRemaining === true) {
                    ctx.beginPath();
                    ctx.strokeStyle = settings.remainingLineColor;
                    ctx.arc(hw, hh, settings.diameter, 0, 360);
                    ctx.stroke();
                    ctx.closePath();
                }
                ctx.strokeStyle = settings.lineColor;
                ctx.beginPath();
                if (settings.roundedLine === true) {
                    ctx.lineCap = 'round';
                }
                else {
                    ctx.lineCap = 'butt';
                }
                switch (settings.start) {
                    case 'top':
                        startPos = 1.5 * Math.PI;
                        break;
                    case 'bottom':
                        startPos = 0.5 * Math.PI;
                        break;
                    case 'right':
                        startPos = 1 * Math.PI;
                        break;
                    case 'left':
                    default:
                        startPos = 0;
                        break;
                }
                ctx.arc(hw, hh, settings.diameter, startPos, u + startPos);
                ctx.stroke();
                ctx.closePath();
                if (settings.showText === true) {
                    ctx.fillStyle = settings.fontColor;
                    ctx.font = settings.fontSize + " " + settings.fontFamily;
                    ctx.textAlign = "center";
                    ctx.textBaseline = "middle";
                    ctx.fillText(a + 1 + "%", hw, hh);
                }
            };
            setTimeout(function c() {
                l(f(a), f(a + 1));
                a += 1;
                if (a < settings.percentage) {
                    setTimeout(c, settings.speed);
                }
            }, settings.speed);
        };


        this.setPercent = function (percentage) {
            settings.percentage = percentage;
            return this;
        };


        this.getPercent = function () {
            return settings.percentage;
        };


        this.__constructor = function () {
            $(this).attr('width', settings.width);
            $(this).attr('height', settings.height);
            if (settings.displayOnLoad === true) {
                this.draw(settings.percentage, settings.startFrom);
            }
            return this;
        };
        return this.__constructor();
    };
})(jQuery);
