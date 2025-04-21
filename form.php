
<!DOCTYPE html>
<html>
<head>
    <title>User Information Form</title>
    <style>
        div{
            /* height: 300px; */
            width: 400px;
            border:2px solid black;
            padding:20px;
            margin:auto;
            background-color: aqua;
        }
        input{
            width: 300px;
            border:1.5px solid black;
            border-radius:8px;
            height: 30px;
        }
        textarea{
            width: 300px;
        }
        button{
            height: 20px;
            
        }
    </style>
</head>
<body>
    <div>
    <h2 style="text-align:center;">User Information Form</h2>
    <form action="insert_data.php" method="post">
        <!-- ID:
        <input type="text" id="id" name="id" ><br><br> -->
        Name: <br>
        <input type="text" id="name" name="name" required><br><br>
        Date of Birth: <br>
        <input type="date" id="date" name="date" required><br><br>
        Address: <br>
        <textarea id="address" name="address" required></textarea><br><br>
        <button>Submit</button>
    </form>
    </div>
</body>
</html>
