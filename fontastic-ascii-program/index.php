<!-- This program takes a Letter as input from the user, and gives the user an ASCII art version of that letter. -->
<!DOCTYPE html>
<html>
<head>
    <title>Fontastic Ascii Art Converter</title>
    <style>
        body{
            font-family: "Arial", "Helvetica", sans-serif;
        }
        h2, h4{
            text-align: center;
            color: #7E9586;
        }
        form{
        text-align: center;
        }
        #result{
            white-space: pre;
            text-align: center;
        }
        p{
            text-align: center;
        }
        #bg{
            position: relative;
            left: 30%;
            background-image: url('square-cloud-frame.avif');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            display: block;
            width: 30em;
            height: 30em;
            align-content: center;


        }
    </style>
</head>

<body>
<div id="bg">
<h2>Fontastic</h2>
<h4>Ascii Art Converter</h4>
<form method = "POST">
    <label for="letter">Enter a letter: </label>
    <input type="text" name="letter" max-length=1 required />
    <input type="submit"/>
</form>

<?php 
// what the following line does: if the server's request method is set to post, 
// then whatever is written to the input named as "letter", should be converted into an upper letter and stored at the varaible $char.
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $char = strtoupper($_POST["letter"]);
    // from A to M (14/7/2025)
    $patterns = [
       'A' => [
        "  *  ",
        " * * ",
        "*****",
        "*   *",
        "*   *"
    ],
    'B' => [
        "**** ",
        "*   *",
        "**** ",
        "*   *",
        "**** "
    ],
    'C' => [
        " ****",
        "*    ",
        "*    ",
        "*    ",
        " ****"
    ],
    'D' => [
        "****",
        "*    *",
        "*     *",
        "*    *",
        "****"
    ], 'E' => [
        "*****",
        "*",
        "*****",
        "*",
        "*****"
    ], 'F' => [
        "*****",
        "*",
        "*****",
        "*",
        "*"
    ], 'G' => [
        " **** ",
        "*     ",
        "*  ***",
        "*   * ",
        " **** "

    ],'H' => [
        "*   *",
        "*   *",
        "*****",
        "*   *",
        "*   *"

    ], 'I' => [
        "*****",
        "  *  ",
        "  *  ",
        "  *  ",
        "*****"

    ], 'J' => [
        "*****",
        "   * ",
        "   * ",
        "*  * ",
        " **  "

    ], 'K' => [
        "*   *",
        "*  * ",
        "***  ",
        "*  * ",
        "*   *"

    ],'L' => [
        "*    ",
        "*    ",
        "*    ",
        "*    ",
        "*****"

    ],'M' => [
        "*   *",
        "** **",
        "* * *",
        "*   *",
        "*   *"
    ]
    
    ];
    
    echo "<p>There you go! Ascii art for your letter $char is </p><div id='result'>";

    if(array_key_exists($char, $patterns)){
        foreach($patterns[$char] as $line){
            echo $line."\n";
        }
    } else {
        echo "<p>Sorry! we've yet to define the Ascii art of $char :( \n</p>";
    }
    echo "</div>";

} // end of if statement

?>
</div>
</body>
 </html>
