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
function sub_moder(id){
   $.ajax({
     url:'sub_moderator.php',
     method:'GET',
     data:{
        id:id,
     },
     success:function(data){
        window.location.reload("adminuser.php");
     }
 }); 
}