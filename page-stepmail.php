<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>対話型フォーム</title>
    <script>
        function showNextQuestion(answer) {
            var nextQuestion = document.getElementById('question2');
            if (answer === 'yes') {
                nextQuestion.style.display = 'block';
            } else {
                nextQuestion.style.display = 'none';
            }
        }
    </script>
</head>
<body>
    <form action="process_form.php" method="post">
        <!-- 質問1 -->
        <label for="question1">質問1: 続けますか？</label><br>
        <select name="question1" id="question1" onchange="showNextQuestion(this.value)">
            <option value="">選択してください</option>
            <option value="yes">はい</option>
            <option value="no">いいえ</option>
        </select>
        <br><br>

        <!-- 質問2（動的に表示される） -->
        <div id="question2" style="display:none;">
            <label for="question2">質問2: 続ける場合、次の選択肢は？</label><br>
            <select name="question2" id="question2">
                <option value="">選択してください</option>
                <option value="option1">オプション1</option>
                <option value="option2">オプション2</option>
            </select>
        </div>
        <br><br>

        <!-- 送信ボタン -->
        <input type="submit" value="送信">
    </form>
</body>
</html>
