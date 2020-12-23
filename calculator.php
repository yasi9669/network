<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Calculator</title>
</head>

<body>
    <form method="POST" attribute="post" action="calculating.php">
        <p>First Value:<br />
            <input type="number" required id="first" name="first"></p>
        <p>Second Value:<br />
            <input type="number" required id="second" name="second"></p>
        <input type="radio" required name="action" id="add" value="add" checked="true">
        <p>+</p><br />
        <input type="radio" required name="action" id="subtract" value="subtract">
        <p>-</p><br />
        <input type="radio" required name="action" id="times" value="times">
        <p>x</p><br />
        <input type="radio" required name="action" id="divide" value="divide">
        <p>/</p><br />
        <p></p>
        <button type="submit" id="answer">Calculate</button>
    </form>
</body>

</html>
