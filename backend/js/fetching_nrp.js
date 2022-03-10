
$(document).ready(function(){
    jQuery.ajax({
        type:"GET",
        url:"../php/get_data_nrp.php",
        dataType:"html",
        success: function(data2){
            console.log(data2);
            $('#tbody2').html(data2);
        }
    })
});

document.querySelector('#submit_research_from_tables').onclick=()=>{
    const keyword = document.querySelector('#search_from-tables').value;
    jQuery.ajax({
        type:"GET",
        url:"../php/get_data.php?keyword=".keyword,
        dataType:"html",
        success: function(data2){
            console.log(data2);
            // $('#tbody').html(data);
        }
    })
};