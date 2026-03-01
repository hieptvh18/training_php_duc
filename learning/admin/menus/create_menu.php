<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../assets/css/index.css">
</head>
<body>
    <div class="wrapper">
        <?php include_once('../layout/sidebar.php') ?>

        <div class="content">
            <h1>Add Menu</h1>

            <form action="handle_create_menu.php" method="POST">
                <label>Tên menu</label>
                <input type="text" name="name" placeholder="Nhập tên menu" required/>
                <br>
                <label>Link menu</label>
                <input type="url" name="url" placeholder="Nhập url"/>
                <br>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>