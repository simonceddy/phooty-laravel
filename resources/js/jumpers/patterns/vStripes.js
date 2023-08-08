import { NO_REPEAT, REPEAT_REGULAR, REPEAT_REVERSED } from "../consts";

/**
 *
 * @param {CanvasRenderingContext2D} ctx
 * @param {object[]} colours
 */
function noRepeat(ctx, colours) {
  const l = colours.length;
  const h = ctx.canvas.height;
  const a = ctx.canvas.width / l;

  colours.forEach(({ r, g, b, }, id) => {
    ctx.fillStyle = `rgb(${r},${g},${b})`;
    ctx.fillRect(a * id, 0, a * (id + 1), h);
  });
}

/**
 *
 * @param {CanvasRenderingContext2D} ctx
 * @param {object[]} colours
 */
function repeatRegular(ctx, colours) {
  const c = [...colours, ...colours];
  const l = c.length;
  const h = ctx.canvas.height;
  const a = ctx.canvas.width / l;

  c.forEach(({ r, g, b, }, id) => {
    ctx.fillStyle = `rgb(${r},${g},${b})`;
    ctx.fillRect(a * id, 0, a * (id + 1), h);
  });
}

/**
 *
 * @param {CanvasRenderingContext2D} ctx
 * @param {object[]} colours
 */
function repeatReverse(ctx, colours) {
  const c = [
    ...colours,
    ...colours.reverse()
  ];
  const l = c.length;
  const h = ctx.canvas.height;
  const a = ctx.canvas.width / l;


  c.forEach(({ r, g, b, }, id) => {
    ctx.fillStyle = `rgb(${r},${g},${b})`;
    ctx.fillRect(a * id, 0, a * (id + 1), h);
  });
}

export default function vStripes(ctx, colours = [], repeat = NO_REPEAT) {
  const l = colours.length;

  if (l > 0) {
    // draw
    switch (repeat) {
      case REPEAT_REGULAR:
        return repeatRegular(ctx, colours);
      case REPEAT_REVERSED:
        return repeatReverse(ctx, colours);
      case NO_REPEAT:
      default:
        return noRepeat(ctx, colours);
    }
  }

  return null;
}
