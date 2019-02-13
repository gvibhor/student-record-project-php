<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Record</title>
    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
</head>
<body>
<form action="process.php" method="post">
<input type="file" id="fileinput"/>
    <button type='submit' id='btnLoad' value='Load' onclick='handleFileSelect();'>Load</button>

<div id="editor" name="editor"></div>
</form>



<script src="js/main.js"></script>
</body>
</html>