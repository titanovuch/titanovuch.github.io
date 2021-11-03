var a = 5,
  b = 3;
var x = new Boolean(false);
let arr = new Array();
arr = ["Доброго", "дня", "викладач"];
if (a > b) {
  x = true;
} else {
  x = false;
}
document.write(`Вивід повного масиву<br>`)
for (var i = 0; i < 3; i++) {
    document.write(`${arr[i]}<br/>`);
  }
  document.write(`Вивід повного масиву закінчено<br>`)
document.write(`${a % b}<br/>${x}<br/>${arr%2}<br/>`);
