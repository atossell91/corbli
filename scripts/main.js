var xOffset = 0;
var yOffset = 0;
var canDraw = false;
var el = null;
var canv = null;
var mouseX = 0;
var mouseY = 0;
function init() {
    el = document.getElementById('canv');
    var rec = el.getBoundingClientRect();
    xOffset = rec.left;
    yOffset = rec.top;
    canv = el.getContext('2d');
}
function mousedn(mouse) {
    if (mouse.button == 0) {
        canDraw = true;
    }
}
function mouseup(mouse) {
    if (mouse.button == 0) {
        canDraw = false;
    }
}
function draw(mouse) {
    canv.moveTo(mouseX, mouseY);
    mouseX = mouse.clientX - xOffset;
    mouseY = mouse.clientY - yOffset;
    if (!canDraw) {
        return;
    }
    canv.lineTo(mouseX, mouseY);
    canv.strokeStyle = 'hotpink';
    canv.lineWidth = 5;
    canv.stroke();
}
init();
el.onmousemove = draw;
el.onmousedown = mousedn;
el.onmouseup = mouseup;
