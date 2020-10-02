<?php 

$par = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent arcu tellus, mattis eu turpis et, molestie maximus augue. Nulla quis erat et lectus consectetur consectetur. Ut eget dui vitae urna rhoncus viverra. Praesent luctus magna nec maximus efficitur. Fusce euismod, ex quis blandit accumsan, nibh diam molestie metus, sed facilisis orci nisl tincidunt augue. Quisque non condimentum leo. Vestibulum sem velit, ultricies in ipsum vehicula, feugiat gravida orci. Etiam vitae pharetra lectus. Donec ex diam, porta a congue eu, sagittis at enim. In hac habitasse platea dictumst. Duis id congue sapien";

$badWord = $_GET["badword"];

$newPar = str_replace($badWord, "***", $par);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <p> <?php echo $newPar ?> </p>
        <p>La stringa è lunga <?php echo strlen($par) ?> caratteri.</p>
    </div>
</body>

</html>