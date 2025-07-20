// This script performs brute-force on a given hash, testing every 6-digit numeric combination to recover the original PIN.

<!DOCTYPE html>

<head>
    <title>MD5 Hash Cracker</title>
</head>
<body>

<h3>This program outputs the 6-digit original pin, from the given hash string.</br>
    Paste the MD5 hash value in the field and get the original pin!</h3>
<p>
    <form method="get">
    <label for="hashcode">Hash Code: </label>
    <input type="text" name="hashcode"/>
    <input type="submit" value="Convert"/>
    </form>
</p>
<pre><?php 

$ogpin = "Not Found :(";


?></pre>
<p>Original Pin: <?php  htmlentities($ogpin); ?> </p>

<input type="reset" value="Reset" onclick="location.reload();"/>
</body>

</html>
