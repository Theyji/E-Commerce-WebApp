<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <!--Statement of Authorship: This webapp if designed by Ayodeji Eniabire Student ID: 000878946 on October 23, 2022-->
        <title>Booze Nation</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="a4css.css" type="text/css">

    </head>

    <body>
        <header>
            <h1>BOOZE NATION ONLINE STORE</h1>
            <h3>Welcome to Booze Nation Online Store </h3>
        </header>

        </body>
</html>
<?PHP
include_once "function_storage.php";
include_once "database.php";


session_start();
if (!isset($_SESSION['cart'])) {
	$_SESSION['cart']=array();

}


if (isset($_GET['add_item']) ) {
	array_push($_SESSION['cart'],$_GET['add_item']);

	header('Location: http://localhost/Assignment1/project.php');
}
	


if (isset($_GET['remove_item']) ) {
	foreach ($_SESSION['cart'] as $key =>$value) {
		if ($value == $_GET['remove_item']) {
				unset($_SESSION['cart'][$key]);
				break;
		}
	}

	header('Location: http://localhost/Assignment1/project.php');
}


if (isset($_GET['select_category'])){
	createSubCategory($_GET['select_category']);
}

if (isset($_GET['select_name'])){
	createSubDescription($_GET['select_name']);
}


$database = readDataFile('/Users/theyji/Sites/Assignment1/Catlog.json');

?>
Items
<table>
<tr>
	<th>Product ID</th>
	<th>Product Name</th>
	<th>Product Price</th>
	<th>Product Description</th>
</tr>
<?PHP
createDescription($database);
?>




