<html>
<div class="bg">
<head>
<title>Please login</title>

    
    <style> 
        .bg {
            background-color: #007bff;
            height: 100%;
        }
        .flex2 { 
            display: flex; 
            justify-content: space-around; 
            background-color: #007bff; 
        } 
       
        .flex-items { 
            background-color: #f4f4f4; 
            width: 300px; 
            height:300px; 
            margin: 10px; 
            text-align: center; 
            font-size: 40px; 
            border-radius: 10%;
            justify-content: space-around;
        } 
        h3 { 
            text-align:center; 
        } 
        .geeks { 
            font-size:40px; 
            text-align:center; 
            color:white; 
            font-weight:bold; 
        }  
        .space {
            height: 150px;
        }   
        .users { 
            display: flex; 
            justify-content: space-around; 
            background-color: #007bff; 
        } 
       
        .user-items { 
            text-decoration: underline;
            text-align: center; 
            font-size: 40px; 
            justify-content: space-around;
        }     
 
    </style> 
</head>
<body> 
    <div class = "geeks">Please Login</div>  

    <div class="space" ></div>
    <div class="flex2"> 
        <div class="flex-items"><img src=""></div> 
        <div class="flex-items"><img src="../Script/teacher0.png"
             width="280" 
            height="280"
            border-radius="10%";> </div> 
        <div class="flex-items"><img src=""></div> 
    </div>
    <div class="space1" ></div>
    <div class="users"> 
        <div class="user-items">
            <nav>
                <a href="http://localhost/project/script/Admin/login.php">Admin</a>
            </nav>
        </div>
        <div class="user-items"> 
            <nav>
                <a href="http://localhost/project/script/Teacher/login.php">Teacher </a>
            </nav>
        </div> 
        <div class="user-items">
            <nav>
                <a href="http://localhost/project/script/student/login.php">Student</a>
            </nav>
        </div> 
        
    </div>
    </body>
</div>
</html>