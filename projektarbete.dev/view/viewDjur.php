<?php
$djur = $this->getAllDjur();
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
    <title>Mitt MVC-projekt</title>
</head>
<body>
<h1>Här är alla mina djur!</h1>

<!-- I det här formuläret lägger jag till djur  -->
<form action="/projektarbete.dev/index.php?page=add" method="post">
<input type="text" name="name" value="" placeholder="djurnamn"  />
<input type="text" name="year" placeholder="ålder"/>
<input type="text" name="legs" placeholder="antal ben"/>
<input type="text" name="type" placeholder="typ"/>
<button type="submit">Lägg till djur</button> 
</form> 

<!--Här har jag en tabell som visar de djur jag har i min databas, om jag lägger till ett djur
syns det och om jag tar bort ett djur syns det också här tack vare tabellen. Deleteknappen är kopplad till min DELETE function 
så att när jag trycker på den försvinner djuret på hemsidan och databasen. -->



<table>
<thead>
    <tr>
        <th>Namn</th>
        <th>År</th>
        <th>Antal Ben</th>
        <th>Typ</th>
        <th></th>
    </tr>
</thead>
<tbody>
<?php foreach ($djur as $djur) { ?>
    <tr>
        <td><?= $djur->getName()?></td>
        <td><?= $djur->getYear()?></td>
        <td><?= $djur->getLegs()?></td>
        <td><?= $djur->getType()?></td>
        <td><button type=“button”><a href= '/projektarbete.dev/index.php?page=delete&id=<?= $djur->getId()?>'>delete</a></button></td>
     
    </tr>
 <?php
} ?>


</tbody>
</table>


</body>
</html>
















