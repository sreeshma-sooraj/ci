<html>
    <head>
        <title>User view</title>
</head>
<body>
<h1>
    <?php
//echo $welcome;
foreach ($result as $object){
      echo $object->username . "<br>";
   }
    ?>
    </h1>



</body>
</html>