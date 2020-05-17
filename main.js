var hide = true;

//shows coordinates of selected image part
$(document).ready(function () {
    
    $('#photo').imgAreaSelect({
        
        onSelectEnd: function (img, selection) {
            $('input[name="x1"]').val(selection.x1);
            $('input[name="y1"]').val(selection.y1);
            $('input[name="x2"]').val(selection.x2);
            $('input[name="y2"]').val(selection.y2);            
            //prompt for tagging with submit.
            var x = prompt("Type tag:"  );
             $('input[name="tag"]').val(x);
             
             if (x!=null) {
                 $('form').submit();
            } else {
                
            }
            
             
            
    
        }
    });

});


/*
//BELOW is the Right CLick Menu
 $(document).ready(function(){
        $(document).bind('contextmenu',function(event){
            $("#contextmenu").css({"top": event.pageY + "px", "left": event.pageX + "px"}).show();
        
            event.preventDefault();
        });
    $(document).bind('click',function(){
        $("#contextmenu").hide();
    });
   });

$(document).bind('click',function () {
    $('#TagImage').show({
        hide: false
        
    });
    
});
*/
