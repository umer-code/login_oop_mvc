<?php
include 'includes/autoloader.php';   
?>
<html>
<head>
    <title></title>
	<script></script>	
</head>
<body>
    <?php
        $person1 = new Person();
        $person1->setName('umer');
        echo $person1->getName();

        $house1 = new House();
        $house1->setName('102354');
        echo $house1->getName();
    ?>
</body>
</html>