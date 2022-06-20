"use strict";

var result;
function check() {
    var question;
    var value1;
    var value2;

    question = 1;
    value1 = 0;
    value2 = 0;
    result = "";

    var choice;

    for (question = 1; question <= 3; question++) {
        var q = document.forms['quiz'].elements['q' + question];
        for (var i = 0; i < q.length; i++) {
            if (q[i].checked) {
                choice = q[i].value;
            }
        }
        if (choice == "value1") {
            value1++;
        }
        if (choice == "value2") {
            value2++;
        }
    }
    if (value2 == 0) {
        // Нет правильных ответов
        result = document.getElementById('otv').innerHTML = 'Нет правильных ответов';
    }
    else if (value2 == 1) {
        // Один правильный ответ
        result = document.getElementById('otv').innerHTML = 'Один правильный ответ.';
    }
    else if (value2 == 2) {
        // Два правильных ответа
        result = document.getElementById('otv').innerHTML = 'Два правильных ответа.';
    }
    else if (value2 == 3) {
        // Три правильных ответа
        result = document.getElementById('otv').innerHTML = 'Три правильных ответа.';
    }
    else {
        result = document.getElementById('otv').innerHTML = 'Ошибка';
    }
}