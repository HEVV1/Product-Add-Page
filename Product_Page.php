<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <title>Product Page</title>
</head>
<body>
    <header class="header">
        <div class="header-holder1">
            <h1 class="">Product List</h1>
        </div>
        <div class="header-holder2">
            <button onclick="window.location.href= 'Product_Add.php';" id="button_add_page" class="header-holder2 button" type="button" >Add</button>
            <button form="delete_form" id="button_delete" class="header-holder2 button" type="submit">Delete</button>
        </div>
    </header>
    <hr>
    <section class="products section">
        <form id="delete_form" class="products-holder">

        </form>
    </section>
    <hr>
    <footer class="footer">
        <span>Scandiweb Test assignment</span>
        <span>© Juris Ancs</span>
    </footer>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="JS/script.js"></script>
<script src="JS/delete.js"></script>
</html>
