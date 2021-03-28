<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!-- saved from url=(0075)http://www.webstepbook.com/supplements/labsection/lab4-buyagrade/sucker.php -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Buy Your Way to a Better Education!</title>
    <link href="buyagrade.css" type="text/css" rel="stylesheet">
</head>

<body>
<?php
if(isset($_REQUEST['name']) && isset($_REQUEST['section']) && isset($_REQUEST['card']) && isset($_REQUEST["cardType"])){
    ?>
    <?php
    $file = 'suckers.txt';

    $current = file_get_contents($file);
    $current .= $_POST['name'] . ';' . $_POST['section'] . ';' . $_POST['card'] . ';' . $_POST['cardType'] . "\n";
    file_put_contents($file, $current);
    ?>
    <h1>Thanks, sucker!</h1>

    <p>Your information has been recorded.</p>
    <dl>
        <dt>Name</dt>
        <dd>
            <?= $_POST["name"] ?>
        </dd>

        <dt>Section</dt>
        <dd>
            <?= $_POST["section"] ?>
        </dd>

        <dt>Credit Card</dt>
        <dd>
            <?= $_POST["card"] . '(' . $_POST['cardType'] . ')'?>
        </dd>

        <p>Here are all the suckers who have submitted here:</p>

        <dd>
                <pre>
                <?php
                $homepage = nl2br(file_get_contents($file));
                print_r($homepage);
                ?>
                    </pre>

        </dd>
    </dl>
    <?php
}else{
    ?>
    <h1>Sorry</h1>
    <p>You didn't fill out the form completely. <a href="buyagrade.html">Try again?</a></p>
    <?php
}
?>
</body></html>