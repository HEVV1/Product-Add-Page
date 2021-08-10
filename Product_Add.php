
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <title>Product Add</title>
</head>
<body>
    <header class="header">
        <div class="header-holder1">
            <h1 class="">Product Add</h1>            
        </div>
        <div class="header-holder2">
            <button id="button_save" class="header-holder2 button" type="button">Save</button>
            <button id="button_cancel" class="header-holder2 button" type="button">Cancel</button>
        </div>        
    </header>
    <hr>
    <section class="productAdd section">
       <div class="productAdd-container">
           <div class="productAdd-container-attributes">
                <div class="productAdd-container-attributes-holder">
                    <label for="sku">SKU</label>
                    <input id="sku" placeholder="sku" type="text">    
                </div>
                <div class="productAdd-container-attributes-holder">
                    <label for="name">Name</label>
                    <input id="name" placeholder="name" type="text">
                </div>
                <div class="productAdd-container-attributes-holder">
                    <label for="price">Price ($)</label>
                    <input id="price" placeholder="price" type="number">
                </div>
           </div>
           <div class="productAdd-container-switcher">
               <div class="productAdd-container-switcher-holder">
                    <label for="productType">Type Switcher</label>
                    <select id="productType">
                        <option value="0">DVD</option>
                        <option value="1">Furniture</option>
                        <option value="2">Book</option>
                    </select>
               </div>

               <div class="productAdd-container-switcher-form">
                    <div class="productAdd-container-switcher-form-holder">
                        <label for="size">Size (MB)</label>
                        <input class="switchInput" id="size" placeholder="size" type="number">
                    </div>
                    <div class="productAdd-container-switcher-form-description">
                        <textarea placeholder="description" id="" cols="30" rows="10"></textarea>
                    </div>
               </div>
           </div>
       </div>
    </section>
    <hr>
    <footer class="footer">
        <span>Scandiweb Test assignment</span>            
        <span>© Juris Ancs</span>            
    </footer>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="/JS/data.js"></script>
<script src="JS/load_products.js"></script>
<script src="JS/products_add.js"></script>
</html>