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
            question: "Siapa nama kamu ?",
            a: "Wo renshi ni ma ?",
            b: "Ni jiao shenme mingzi? ",
            c: "Ni cong nali lai de ?",
            d: "Gongxi nin chenggong ?",
            correct: "b",
        }, {
            question: "Terima kasih!",
            a: "Xiexie! ",
            b: "ta men",
            c: "Wo men ",
            d: "Nimen hao!",
            correct: "a",
        }, {
            question: "Ada yang bisa saya bantu ?",
            a: "Qingwen nin zhao shui ?",
            b: "Nin yao dian shen me ?",
            c: "Wo neng bangzhu ni ma ? ",
            d: "Nin shi lao shi ma?",
            correct: "c",
        }, {
            question: "Selamat jalan",
            a: "Ni zao",
            b: "Wu an",
            c: "Wo renshi",
            d: "Yilu ping’an",
            correct: "d",
        }, {
            question: "Halo",
            a: "Wo ai ni",
            b: "Ni hao",
            c: "Tian mimi",
            d: "Xiexie",
            correct: "b",
        }, {
            question: "Nǐ láizì nǎge guójiā  ?",
            a: "Siapa nama kamu ?",
            b: "Kamu datang dari negara mana ?",
            c: "Berapa umur kamu ?",
            d: "Apa kabar ?",
            correct: "b",
        }, {
            question: "Ni mingbai le ma ?",
            a: "Rumah kamu dimana ?",
            b: "Apa kamu sudah makan ?",
            c: "Mau pergi kemana ?",
            d: "Apakah kamu mengerti ?",
            correct: "d",
        }, {
            question: "Mei guanxi",
            a: "Tidak benar",
            b: "Saya sedih",
            c: "Tidak apa-apa",
            d: "Minta maaf",
            correct: "c",
        }, {
            question: "Duibuqi",
            a: "Maaf",
            b: "Baik",
            c: "Tidak",
            d: "Benar",
            correct: "a",
        }, {
            question: "Ni chi le ma ?",
            a: "Sudah mandi ?",
            b: "Sudah bangun ?",
            c: "Sudah pergi ?",
            d: "Sudah makan ?",
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