// <![CDATA[
var width = 25; // width of the eyes in pixels
var colour ='#FFFFFF'; //"#fffef2"; // colour of the eye
var iris =  "#000000"; //   colour of the iris (normally black);
var swide = 800;
var shigh = 600;
var sleft = 0;
var s_down = 0;

var glasses, lefteye, righteye;

function addLoadEvent(funky) {
    var oldonload = window.onload;
    if (typeof(oldonload) !== 'function') window.onload = funky;
    else window.onload = function () {
        if (oldonload) oldonload();
        funky();
    }
}

addLoadEvent(draw_eyes);

function draw_eyes() {
    var i, j, l, m;
    glasses = document.createElement("div");
    i = glasses.style;
    //i.position = "fixed";
    i.position = "absolute";
    i.top = "30px";
    i.left = "80px";
    i.width = "1px";
    i.height = "1px";
    i.overflow = "visible";
    i.zIndex = "00";
    document.body.appendChild(glasses);
    lefteye = document.createElement("div");
    righteye = document.createElement("div");
    i = lefteye.style;
    j = righteye.style;
    i.position = j.position = "absolute";
    i.width = j.width = "1px";
    i.height = j.height = "1px";
    i.overflow = j.overflow = "visible";
    i.zIndex = j.zIndex = "100";
    glasses.appendChild(lefteye);
    glasses.appendChild(righteye);
    for (m = -1.1; m < 2; m += 2.2) for (i = -width; i < width; i++) {
        l = Math.pow(width * width - i * i, 0.5);
        j = line(m * width - l, i, 2 * l, colour, 0.8);
        glasses.appendChild(j);
    }
    for (i = -width / 4; i < width / 4; i++) {
        l = Math.pow(width * width / 14 - i * i, 0.5);
        j = line(-1.1 * width - l, i, 2 * l, iris, 0.8);
        lefteye.appendChild(j);
    }
    for (i = -width / 4; i < width / 4; i++) {
        l = Math.pow(width * width / 14 - i * i, 0.5);
        j = line(1.1 * width - l, i, 2 * l, iris, 0.8);
        righteye.appendChild(j);
    }
    set_width();
    set_scroll();
}

function line(left, top, width, colour, opacity) {
    var d, s;
    d = document.createElement("div");
    s = d.style;
    s.position = "absolute";
    s.height = "1px";
    s.width = width + "px";
    s.left = left + "px";
    s.top = top + "px";
    s.overflow = "hidden";
    s.backgroundColor = colour;
    s.pointerEvents = "none";
    s.opacity = opacity;
    if (navigator.appName === "Microsoft Internet Explorer") s.filter = "alpha(opacity=" + (opacity * 100) + ")";
    return d;
}

document.onmousemove = mouse;
function mouse(e) {
    var x, y, xdiff, ydiff, distn;

    y = (e) ? e.pageY : event.y;
    x = (e) ? e.pageX : event.x;
    x -= sleft;
    y -= s_down;

    xdiff = x + (1.1 * width) - (swide * 0.5);
    ydiff = y - shigh / 2;
    distn = Math.pow(xdiff * xdiff + ydiff * ydiff, 0.5);
    if (distn > width / 2.5) {
        xdiff = xdiff * width / distn / 2.5;
        ydiff = ydiff * width / distn / 2.5;
    }
    lefteye.style.top = ydiff + "px";
    lefteye.style.left = xdiff + "px";

    xdiff = x - (1.1 * width) - (swide * 0.5);
    ydiff = y - shigh / 2;
    distn = Math.pow(xdiff * xdiff + ydiff * ydiff, 0.5);
    if (distn > width / 2.5) {
        xdiff = xdiff * width / distn / 2.5;
        ydiff = ydiff * width / distn / 2.5;
    }
    righteye.style.top = ydiff + "px";
    righteye.style.left = xdiff + "px";
}

document.onscroll = set_scroll;
function set_scroll() {
    if (typeof(self.pageYOffset) === "number") {
        s_down = self.pageYOffset;
        sleft = self.pageXOffset;
    }
    else if (document.body.scrollTop || document.body.scrollLeft) {
        s_down = document.body.scrollTop;
        sleft = document.body.scrollLeft;
    }
    else if (document.documentElement && (document.documentElement.scrollTop || document.documentElement.scrollLeft)) {
        sleft = document.documentElement.scrollLeft;
        s_down = document.documentElement.scrollTop;
    }
    else {
        s_down = 0;
        sleft = 0;
    }
}

window.onresize = set_width;
function set_width() {
    var sw_min = 999999;
    var sh_min = 999999;
    if (document.documentElement && document.documentElement.clientWidth) {
        if (document.documentElement.clientWidth > 0) sw_min = document.documentElement.clientWidth;
        if (document.documentElement.clientHeight > 0) sh_min = document.documentElement.clientHeight;
    }
    if (typeof(self.innerWidth) !== "undefined" && self.innerWidth) {
        if (self.innerWidth > 0 && self.innerWidth < sw_min) sw_min = self.innerWidth;
        if (self.innerHeight > 0 && self.innerHeight < sh_min) sh_min = self.innerHeight;
    }
    if (document.body.clientWidth) {
        if (document.body.clientWidth > 0 && document.body.clientWidth < sw_min) sw_min = document.body.clientWidth;
        if (document.body.clientHeight > 0 && document.body.clientHeight < sh_min) sh_min = document.body.clientHeight;
    }
    if (sw_min === 999999 || sh_min === 999999) {
        sw_min = 800;
        sh_min = 600;
    }
    swide = sw_min;
    shigh = sh_min;
}
// ]]>

