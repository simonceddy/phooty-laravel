import { NO_REPEAT, REPEAT_REGULAR, REPEAT_REVERSED } from './consts';
import { hStripes, vStripes } from './patterns';

const renderers = [
  hStripes,
  vStripes
];

const opts = [
  NO_REPEAT,
  REPEAT_REGULAR,
  REPEAT_REVERSED,
];

// console.log('here');

function getVal() {
  return Math.floor(Math.random() * 256);
}

function getColours() {
  let num = Math.ceil(Math.random() * 4);

  if (num < 2) num = 2;

  const c = [];

  (new Int8Array(num)).forEach(() => {
    c.push({
      r: getVal(),
      g: getVal(),
      b: getVal(),
    });
  })

  return c;
}

function drawJumper(ctx, colours) {
  const rkey = Math.floor(Math.random() * renderers.length);
  const renderer = renderers[rkey];
  // console.log(renderer, rkey);
  if (renderer) {
    const opt = opts[Math.floor(Math.random() * opts.length)];
    renderer(ctx, colours, opt);
  }
}

const canvas = document.getElementById('jumper-canvas');
const ctx = canvas.getContext('2d');

drawJumper(ctx, getColours());

// console.log(renderers);
