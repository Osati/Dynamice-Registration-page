function moderator(id){
    $.ajax({
      url:'moderator.php',
      method:'GET',
      data:{
         id:id,
      },
      success:function(data){
         window.location.reload("adminuser.php");
      }
  }); 
}
// user admin js
function sup_moder(id){
   $.ajax({
     url:'sup_moderator.php',
     method:'GET',
     data:{
        id:id,
     },
     success:function(data){
        window.location.reload("adminuser.php");
     }
 }); 
}