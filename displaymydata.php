<html>
<head>
<title>XML Display</title>
</head>
<body>

<?php
$loadupdata = 'myedata.xml'; // The .XML file you are pulling data from
$myedataxml = simplexml_load_file($loadupdata); // Establishes the array and corresponds values to values in the .XML file
$name=$myedataxml->employee[0]->name;
$age=$myedataxml->employee[0]->age;
$zipcode=$myedataxml->employee[0]->zipcode;
?>

<table border="2">
<?php
$displaycap = count($myedataxml); // limits the number of table rows according to how many entries are in the .XML file/array
$distsent = 0;

while ($distsent < $displaycap) { // loop that runs through every item the array

/* assigns variable names to the data in case you have to do something else with it */
$a_name = $myedataxml->employee[$distsent]->name;
$a_age = $myedataxml->employee[$distsent]->age;
$a_zipcode = $myedataxml->employee[$distsent]->zipcode;

/* Displays Name, Age, and Zip Code in table cells */
echo '<tr><td>Employee Name:</td><td>';
echo '<input type="text" name="empname" value="';
echo $a_name;
echo '"/>';
echo '</td><td width="15">&nbsp;</td><td>Age:</td><td>';
echo '<input type="text" size="2" name="empage" value="';
echo $a_age;
echo '"/>';
echo '</td><td width="15">&nbsp;</td><td>Zip Code:</td><td>';
echo '<input type="text" size="5" name="empzipcode" value="';
echo $a_zipcode;
echo '"/>';
echo '&nbsp;&nbsp;&nbsp;';
echo $distsent; // Display the number of items
echo '</td></tr>';

$distsent++; // increments the loop
}
?>
</table>
</body>
</html>