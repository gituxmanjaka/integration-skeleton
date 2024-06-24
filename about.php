<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | Integration skeleton</title>
    <?php @include "global/styles.php"; ?>
</head>
<body class="about">
    <?php $active_page = "about"; @include('components/header.php'); ?> 

    <main class="container">
        <h1>About of Integration Skeleton</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, eius quos? Id dolores dolorum doloremque impedit voluptate? Aut nisi tempore consequatur ipsum assumenda eveniet quo explicabo quae cum, perferendis perspiciatis!</p>
        <p class="global_p">This paragraph is colored teal overall, but chocolate for the home page. Open the console to inspect the applied style and see how the delimited style works.</p>
    </main>
    
    <?php @include('components/footer.php'); ?>

    <?php @include('global/scripts.php'); ?>
</body>
</html>