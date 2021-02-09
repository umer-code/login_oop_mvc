<html>
<head>
    <title>index</title>
	<script></script>	
</head>
<body>
    <?php
    include "newclass.php";
    //inheritance
    // $pet1 = new Pet();
    // echo $pet1->owner();

    // $person1 = new Person();
    // $person1->setName('Umer');
    // echo $person1->name;

    // $person2 = new Person();
    // $person2->setName('Ali');
    // echo $person2->name;

    $person3 = new Person('umer', '28');
    $person3 -> setName('ali');
    echo $person3->getName();
    ?>
</body>
</html>