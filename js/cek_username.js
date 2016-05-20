$("#input-username").on('focus change keyup', function(event){
     var value = $("#input-username").val();

// Fire off the request to /form.php
     request = $.ajax({
          url: window.location.origin + "/Angon/regis/do_username_check",
          type: "post",
          data: 'username='+value
     });

     if($("#input-username").val() != ""){
          document.getElementById("status-kosong").style.display = 'none';
          request.done(function (response){
               if(parseInt(response) >= 1){ //udah ada yg pake
                    document.getElementById("status-tersedia").style.display = 'none';
                    document.getElementById("status-sudahada").style.display = 'block';
               } else if(response == '0'){
                    document.getElementById("status-tersedia").style.display = 'block';
                    document.getElementById("status-sudahada").style.display = 'none';
               }  
          });
     } else {
          document.getElementById("status-kosong").style.display = 'block';
     }
});