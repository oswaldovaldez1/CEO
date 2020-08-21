<div id="hola" class="hola"></div>
        <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>


<script>
var myVar = setInterval(myTimer, 3000);
var paso=0;
 /*$.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }  
           });*/
function myTimer() {
 

   
   // e.preventDefault();
  $.ajax({

           type:'GET',

           url:'/pruebas',

           //data:{paso:name, password:password, email:email},

           success:function(data){
                $( "div.hola" ).html(data.success);
                paso=paso+1;                 
              /*alert(data.success);*/

           }
});
if(paso==5){
    paso=0;
}
}
</script>