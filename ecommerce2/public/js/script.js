$(document).ready(function(){
    $('.nav li').click(function(){
        $('.nav li').removeClass('active');
        $(this).addClass('active');
    });
    document.getElementById("min").addEventListener("click", function() {
        var q= document.getElementById("quantity").value;
        if(q>1)
        q--;
        document.getElementById("quantity").value=q;
     
     });
     document.getElementById("add").addEventListener("click", function() {
         var q= document.getElementById("quantity").value;
        
        q++;
        document.getElementById("quantity").value=q;
     });
   /*  document.getElementById("min_update").addEventListener("click", function() {
        var q= document.getElementById("quantity").value;
        if(q>1)
        q--;
        document.getElementById("quantity").value=q;
     
      
     });
     document.getElementById("add_update").addEventListener("click", function() {
         var q= document.getElementById("quantity").value;
        
        q++;
        document.getElementById("quantity").value=q;
     });*/
           
});
