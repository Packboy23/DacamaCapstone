
<?php
$b2 = true;
include 'intervene.php';
?>
 

<html>
    <style>
         .instruction {
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            padding: 10px;
            margin: 20px 0;
            border-radius: 5px;
            font-size: 16px;
            color: green;
        }
    </style>
<body>

<div class="page-content" style="background-color: #f9f9f9">
<div class="card">
  <p><medium><p style="color: blue; font-weight: bold"> Instruction: Take the test. 
 Then if you fail, you must fill up the form in the ask for assistance.</p></medium></p>
</div>
</div>

<div class="page-content" style="background-color: #f9f9f9">
<div class="card" style="background-color: white; border-style: none; border-width: 10px; border-color: #1d7874; box-shadow: none;
border-top: 1px solid #e3ecf5; border-bottom: 1px solid #e3ecf5; border-left: 1px solid #e3ecf5; border-right: 1px solid #e3ecf5; ">

    <img style="height:1000px; width: 900px" src="images/exam.webp">

</div>
</div>
    <!-- 1 -->

<div style="margin-top: 90px; margin-left: 30px">
    <div style="margin-top: -950px; margin-left: 195px; position: absolute;">
    <input type="radio" name="q1" value="a1">
    </div>

    <div style="margin-top: -950px; margin-left: 450px; position: absolute;">
    <input type="radio" name="q1" value="b1">
    </div>

    <div style="margin-top: -913px; margin-left: 195px; position: absolute;">
    <input type="radio" name="q1" value="c1">
    </div>

    <div style="margin-top: -913px; margin-left: 450px; position: absolute;">
    <input type="radio" name="q1" value="d1">
    </div>

</div>
    

    <!-- 2 -->

<div style="margin-top: 193px; margin-left: 30px">

    <div style="margin-top: -950px; margin-left: 195px; position: absolute;">
    <input type="radio" name="q2" value="a2">
    </div>

    <div style="margin-top: -950px; margin-left: 450px; position: absolute;">
    <input type="radio" name="q2" value="b2">
    </div>

    <div style="margin-top: -915px; margin-left: 195px; position: absolute;">
    <input type="radio" name="q2" value="c2">
    </div>

    <div style="margin-top: -915px; margin-left: 450px; position: absolute;">
    <input type="radio" name="q2" value="d2">
    </div>

</div>

     <!-- 3 -->

<div style="margin-top: 295px; margin-left: 30px">

    <div style="margin-top: -950px; margin-left: 195px; position: absolute;">
    <input type="radio" name="q3" value="a3">
    </div>

    <div style="margin-top: -950px; margin-left: 450px; position: absolute;">
    <input type="radio" name="q3" value="b3">
    </div>

    <div style="margin-top: -915px; margin-left: 195px; position: absolute;">
    <input type="radio" name="q3" value="c3">
    </div>

    <div style="margin-top: -915px; margin-left: 450px; position: absolute;">
    <input type="radio" name="q3" value="d3">
    </div>

</div>


    <!-- 4 -->

<div style="margin-top: 395px; margin-left: 30px">

    <div style="margin-top: -950px; margin-left: 195px; position: absolute;">
    <input type="radio" name="q4" value="a4">
    </div>

    <div style="margin-top: -950px; margin-left: 450px; position: absolute;">
    <input type="radio" name="q4" value="b4">
    </div>

    <div style="margin-top: -915px; margin-left: 195px; position: absolute;">
    <input type="radio" name="q4" value="c4">
    </div>

    <div style="margin-top: -915px; margin-left: 450px; position: absolute;">
    <input type="radio" name="q4" value="d4">
    </div>

</div>

    <!-- 5 -->

<div style="margin-top: 518px; margin-left: 33px">

    <div style="margin-top: -948px; margin-left: 140px; position: absolute;">
    <input type="radio" name="q5" value="a5">
    </div>

    <div style="margin-top: -950px; margin-left: 450px; position: absolute;">
    <input type="radio" name="q2" value="b5">
    </div>

    <div style="margin-top: -913px; margin-left: 140px; position: absolute;">
    <input type="radio" name="q5" value="c5">
    </div>

    <div style="margin-top: -915px; margin-left: 450px; position: absolute;">
    <input type="radio" name="q5" value="d5">
    </div>

</div>

    <!-- 6 -->

<div style="margin-top: 618px; margin-left: 30px">

    <div style="margin-top: -948px; margin-left: 140px; position: absolute;">
    <input type="radio" name="q6" value="a6">
    </div>

    <div style="margin-top: -947px; margin-left: 450px; position: absolute;">
    <input type="radio" name="q6" value="b6">
    </div>

    <div style="margin-top: -911px; margin-left: 140px; position: absolute;">
    <input type="radio" name="q6" value="c6">
    </div>

    <div style="margin-top: -912px; margin-left: 450px; position: absolute;">
    <input type="radio" name="q6" value="d6">
    </div>

</div>

    <!-- 6 -->

<div style="margin-top: 755px; margin-left: 30px">

    <div style="margin-top: -948px; margin-left: 140px; position: absolute;">
    <input type="radio" name="q7" value="a7">
    </div>

    <div style="margin-top: -946px; margin-left: 450px; position: absolute;">
    <input type="radio" name="q7" value="b7">
    </div>

    <div style="margin-top: -913px; margin-left: 140px; position: absolute;">
    <input type="radio" name="q7" value="c7">
    </div>

    <div style="margin-top: -913px; margin-left: 450px; position: absolute;">
    <input type="radio" name="q7" value="d7">
    </div>

</div>
   
   

</div>
</div>
    

    <div style="margin-left: 300px; margin-top: -850px;">
    <input type="button" value="Submit" onclick="calculateScore()" style="background-color: #22BAA0; width: 200px; height: 50px; border-color: transparent; color: white;">
    </div>

    

    <div  style="margin-left: 580px; margin-top: -45px; color: green" id="score-display"></div>
    

    <script>
        // Define correct answers
        const correctAnswers = {
        q1: 'b1',
        q2: 'd2',
        q3: 'c3',
        q4: 'b4',
        q5: 'a5',
        q6: 'a6',
        q7: 'a7',
        };

        function calculateScore() {
            let score = 0;

            // Loop through each question
            for (let questionName in correctAnswers) {
                const selectedOption = document.querySelector(`input[name="${questionName}"]:checked`);
                if (selectedOption) {
                    const userAnswer = selectedOption.value;

                    // Check if the user's answer is correct
                    if (userAnswer === correctAnswers[questionName]) {
                        score++;
                    }
                }
            }

            // Display the score in the designated <div> element
            const scoreDisplay = document.getElementById('score-display');
            scoreDisplay.innerHTML = `You're score is ${score} out of ${Object.keys(correctAnswers).length} <br> the passing score is 5`;
          
        }
            

 
        </script>
 

</div>
</div>

    
</body>
</html>