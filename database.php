
<?PHP
include_once "function_storage.php";
$datasource = '/Users/theyji/Sites/Assignment1/Catlog.json';
$data = array(
    "HEINEKIEN"=>array("product_id"=>"Lager-100","product_name"=>"Heinekien","product_category"=>"Beer","product_description"=>"Popularly known as The Chairman, Heineken is popularly known around the world for its unique, great taste, rich tradition, and superior quality. Brewed using the unrivaled recipe invented three generations ago by the Heineken family in Amsterdam since 1873","product_price"=>5.66,"product_quantity"=>0),

    "GUNIESS"=>array("product_id"=>"Stout-100","product_name"=>"Guniess Stout","product_category"=>"Beer","product_description"=>"Guinness Foreign Extra Stout is a beer born of a thirst for adventure, tracing its origins back to a recipe for our West India Porter, first set out by Arthur Guinness II in 1801.","product_price"=>6.35,"product_quantity"=>26),

    "BUDWISER"=>array("product_id"=>"Lager-200","product_name"=>"Budwiser","product_category"=>"Beer","product_description"=>"A premium imported American-style Lager. The Beechwood aging process used to brew Budweiser produces a taste, smoothness, and drinkability which results in a beer that is crisp, clean, and refreshing. It was first introduced by Adolphus Busch in 1876 and still brewed with the same high standards today.","product_price"=>5.22,"product_quantity"=>4),

	"STAR"=>array("product_id"=>"Lager-300","product_name"=>"Star Lger Beer","product_category"=>"Beer","product_description"=>"For over 7 decades, Star Lager Beer has continued to be the beer of choice to celebrate key moments in everyday life, especially in Nigeria. It is perfectly brewed with 100% natural ingredients, high-quality hops, the best quality water, and the finest malted barley in the country.","product_price"=>5.77,"product_quantity"=>17),

	"LEGEND"=>array("product_id"=>"Stout-200","product_name"=>"Legend Etra Stout","product_category"=>"Beer","product_description"=>"Produced by Nigerian Breweries PLC since 1961, Legend Extra Stout is one of the favourite beer brands consumed in Nigeria. Legend Extra Stout is a unique bitter-tasting premium stout, fully brewed from the finest natural ingredients to the best of international quality standards by Nigerian Breweries Plc.","product_price"=>5.36,"product_quantity"=>17),
                                   
	"REDLABEL"=>array("product_id"=>"Whisky-100","product_name"=>"Johnnie Walker Red-Label","product_category"=>"Whisky","product_description"=>"Johnnie Walker Red Label was launched in 1909 as a kind of whisky more appropriate for mixing with soda than the older types of whiskies. It was named after the manufacturer's grandfather and has now become one of the most popular whisky brands in the world today. Crafted in Scotland, its smoky flavours are enticing enough for you to order a second bottle.","product_price"=>30.55,"product_quantity"=>18),

    "BLACKLABEL"=>array("product_id"=>"Whisky-200","product_name"=>"Johnnie Walker Black-Label","product_category"=>"Whisky","product_description"=>"Johnnie Walker Black Label has an unmistakably smooth, deep, and opulent character, and this is why its the most widely distributed blended Scotch Whisky in the world. Full of dark fruits, sweet vanilla, and signature smokiness, the blend of mature whiskies over 12 years old dances on your tongue.","product_price"=>29.99,"product_quantity"=>13),

    "JAMESON"=>array("product_id"=>"Whisky-300","product_name"=>"Jameson","product_category"=>"Whisky","product_description"=>"Currently selling at around 4 million cases per year, Jameson is the world's bestselling and favourite Irish whiskey. Founded in 1780 in Dublin, Ireland, the Midleton Distillery by John Jameson and Son produces some of the finest Irish whiskeys in the world. John Jameson pioneered the art of Triple Distillation, which is the tradition that to this day gives Jameson whiskeys their exceptionally smooth taste.","product_price"=>22.99,"product_quantity"=>19),

	"JACKDANIELS"=>array("product_id"=>"Whisky-400","product_name"=>"Jack Daniels Old","product_category"=>"Whisky","product_description"=>"MJack Daniel's Black Label (also popularly called Old No 7, or more commonly as JD or simply Jack) is one of the bestselling whiskeys in the world. Jack Daniels is made in the Tennessee sour mash style. It is very similar to bourbon with the additional step of charcoal filtering the unaged whiskey.","product_price"=>32.89,"product_quantity"=>12),

	"HENNESSY"=>array("product_id"=>"Whisky-500","product_name"=>"Henessy VS","product_category"=>"Whisky","product_description"=>"Hennessy VS Cognac is medium amber with fine aromas of sweet fruit, honey, caramel, cloves, nuts, and oaky notes. The palate is round with smooth fruity flavours of orange peel, prune, and vanilla on a long lingering finish.","product_price"=>32.99,"product_quantity"=>11),

	"FOUR-COUSINS"=>array("product_id"=>"Wine-100","product_name"=>"Four Cousins Sweet Red","product_category"=>"Wine","product_description"=>"Made in South Africa, the Four Cousins Natural Sweet Red is a fragrant, ruby-red wine made for everyday enjoyment. This exotic wine has a rich, soft rose petal perfume that delights the senses. It's elegantly endowed with flavours of ripe plums, strawberries, and exotic spices, and a soft, lingering finish. This sweet red wine is blended from noble cultivars and grape juice.","product_price"=>10.99,"product_quantity"=>12),

    "DECLAN"=>array("product_id"=>"Wine-200","product_name"=>"Declan Red Wine","product_category"=>"Wine","product_description"=>"The Declan red wine is bold, slightly tannic, dry, and slightly acidic. It is also easy-drinking, fruity, rich in taste, and full-bodied with notes of berry and jam. It is a great addition to a gathering of friends with the profound blend of sweetness and sophistication in fruity taste that it offers.","product_price"=>10.33,"product_quantity"=>12),

    "CARLO ROSSI"=>array("product_id"=>"Wine-300","product_name"=>"Carlo Rossi Red","product_category"=>"Wine","product_description"=>"Carlo Rossi Red wines are made from the most delicious grapes from the Central Valley of California. The characteristics of those grapes evolve from year to year but Carlo Rossi wine has always been served in a sturdy glass jug. With Carlo Rossi wines, we can always count on quality and value","product_price"=>22.82,"product_quantity"=>14),

	"AGOR"=>array("product_id"=>"Wine-400","product_name"=>"Agor Red Wine","product_category"=>"Wine","product_description"=>"The Agor Red Wine is formerly known as the Kagor Red wine, it has the same taste and is produced from Cabernet Sauvignon grapes. There is no difference between the Agor and Kagor red wine for those wondering. It has a delicate taste with chocolate shades, a ruby colour, and a wonderful aroma. The wine is made using classical technology. Agor wine has a distinct blackcurrant aroma which is in perfect harmony with the sweetish taste of forest fruits and is specially packaged in a one of kind bottle design.","product_price"=>20.50,"product_quantity"=>16),

	"4TH STREET"=>array("product_id"=>"Wine-500","product_name"=>"4th Street Sweet Red","product_category"=>"Wine","product_description"=>"4th Street Sweet Red Wine is low alcohol, rare blend of sweet red wine made in the Western Cape, South Africa. It is easy to drink and has a fruity sweetness that emanates from the preservation of fresh grape juice which does not allow fermentation. It has a dark red color and combines its fruity taste with its sophistication.","product_price"=>10.78,"product_quantity"=>12));


	writeDataFile($datasource,$data);	

	$database = readDataFile('/Users/theyji/Sites/Assignment1/Catlog.json');	
	

?>