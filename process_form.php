<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $question1 = $_POST['question1'];
    $question2 = isset($_POST['question2']) ? $_POST['question2'] : '';

    echo "質問1の回答: " . htmlspecialchars($question1) . "<br>";
    
    if ($question1 === 'yes') {
        echo "質問2の回答: " . htmlspecialchars($question2) . "<br>";
    } else {
        echo "質問2は回答されませんでした。<br>";
    }
}
?>
