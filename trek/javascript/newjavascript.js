function ready(){
 var user_email = "Pravin";
        
        var user_password = "@More";
       $(".login-form").submit(function(e){
            e.preventDefault();
            var email = $(".login-mail").val();
            var pass =  $(".login-password").val();
            
            $(".error").remove(); 
            if(email == "" || pass == ""){
                $(".login-password").after('<span class="error"><br>*Please input all credentials.</span>')
            }else if(email == user_email && pass == user_password){
                
                alert("Logged in Successfully !!");
                window.location.replace("file:///C:/Users/pravin%20nathuram%20more/Desktop/Idfc2/trek/package-detailsdiscount.html");
            }else{
                $(".login-password").after('<span class="error"><br>*Invalid credentials.</span>')
            }
       
            });

}
/*$(document).ready (function () {
            alert("hellow dkfkdjf");
           
    });*/