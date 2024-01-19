<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity=
"sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I"
        crossorigin="anonymous">
    <style>
    
        body{
            display: flex;
            background-image: url("https://images.hdqwalls.com/download/binary-code-abstract-lu-1920x1200.jpg");
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="culoare">
    <form  method="post" action="">
      <label style="color:aliceblue;"  for="binar">Number:</label>    
        <input class="form-control" type="number" id="binar" name="binar" pattern="[0-1]+" placeholder="11001" required >
            
 
            <button type="submit" class="btn btn-outline-light">Convert to hexadecimal</button>
            <!-- HTML !-->

        </form>
   <br>
    <label style="color:aliceblue;"  >Binary number:</label>    
    <form style="color:aliceblue;">
        <?php
        function ceva($currentValue) {
            $newValue = bindec($currentValue);
            return $newValue;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $currentId = isset($_POST['binar']) ? $_POST['binar'] : '';
            $newId = ceva($currentId);
            echo "The new value is: $newId";
        } else {
            echo "Please enter a binary number ";
        }
        ?>
         </div>
    </form>
    </body>
   
</html>
