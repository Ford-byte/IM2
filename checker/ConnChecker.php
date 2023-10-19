<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["myOption"])) {
    $selectedOption = $_POST["myOption"];
    echo "<script> 
          function play(){
              alert('You selected: $selectedOption');
          } 
    </script>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Selection Dropdown in PHP</title>
</head>
<body>
    <form method="POST">
        <label for="myDropdown">Select an option:</label>
        <select name="myOption" id="myDropdown" onchange="play()">
            <option value="option1">Option 1</option>
            <option value="option2">Option 2</option>
            <option value="option3">Option 3</option>
            <option value="option4">Option 4</option>
        </select>
    </form>
</body>
</html>
