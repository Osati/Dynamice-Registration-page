function moderator(id){
    $.ajax({
      url:'moderator.php',
      method:'GET',
      data:{
         id:id,
      },
      success:function(data){
         window.location.reload("registration_info.php");
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
        window.location.reload("registration_info.php");
     }
 }); 
}