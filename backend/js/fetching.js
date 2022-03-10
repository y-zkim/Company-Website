$(document).ready(function(){
    jQuery.ajax({
        type:"GET",
        url:"../php/get_data.php",
        dataType:"html",
        success: function(data){
            console.log(data);
            $('#tbody').html(data);
        }
    })
});

document.querySelector('#submit_research_from_tables').onclick=()=>{
    const keyword = document.querySelector('#search_from-tables').value;
    jQuery.ajax({
        type:"GET",
        url:"../php/get_data.php?keyword=".keyword,
        dataType:"html",
        success: function(data){
            console.log(data);
            // $('#tbody').html(data);
        }
    })
};
