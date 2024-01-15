<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <select name="Fruit">
        <option value="" disabled selected>Choose option</option>
        <option value="Apple">Apple</option>
        <option value="Banana">Banana</option>
        <option value="Coconut">Coconut</option>
        <option value="Blueberry">Blueberry</option>
        <option value="Strawberry">Strawberry</option>
    </select>
    <input type="submit" name="submit" vlaue="Choose options">
    <?php
    if(isset($_POST['submit'])){
    if(!empty($_POST['Fruit'])) {
        $selected = $_POST['Fruit'];
        echo 'You have chosen: ' . $selected;
    } else {
        echo 'Please select the value.';
    }
    }
?>
</form>
</body>
</html>