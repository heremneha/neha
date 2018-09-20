<html>
   <head>
      <title>The jQuery Example</title>
      <script type = "text/javascript" 
         src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
		
      <script type = "text/javascript" language = "javascript">
         $(document).ready(function() {
            $("#driver").click(function(event){
                name = $("#user_name").val();
                email=$("#user_email").val();
                mobile=$("#user_mobile").val();
                address=$("#user_address").val();
                password=$("#user_password").val();
                
               // if(name!=""){
              console.log(name,email,mobile,address,password);
                    $.ajax({
                    url:'http://localhost/Neha/crud.php',
                    type : 'POST',
                /* data : $("form").serialize(),*/
                    data : {
                     'name':name,
                     'email':email
                     },
                     
                     
                     dataType : 'text',
                     success:function(response) {
                       console.log(status.message);
                      $('#stage').html('<p> Name: ' + neha.name + '</p>');
                       $('#stage').append('<p>Age : ' + neha.age + '</p>');
                       $('#stage').append('<p> Sex: ' + neha.sex + '</p>');
                   }
                    
                
                    
					
                    });
                 /* console.log($("form").serialize());*/
            });        
         });
      </script>
   </head>

<form action="" method="post">
Name: <input type="text" name="name" id="user_name"><br>
E-mail: <input type="text" name="email" id="user_email"><br>
Mobile: <input type="text" name="mobile" id="user_mobile"><br>
Address: <input type="text" name="address" id="user_address"><br>
Password: <input type="text" name="password" id="user_password"><br>
<input type = "button" id = "driver" value = "submit" />
</form>

</body>
</html>