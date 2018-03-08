<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Just Do it</title>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style/style.css">
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    
</head>
<body>
    <div class="wraper">
        <div class="container-fluid text-left">
            <div id="overlay"  onclick="off()"></div>
   <p class="info"  onclick="on()"><i class="fa fa-info"> Куда я зашел?</p></i>
     
            
           
        </div>
    </div>
</body>
</html>
<script type="text/javascript" src="vendor/JS/jquery-3.3.1.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script>
function on() {
document.getElementById("overlay").style.display = "block";
}

function off() {
document.getElementById("overlay").style.display = "none";
}
</script>