function fun() {
  let a, b, d;
  x = parseInt(main_form.t_x.value);
  y = parseInt(main_form.t_y.value);
  if (x / y > 0) d = 2 * x * y - 3;
  else if ((x > 0) & (y < 3)) d = (x * y) / 3;
  else d = 2 * x - 3 * y;
  main_form.t_d.value = "" + d;
}
