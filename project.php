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

if (isset($_GET['remove_item']) ) {
	echo '<script>alert("are you sure")</script>';
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

$database = readDataFile('/Users/theyji/Sites/Assignment1/Catlog.json');

?>


<?php 
        

echo('<div class="grid-container">');

    echo('<div class="category">');
        echo('<h3> Categories</h3>');
            echo ("<a href=javascript:cat_select('All');>All Category</a>");
            echo ("<a href=javascript:cat_select('Beer');>Beer</a>");
            echo ("<a href=javascript:cat_select('Whisky');>Whisky</a>");
            echo ("<a href=javascript:cat_select('Wine');>Wine</a>");
    echo('</div>');   


    echo('<div id="itemlist">');
        echo('<h3> Product List </h3>');
        createCatlog($database);
    echo('</div>');


    echo('<div id="cart">');
        echo('<h3> Shopping Cart</h3>');
        makeCart();
    echo('</div>');


echo('</div>'); 
                   
?>   


  

     