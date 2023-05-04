function admin(){
    var usertype=$('admin').val();
    $.ajax({
        url:'adminuser.php',
        method:'GET',
        data:{id:id},
        success:function(data){
           $("tbody").html(data);
        }
     });
}