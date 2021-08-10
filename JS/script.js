var objectCount;
var startCount = 1;
var endCount = 1;
//Use ajax for loading data from database using php script
//Load some data as page starts
$(document).ready(function(){
    ajaxRequest(startCount, endCount);
    setTimeout(function(){        
        
        recursive();
    }, 30);
});
function recursive(){    
    var bottom_screen_1 = $(window).scrollTop() + $(window).innerHeight();
    var lastElement_top_1 = $('.productbox').last().offset().top;    
    if (bottom_screen_1 >= lastElement_top_1) {    
        startCount = endCount+1;
        endCount += 1;
        ajaxRequest(startCount, endCount);
        setTimeout(function(){
            recursive();
        }, 30);        
    }    
}

//Load data according the Y-scroll
$(window).on('scroll resize', function() {
    //var top_screen = $(window).scrollTop()
    //var lastElement_bottom = $('.productbox').last().offset().top + $('.productbox').last().outerHeight();   
    var bottom_screen = $(window).scrollTop() + $(window).innerHeight();
    var lastElement_top = $('.productbox').last().offset().top;
    if (bottom_screen >= lastElement_top) {
        startCount = endCount+1;
        endCount += 1;
        ajaxRequest(startCount, endCount);
    }
})

function ajaxRequest(start, end){    
    $.ajax({
        type: "GET",
        url: "load_data.php?start="+start+"&end="+end,
        data: {},        
        dataType: "json",
        cache: false,
        success: function (response) {
            objectCount = response.length;
            var dataHtml = '';
            //So techically .each function iterates through object(in my case response)            
            $.each(response, function (index, value) { 
                productsContainer(value.sku, value.name, value.price, value.image, value.attribute, value.id);
            });
        },
        error: function (e) {
            console.log(response);
        }
    });    
}

//Function that displays data in  html
function productsContainer(sku, name, price, imgsrc, attribute, id){
    var output = '';
    var productsHolder = document.querySelector(".products-holder");

    output += 
    '<div id="product'+id+'" class="products-holder-box productbox">'+                
        '<input id="checkbox'+id+'" type="checkbox">'+
        '<img src="'+imgsrc+'" alt="">'+
        '<div class="products-holder-box-data">'+
            '<span class="products-holder-box-data-sku    Datatext">'+sku+'</span>'+
            '<span class="products-holder-box-data-name   Datatext">'+name+'</span>'+
            '<span class="products-holder-box-data-price  Datatext">'+price+'</span>'+  
            '<span class="products-holder-box-data-type   Datatext">'+attribute+'</span>'+
        '</div>'+
        '<div class="products-holder-box-overlay">'+
            '<span class="products-holder-box-overlay-name">'+name+'</span>'+
        '</div>'+
    '</div>';

    productsHolder.innerHTML += output;
}