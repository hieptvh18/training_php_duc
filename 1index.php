<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/css.css">
</head>
<body>

    <header class="main-content">
        <?php include 'menu.php'; ?>
    </header>
    
    <main class="main-content">
        <h1 class="header1">Noi dung trang nam o day</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>

        <form action="">
            <input type="text" placeholder="Nhap ten cua ban">
            <button type="button" id="btnClick2" onclick="changeContentABC()">Click me</button>
        </form>
    </main>
    
    <footer>Footer</footer>


    <!-- script -->
    <script>
        let button = document.getElementById('btnClick2');
        let h1 = document.getElementsByClassName('header1');

        let content = "Nội dung đã được thay đổi bởi JavaScript";
        
        function changeContentABC() {
            
            let input = document.querySelector('input').value;


            h1[0].innerText = input;
        }

    </script>
</body>
</html>
