<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Integration skeleton</title>
    <?php @include "global/styles.php"; ?>
</head>
<body class="home">
    <?php $active_page = "home"; @include('components/header.php'); ?>    


    <main class="container">
        <h1>Welcome to Integration Skeleton</h1>
        <p>Basic structure for integration</p>
        <p class="global_p">This paragraph is colored teal overall, but chocolate for the home page. Open the console to inspect the applied style and see how the delimited style works.</p>
    </main>

    
    <?php @include('components/footer.php'); ?>

    <?php @include('global/scripts.php'); ?>
</body>
</html>