"use strict";
 
function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
 
function genExample(num1, num2) {
    return [`${num1} * ${num2}`, parseInt(num1 * num2)];
}
 
function genOptionsAnswer(n, answer) {
    let posAnswer = getRandomInt(0, n-1);
    let option = 0;
    let labels = [];
    for(let i = 0; i < n; i++) {
        if(i === posAnswer) { option = answer;
        } else { option = getRandomInt(Math.abs(answer-20), answer+20); }
 
        let label = document.createElement("label");
        label.innerHTML = option;
 
        let inputRadio = document.createElement("input");
        inputRadio.type = "radio";
        inputRadio.name = "optionsAnswer";
        inputRadio.value = label.innerHTML;
        label.append(inputRadio);
 
        labels.push(label);
        }
    return labels;
}
 
function init() {
    [...form.getElementsByTagName('label')].forEach(el => el.remove());
    example = genExample( getRandomInt(1, 10), getRandomInt(1, 10) );
    labels = genOptionsAnswer(4, example[1]);
    task = document.getElementById("task");
    labels.forEach(el => form.prepend(el));
    task.innerHTML = example[0];
}
 
let form = document.getElementById("form");
let example;
let labels;
let task;
let correctAnswers = 0;
let totalQuestions = 0;
 
init();
    
let clicked = false;
form.pr.addEventListener('click', function() {
            
    if(clicked === true) return false;
    clicked = true;
    totalQuestions++;
    let answer = document.getElementById("answer");
    let result = document.getElementById("result");
 
    task.innerHTML = `${example[0]} = ${example[1]}`;
            
    answer.innerHTML = 'Відповідь: ' + form.optionsAnswer.value;
 
    if(+form.optionsAnswer.value === example[1]) {
        result.innerHTML = 'Вірно';
        result.style.color = 'green';
        correctAnswers++;
    } else {
        result.innerHTML = 'Неправильно';
        result.style.color = 'red';
    }
 
    setTimeout(() => {
        init();
        result.innerHTML = '';
        answer.innerHTML = '';
        clicked = false;
    }, 1000);
 
    let rightResultProcent = document.getElementById("rightResultProcent");
    let procent = (correctAnswers/totalQuestions)*100;
    rightResultProcent.innerHTML = (procent) ? procent.toFixed(0) + "%" : 0 + "%";
});
 
form.next.addEventListener('click', function() {
    init();
});