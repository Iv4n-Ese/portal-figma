$(document).ready(function() {

    $(".filter").click(function() {        
        var query = $('input:text[name=search-query]').val();        
        $("#result").hide("slow");        
        $(".pagination").hide("slow");
        
        $.ajax({
            type: 'post',
            url: 'consulta.php',
            data: {query:query},
            cache: false,            
            success: function(data){
                $("#query").html(data);
            }
        });
    
    });
});