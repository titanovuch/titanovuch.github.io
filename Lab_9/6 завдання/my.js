function fun() {
  let a,
    b,
    sum = 0.0,
    i = 0.0,
    cur = 0.0;
  a = parseInt(main_form.t_a.value);
  b = parseInt(main_form.t_b.value);
  let to4nost = 0.001;
  do {
    i++;
    let factorial = 1;
    for (let j = 1; j <= i; j++) factorial *= j;
    cur = Math.pow(-1, i) * ((i + 1) / (i - 2)) * factorial;
    sum += cur;
  } while (cur > to4nost);
  main_form.t_c.value = "" + sum;
}
