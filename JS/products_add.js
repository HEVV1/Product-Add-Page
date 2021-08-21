$('.productAdd-container').submit(function(e){
   e.preventDefault();
   var currentForm = $(this);
   if (isItValid()) {
        $.ajax({
            type: "POST",
            url: "PHP/submit.php",
            data: currentForm.serialize(),
            success: function () {
                window.location.href = 'Product_Page.php';
                console.log('Success');
            },
            error: function(){
                console.log('Error');
            }
        });        
    }
    else{
        warning();
        console.log('false');
    }
}) 

//Check inputs fields
function isItValid(){
    var regex1 = /^[\sA-Za-z0-9]+$/;    
    if ($('#sku').val().match(regex1)&& 
        $('#name').val().match(regex1)&&
        $('#price').val().match(regex1)&&
        $('.switchInput').val().match(regex1)) {
        return true;
    }
    else{
        return false;
    }
   
}

//Shows warning after validating
function warning(){
    $('input').attr("placeholder", "Write something!");
    // $('input').addClass('your-class');
    $('body').append('<style>input::placeholder{color:red}</style>')
}

//Change form by selecting it
var switchedType = document.querySelector('.productAdd-container-switcher-form');
var productType = '0';
$('#productType').change(function(){
    var output = '';
    productType = $(this).children('option:selected').val();
    switch (productType) {
        case '0':            
            output = 
            '<div class="productAdd-container-switcher-form-holder">'+
                '<label for="size">Size (MB)</label>'+
                '<input id="size" name="size" class="switchInput" placeholder="size" type="number">'+
            '</div>';
            switchedType.innerHTML = output;
        break;
        case '1':
            output = 
            '<div class="productAdd-container-switcher-form-holder">'+
                '<label for="height">Height (CM)</label>'+
                '<input id="height" name="height" class="switchInput" placeholder="height" type="number">'+
            '</div>'+
            '<div class="productAdd-container-switcher-form-holder">'+
                '<label for="width">Width (CM)</label>'+
                '<input id="width" name="width" class="switchInput" placeholder="width" type="number">'+
            '</div>'+
            '<div class="productAdd-container-switcher-form-holder">'+
                '<label for="length">Length (CM)</label>'+
                '<input id="length" name="length" class="switchInput" placeholder="length" type="number">'+
            '</div>';
            switchedType.innerHTML = output;
        break;
        case '2':
            output = 
            '<div class="productAdd-container-switcher-form-holder">'+
                '<label for="weight">Weight (KG)</label>'+
                '<input id="weight" name="weight" class="switchInput" placeholder="weight" type="number">'+
            '</div>';
            switchedType.innerHTML = output;
        break;
        default:
        break;
    }    
})