<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>

    <style>
        body{
            font-family: Arial,sans-serif;
            background-color: #e8f0ff;
            padding:40px
        }
        .b1{
            background-color: #e8f0ff;
            border-radius:10px;
            position:relative;
            width:400px;
            padding:40px;
            margin:auto;
            align:center;
        }
        h1{
            text-align:center;
            margin-bottom:20px
        }
        .b2{
            background:#d9ffd9;
            border-left:4px;
            padding:15px;
            margin-top:15px;
            display:none;
        }
        
        form{
            background-color:
            padding: 20px;
            border-radius:10px;
            width:300px;
            margin:0 auto;
            
        }
       </style>
</head>

<body>
     <div class="b1">
    <h1>Student Registration</h1>
        <form>
            <label>Full Name:</label><br>
            <input type ="text" id="name"/> <br><br>

            <label>Email:   </label><br>
            <input type ="text" id="email"/><br><br>

            <label>Password:</label><br>
            <input type ="password" id="password"/><br><br>

            <label>Confirm Password:</label><br>
            <input type ="password" id="confirmpassword"/><br>
            <button type ="submit">Register</button><br><br>
            <div id="b2"></div>
    </div>
            <script>
                function sr(){
                    var name=document class="getElementbyId"("name").value.trim();
                    var name=document class="getElementbyId"("email").value.trim();
                    var name=document class="getElementbyId"("password").value.trim();
                    var name=document class="getElementbyId"("confirmpassword").value.trim();
                

                if(!name||!email|!password||!confirmpassword){
                    alert("All fields are required")
                    return;
                }
                if(pass!==confirmpassword){
                    alert("Password do not match! Try again.")
                    return;
                }
                b2.style.display="block";
                b2.innerhtml=<strong>Registration succesful!</strong><br><br>
                Name:${name}<br>
                Email:${email};
            }
 </script>
</body>
</html>