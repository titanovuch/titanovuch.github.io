let str, stb;
function fun() {
  str = parseInt(main_form.t_str.value);
  stb = parseInt(main_form.t_stb.value);
  let res_str = "<table>\n";
  for (let i = 1; i <= str; i++) {
    res_str += "<tr>\n";
    for (let j = 1; j <= stb; j++) {
      res_str += "<td>";
      res_str +=
        '<input type = "text" id = "_' +
        i +
        "_" +
        j +
        '" value = "' +
        1 / (2 + j) +
        "" +
        Math.round(1 / (2 + j), 2) +
        '">';
      res_str += "</td>\n";
    }
    res_str += "</tr>\n";
  }
  res_str += "</table>";
  main_div.innerHTML = res_str;
}
function fun_build() {
  let res_str = "";
  let str_report = "";
  for (let i = 1; i <= str; i++) {
    let sum = 0;
    for (let j = 1; j <= stb; j++) {
      res_str = "sum += parseInt(main_form._" + i + "_" + j + ".value);";
      eval(res_str);
    }
    str_report = "добуток елементів останнього стовпця = " + sum + ";\n";
  }
  alert(str_report);
}
