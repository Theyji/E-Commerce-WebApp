
<?PHP
include_once "database.php";


// function to read data from database 
function readDataFile($filename) {
	if (! file_exists($filename)) {
		$fileData = array();
	} else {
		$fileData = json_decode(file_get_contents($filename), true);
	}
return $fileData;
}

// function to write data to database
function writeDataFile($filename,$fileData) {
	file_put_contents($filename,json_encode($fileData));
}



// if(!isset($_SESSION['cart'])) {
// 	$_SESSION['cart'] = array();
// 	echo('YES');
// }


// function to create category list from main list 
function createSubCategory($a){
	global $datasource;
    global $database;
    $subcat = array();
    foreach($database as $item){
        if($item['product_category'] == $a){
            array_push($subcat, $item);
			writeDataFile($datasource,$subcat);
        }
           
    }
}


// function to create description page of each item 
function createSubDescription($a){
	global $datasource;
    global $database;
    $subcat = array();
    foreach($database as $item){
        if($item['product_name'] == $a){
            array_push($subcat, $item);
			writeDataFile($datasource,$subcat);
        }
           
    }
}

// creates the main product list and associated parameters 
function createCatlog($b){

    echo('<table>');
	echo('<tr>
		<th>Product ID</th>
		<th>Product Name</th>
		<th>Product Price</th>
		<th>Product Quantity</th>
	</tr>');

	foreach ($b as $item) {
	
		echo "<tr>";

		echo("<td>".$item['product_id']."</td>");

		printf ("<td>".'<a href="http://localhost/Assignment1/description.php?select_name=%s"> %s</a>'."</td>", 
		$item['product_name'],$item['product_name'] );

		echo("<td>".$item['product_price']."</td>");
		if(!isset($_SESSION['cart'])) {
			$_SESSION['cart'] = array();
			echo('YES');
		}
		foreach($_SESSION['cart'] as $cart_item) {
			if ($cart_item == $item['product_id']) {
				$item['product_quantity'] = $item['product_quantity'] -1;
				
			}
		}
		quantityCheck($item['product_quantity']);

		echo("</tr>");
	}
	
}

// create shopping cart and add / remove items from it 
function makeCart (){
	echo('<table id=cart >');
	echo('<tr id=trcart >
		<th>Product ID</th>
		<th>Product Name</th>
		<th>Product Price</th>
	</tr>');
	$totalPrice = 0;
	global $database;
	foreach ($_SESSION['cart'] as $cart_item) {
		foreach($database as $items){
			if ($items['product_id'] == $cart_item){
				echo "<tr id=trcart >";
				echo("<td class= td>".$items['product_id']."</td>");
				echo("<td class = td>".$items['product_name']."</td>");
				echo("<td class = td>".$items['product_price']."</td>");
				printf("<td class =><input type='button' value='Remove from Cart' onclick='remove_from_cart(\"%s\")'></tr>",$cart_item);
				echo("</td>");
				$totalPrice = $totalPrice + $items['product_price'];
				
			}
		}          
	}
	printf("<tr><td colspan='2'>Total Price</td><td>%.2f</td><td><button>Check out</button></td></tr>",$totalPrice);
	echo('</table>');
}


// gives quantity product check function to check if its out of stock 
function quantityCheck($check){
	if ( $check <= 0 ){
		echo ("<td>".'<span style="color:#FF0000;">Out of Stock</span>'."</td>" );
	}
	else{
		echo("<td>".$check."</td>");
	}
}

//create product description page 
function createDescription($b){
	foreach ($b as $item) {
		echo("<tr>");
		echo("<td>".$item['product_id']."</td>");
		printf ("<td>".$item['product_name']."</td>");
		echo("<td>".$item['product_price']."</td>");
		echo("<td>".$item['product_description']."</td>");
		echo("</tr>");
		echo("<tr>");
		if ($item['product_quantity'] <1 ){
			printf("<td><input type='button' style='color:#FF0000;' disabled  value='Out of Stock' onclick='add_to_cart(\"%s\")'></td>",$item['product_id']);
		}
		else{
			printf("<td><input type='button' value='Add to Cart' onclick='add_to_cart(\"%s\")'></td>",$item['product_id']);
		}
		echo("</tr>");
		
	}
}

?>

<script>
function add_to_cart(item_id) { 
	
	window.location="?add_item="+item_id;
	
}

function remove_from_cart(item_id) {
	window.location="?remove_item="+item_id;
	alert("Are you sure");
}

function cat_select(category_select){
	window.location = "?select_category="+category_select;
}
</script>