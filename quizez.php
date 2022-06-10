<?php
session_start();
include 'config.php';
$konektor = mysqli_connect("localhost", "root", "", "tki");

$authId = $_SESSION['id'];
$typeQuiz = $_GET['type'];
$query = "SELECT * FROM quests WHERE type = '$typeQuiz'";
$result = mysqli_query($konektor, $query);
// fetch
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ APP</title>
    <link rel="icon" type="image/x-icon" href="img\favicon.ico" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        var quizData = [];
        <?php foreach ($data as $quest) : ?>
            quizData.push({
                question: "<?= $quest['quest']; ?>",
                a: "<?= $quest['op_a']; ?>",
                b: "<?= $quest['op_b']; ?>",
                c: "<?= $quest['op_c']; ?>",
                d: "<?= $quest['op_d']; ?>",
                correct: "<?= $quest['correct']; ?>",
                point: "<?= $quest['point']; ?>"
            });
        <?php endforeach; ?>

        if (quizData.length == 0) {
            Swal.fire({
                title: 'Error',
                text: 'No data found',
                icon: 'error'
            });
            // redirect back
            setTimeout(function() {
                window.location.href = "TKITest.php";
            }, 2000);
        }

        const quiz = document.getElementById('quiz');
        const answerEls = document.querySelectorAll('.answer');
        const questionEl = document.getElementById('question');
        const a_text = document.getElementById('a_text');
        const b_text = document.getElementById('b_text');
        const c_text = document.getElementById('c_text');
        const d_text = document.getElementById('d_text');
        const submitBtn = document.getElementById('submit');
        var getPoint = 0;

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
                    getPoint += parseInt(quizData[currentQuiz].point);
                }

                currentQuiz++;

                if (currentQuiz < quizData.length) {
                    loadQuiz();
                } else {
                    quiz.innerHTML = `
                    <h2> You answered correctly at ${score}/${quizData.length} questions correctly point = ${getPoint}</h2>

                    <button onclick="location.reload()">
                    Reload
                    </button>
                    `

                    if(getPoint > 0){
                        quiz.innerHTML += `<button onclick="submitQuiz()">
                                            Submit
                                            </button>`
                    }
                }
            }
        })

        function submitQuiz() {
            $.ajax({
                url: "simpan-quiz.php",
                type: "POST",
                data: {
                    score: score,
                    point: getPoint,
                    tkid: <?= $authId; ?>,
                    type: '<?= $typeQuiz; ?>',
                },
                success: function(data) {
                    Swal.fire({
                        title: 'Quiz Selesai Dikirim',
                        text: data.message,
                        icon: 'success',
                        confirmButtonText: 'Kembali'
                    }).then(function() {
                        window.location.href = "TKITest.php";
                    });
                },
                error: function(err) {
                    console.log(err);
                }
            })
        }
    </script>
</body>

</html>