function disableDwelling(){

    console.log("Desactivando viviendas");

    var selected_dwellings = [];

    $.each($("input[name='select-dwelling']:checked"), function(){
        selected_dwellings.push($(this).val());
    });

    console.log(selected_dwellings);

    var data = {};
    data["selected_dwellings"] = selected_dwellings;

    $.ajax({
        url: disable_post_url,
        method: 'post',
        data: data,
        success: function(data){
            $.each($("input[name='select-dwelling']:checked"), function(){
                $(this).parent().parent().parent().parent().parent().parent().children('.list-photo-overlay').removeClass('d-none');
                $(this).parent().parent().parent().parent().parent().parent().children('.list-photo-overlay').css('opacity','1');
                $(this).parent().parent().parent().parent().parent().children('.list-photo-overlay').removeClass('d-none');
                $(this).parent().parent().parent().parent().parent().children('.list-photo-overlay').css('opacity','1');
            });

            console.log(data);

            for(var i = 0; i < selected_dwellings.length; i++){

                dwelling.find( (x) =>{
                    return x.id == selected_dwellings[i];
                }).enable = 0;

                d_dwelling.find( (x) =>{
                    return x.id == selected_dwellings[i];
                }).enable = 0;
            }
            
        }
    });    

}

function enableDwelling(){

    console.log("Activando viviendas");

    var selected_dwellings = [];

    $.each($("input[name='select-dwelling']:checked"), function(){
        selected_dwellings.push($(this).val());
    });

    console.log(selected_dwellings);

    var data = {};
    data["selected_dwellings"] = selected_dwellings;

    $.ajax({
        url: enable_post_url,
        method: 'post',
        data: data,
        success: function(data){
            $.each($("input[name='select-dwelling']:checked"), function(){
                $(this).parent().parent().parent().parent().parent().parent().children('.list-photo-overlay').addClass('d-none');
                $(this).parent().parent().parent().parent().parent().parent().children('.list-photo-overlay').css('opacity','0');
                $(this).parent().parent().parent().parent().parent().children('.list-photo-overlay').addClass('d-none');
                $(this).parent().parent().parent().parent().parent().children('.list-photo-overlay').css('opacity','0');
            });
            console.log(data);

            for(var i = 0; i < selected_dwellings.length; i++){

                dwelling.find( (x) =>{
                    return x.id == selected_dwellings[i];
                }).enable = 1;

                d_dwelling.find( (x) =>{
                    return x.id == selected_dwellings[i];
                }).enable = 1;
            }
        }
    });   

}

function deleteDwelling(){

    console.log("Borrando viviendas");

    var selected_dwellings = [];

    $.each($("input[name='select-dwelling']:checked"), function(){
        selected_dwellings.push($(this).val());
    });

    console.log(selected_dwellings);

    var data = {};
    data["selected_dwellings"] = selected_dwellings;

    $.ajax({
        url: delete_post_url,
        method: 'post',
        data: data,
        success: function(data){
            console.log(data);

            $.each($("input[name='select-dwelling']:checked"), function(){
            
                d_dwelling = d_dwelling.filter( (x) =>{
                    return !(x.id == $(this).val())
                })

                dwelling = dwelling.filter( (x) =>{
                    return !(x.id == $(this).val())
                })

                currentPageDwelling = 1;
                setNumberOfPages();
                loadPageDwelling(currentPageDwelling);
            });
        }
    });
}


function detailDwelling(){

    var selected_dwellings = [];

    $.each($("input[name='select-dwelling']:checked"), function(){
        selected_dwellings.push($(this).val());
    });

    location.href = "/dwelling/show_details/"+selected_dwellings[0].toString();
}