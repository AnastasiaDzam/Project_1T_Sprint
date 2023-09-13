let correct_answer
const textarea = document.querySelector('textarea');
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.question_answer_btn').forEach((btns) => {
        btns.disabled = true
    })
    document.querySelectorAll('.question_answer_block_input').forEach((input) => {
        input.addEventListener('input', (type_input) => {
            input.parentElement.parentElement.lastElementChild.disabled = false
            correct_answer = input.parentElement.firstElementChild.value
        })
    })
});
let correctAnswers = {
    radio1: '2',
    radio2: '4',
    radio4: '10',
    radio3: '8',
    radio5: '13',
    radio6: '18'
};

function check(helpId, btnId, qId) {
    const helping = document.getElementById(helpId);
    const btn = document.getElementById(btnId);
    const form = document.getElementById(qId);
    for (question in correctAnswers) {
        for (let items in form.elements[question]) {
            console.log(correct_answer)
            console.log(correctAnswers[question])
            if (correct_answer === correctAnswers[question]) {
                console.log('true')
                helping.classList.remove("hide");
                btn.classList.add("hide");
                form.elements[question].forEach(radio => {
                    if (radio.value === correct_answer) {
                        radio.parentElement.lastElementChild.classList.add('correct')
                    } else {
                        radio.parentElement.lastElementChild.classList.add('wrong')
                    }
                    radio.disabled = true;
                })
                return
            } else if (correct_answer !== correctAnswers[question]) {
                console.log('false')
                helping.classList.remove("hide");
                btn.classList.add("hide");
                form.elements[question].forEach(radio => {
                    if (radio.value === correctAnswers[question]) {
                        radio.parentElement.lastElementChild.classList.add('correct')
                    } else {
                        radio.parentElement.lastElementChild.classList.add('wrong')
                    }
                    radio.disabled = true;
                })
                return;
            }
        }

    }
    ;
};
let text= document.getElementById('textarea_xds')
text.addEventListener('keyup', function () {
    if (this.scrollTop > 0) {
        this.style.height = this.scrollHeight + "px";
    }
});
