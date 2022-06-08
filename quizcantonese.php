<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ APP</title>
    <link rel="icon" type="image/x-icon" href="img\favicon.ico" />
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap');

    * {
        box-sizing: border-box;
    }

    body {
        background-color: #498aec;
        background-image: linear-gradient(315deg, #0ba2e8 0%, orange 100%);
        font-family: 'Poppins', sans-serif;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        overflow: hidden;
        margin: 0;
    }

    .quiz-container {
        background-color: #fff;
        border-radius: 2%;
        box-shadow: 0 0 10px 2px rgba(100, 100, 100, 0.1);
        width: 37.5rem;
        overflow: hidden;
    }

    .quiz-header {
        padding: 4rem;
    }

    h2 {
        padding: 1rem;
        text-align: center;
        margin: 0;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    ul li {
        font-size: 1.2rem;
        margin: 1rem 0;
    }

    ul li label {
        cursor: pointer;
    }

    button {
        background-color: #33a1eb;
        border: none;
        color: #fff;
        display: block;
        width: 100%;
        cursor: pointer;
        font-size: 1.1rem;
        font-family: inherit;
        padding: 1.3rem;
    }

    button:hover {
        background-color: #3c8ae3;
    }

    button:focus {
        outline: none;
        background-color: #3c8ae3;
    }
</style>

<body>


    <div class="quiz-container" id="quiz">
        <div class="quiz-header">
            <h2 id="question">Question text</h2>
            <ul>
                <li>
                    <input type="radio" name="answer" id="a" class="answer">
                    <label for="a" id="a_text"> Question</label>
                </li>
                <li>
                    <input type="radio" name="answer" id="b" class="answer">
                    <label for="b" id="b_text"> Question</label>
                </li>
                <li>
                    <input type="radio" name="answer" id="c" class="answer">
                    <label for="c" id="c_text"> Question</label>
                </li>
                <li>
                    <input type="radio" name="answer" id="d" class="answer">
                    <label for="d" id="d_text"> Question</label>
                </li>
            </ul>
        </div>
        <button id="submit">Submit</button>
    </div>


    <script>
        const quizData = [{
            question: "Selamat pagi",
            a: "Caosan",
            b: "Em on",
            c: "Man On",
            d: "Fung Ying",
            correct: "a",
        }, {
            question: "Selamat siang",
            a: "Caosan",
            b: "Em on",
            c: "Man On",
            d: "Fung Ying",
            correct: "b",
        }, {
            question: "Selamat malam",
            a: "Caosan",
            b: "Em on",
            c: "Man On",
            d: "Fung Ying",
            correct: "c",
        }, {
            question: "Apa kabar ?",
            a: "To Ce",
            b: "Toi em cui",
            c: "Jeng Yap",
            d: "Lei ho",
            correct: "d",
        }, {
            question: "Tolong bantu saya",
            a: "Keito Ho a",
            b: "Pongo emkoi",
            c: "Ho chut sai",
            d: "Sap Yat Ho",
            correct: "b",
        }, {
            question: "Lei Kiu Mat Ye Meng ?",
            a: "Siapa nama kamu ?",
            b: "Dari mana asal kamu ?",
            c: "Berapa umur kamu ?",
            d: "Apa kabar ?",
            correct: "a",
        }, {
            question: "Lei yiu hoi pina ?",
            a: "Rumah kamu dimana ?",
            b: "Apa kamu sudah makan ?",
            c: "Mau pergi kemana ?",
            d: "Kapan kamu pulang ?",
            correct: "c",
        }, {
            question: "Lei keto soi a ?",
            a: "Siapa nama kamu ?",
            b: "Dari mana asal kamu ?",
            c: "Berapa umur kamu ?",
            d: "Apa kabar ?",
            correct: "c",
        }, {
            question: "Ngo kiu…",
            a: "Saya dari...",
            b: "Nama saya...",
            c: "Saya adalah...",
            d: "Ini adalah...",
            correct: "b",
        }, {
            question: "Kei Si",
            a: "Siapa",
            b: "Dimana",
            c: "Apa",
            d: "Kapan",
            correct: "d",
        }
        ];

        const quiz = document.getElementById('quiz');
        const answerEls = document.querySelectorAll('.answer');
        const questionEl = document.getElementById('question');
        const a_text = document.getElementById('a_text');
        const b_text = document.getElementById('b_text');
        const c_text = document.getElementById('c_text');
        const d_text = document.getElementById('d_text');
        const submitBtn = document.getElementById('submit');

        let currentQuiz = 0;
        let score = 0;

        loadQuiz();

        function loadQuiz() {
            deselectAnswer();

            const currentQuizData = quizData[currentQuiz];

            questionEl.innerText = currentQuizData.question;
            a_text.innerText = currentQuizData.a;
            b_text.innerText = currentQuizData.b;
            c_text.innerText = currentQuizData.c;
            d_text.innerText = currentQuizData.d;
        }

        function deselectAnswer() {
            answerEls.forEach(answerEl => answerEl.checked = false);
        }

        function getSelected() {
            let answer;

            answerEls.forEach(answerEl => {
                if (answerEl.checked) {
                    answer = answerEl.id;
                }
            });

            return answer;
        }

        submitBtn.addEventListener('click', () => {
            const answer = getSelected();

            if (answer) {
                if (answer === quizData[currentQuiz].correct) {
                    score++;
                }

                currentQuiz++;

                if (currentQuiz < quizData.length) {
                    loadQuiz();
                } else {
                    quiz.innerHTML = `
            <h2> You answered correctly at ${score}/${quizData.length} questions correctly</h2>

            <button onclick="location.reload()">
            Reload
            </button>
            `
                }
            }
        })

    </script>
</body>

</html>