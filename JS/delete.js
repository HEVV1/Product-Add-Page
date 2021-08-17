$('#delete_form').submit(function(e){
    e.preventDefault();
    var checkboxId = [];
    $(".deleteCheckbox:checked").each(function(){
        checkboxId.push($(this).val());        
    });    
    $.ajax({
        type: "POST",
        url: "PHP/delete.php",
        data: {
            deleteId: checkboxId
        },         
        success: function (response) {
            if (checkboxId.length > 0) {
                for (let index = 0; index < checkboxId.length; index++) {
                    $('#product'+checkboxId[index]).remove();                
                }
            }
            else{
                $('.productbox').remove();
            }            
            console.log('Deletion successfull');
        },
        error: function(){
            console.log('Deletion failed');
        }
    });
})