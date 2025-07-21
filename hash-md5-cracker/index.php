<!DOCTYPE html>
<html>
<head>
    <title>MD5 Hash Cracker</title>
</head>
<body>

<p>
    This program outputs the 6-digit original pin from the given hash string.<br>
    Paste the MD5 hash value in the field and get the original pin!
</p>

<form method="get">
    <label for="hashcode">Hash Code:</label>
    <input type="text" name="hashcode"/>
    <input type="submit" value="Convert"/>
</form>

<pre>
<?php 
$ogpin = "Not Found :("; // Default value

if (isset($_GET['hashcode'])) {
    $md5 = $_GET['hashcode'];
    $digits = "1234567890";

    // Generate all possible 6-digit combinations
    for ($i = 0; $i < strlen($digits); $i++) {
        $d1 = $digits[$i];
        for ($j = 0; $j < strlen($digits); $j++) {
            $d2 = $digits[$j];
            for ($k = 0; $k < strlen($digits); $k++) {
                $d3 = $digits[$k];
                for ($m = 0; $m < strlen($digits); $m++) {
                    $d4 = $digits[$m];
                    for ($n = 0; $n < strlen($digits); $n++) {
                        $d5 = $digits[$n];
                        for ($p = 0; $p < strlen($digits); $p++) {
                            $d6 = $digits[$p];
                            
                            $combination = $d1 . $d2 . $d3 . $d4 . $d5 . $d6;
                            $check = hash('md5', $combination);

                            if ($check === $md5) {
                                $ogpin = $combination;
                                break 6; // Exit all loops
                            }
                        }
                    }
                }
            }
        }
    }
}
?>
</pre>

<p>Original Pin: <?php echo htmlentities($ogpin); ?></p>
<input type="reset" value="Reset" onclick="location.reload();"/>

</body>
</html>
