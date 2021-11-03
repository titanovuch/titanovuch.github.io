let languge = "ua";
const letters_ua = ["а", "б", "в", "г", "ґ", "д", "е", "є", "ж", "з", "и", "і", "ї", "й", "к", "л", "м",
            "н", "о", "п", "р", "с", "т", "у", "ф", "х", "ц", "ч", "ш", "щ", "ь", "ю", "я"];
const letters_en = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n",
            "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"]

function createKeyboard_ua(letters = letters_ua) {
    let keys = ""
    letters.map((key, index) => {
        if (index % 11 === 0) {
            keys += "<br>"
        }
        keys += `<button onclick="addSymbol('${key}')">${key}</button>`
     })
    screenKeyboard.innerHTML = keys;
}

function createKeyboard_en(letters = letters_en) {
    let keys = ""
    letters.map((key, index) => {
        if (index % 11 === 0) {
            keys += "<br>"
        }
        keys += `<button onclick="addSymbol('${key}')">${key}</button>`
    })
    screenKeyboard.innerHTML = keys;
}

function clean() {
    document.getElementById('display').value = "";
}

function addSymbol(key) {
    document.getElementById('display').value += key;
}