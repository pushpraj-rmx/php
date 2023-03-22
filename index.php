<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body> -->

<?php
echo <<<HTML

<h1>This is heading </h1>
 
<p>You can write html here</p>

<div class="box">
    <p>
        you can have a proper html document here.
    </p>
</div>

<style>
/* you can have css as well. */
h1 {
    color : red;
    font-weight : 900;
    font-family : sans-serif;
    font-size : 3em;
}
</style>

<script>
    // and js also if you want 
    console.log('Helllo from JS')
</script>


</body>
</html>
HTML;

function functionName()
{
    // code to be executed;
}

?>