<?php 
    include('includes/config.php');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Template</title>

    <link href="<?php echo SITE;?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo SITE;?>css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2b68d761f5.js"></script>
</head>

<body>

    <!-- HEADER -->
    <?php include('layout/header.php');?>

    <!-- BODY -->
    <main role="main" class="container">
        <h1 class="mt-5">Sticky footer with fixed navbar</h1>
        <p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom
            HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>body &gt;
                .container</code>.</p>
        <p>Back to <a href="../sticky-footer">the default sticky footer</a> minus the navbar.</p>
    </main>

    <!-- FOOTER -->
    <?php include('layout/footer.php');?>

</body>

</html>
