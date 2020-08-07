$("document").ready(
    function(){
        $("#SearchBar").keyup(function(){
            var input = $(this).val();
            if (input !=""){
                var list = $("#SearchValue").show();
                list.css({
                    fontSize:"1.2rem"
                })
                list.html("");
                $.ajax({
                    url: "fetch.php",
                    method: "POST",
                    data:{search:input},
                    dataType: "text",
                    success: function(data){
                        $('#SearchValue').html(data);
                    }
                })
                $("body").click(function(){
                    $("#SearchValue").hide();
                })
                $("#SearchValue").on("click","button",function(){
                    var option =  $(this).html();
                    var bar = document.getElementById("SearchBar");
                    bar.value = trim(option);
                    $("#SearchValue").hide();
                    
                })
            }
            else{
                $("#SearchValue").hide();
            }
        }
        )
    }
);

$('document').ready(function(){
    window.setInterval("getPosition_Width()",0);
  });
$('document').ready(function(){
    $('#overlayclose').click(function(){
        $('.overlay').hide();
    })
})
$('document').ready(function(){
    $('#navSearch').click(function(){
        $('.overlay').show();
        $('.navBar button').hide();
        $(".navBar").css({
            "width":"0px"
        })
    })
});

$('document').ready(function(){
    $('#overlaysearch').click(function(){
        $('form').submit();
    })
})

