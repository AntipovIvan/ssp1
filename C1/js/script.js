'use strict';
var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');

function getMousePos(canvas, evt) {
  var rect = canvas.getBoundingClientRect();
  return {
    x: evt.clientX - rect.left,
    y: evt.clientY - rect.top,
  };
}

function draw(evt) {
  var pos = getMousePos(canvas, evt);

  context.fillStyle = '#000000';
  context.fillRect(pos.x, pos.y, 4, 4);
}
