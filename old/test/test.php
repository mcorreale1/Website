<?php 
require_once('../inc/config.php');
$pageTitle = "test"; 
$section ="";

$page='?';
//Get testing with input
if(isset($_GET["name"])){
    $name = $_GET["name"];
    $name= trim(htmlspecialchars($name));
    $page="?name=".$name.'&';
}

//Get testing with anchors 
if(isset($_GET["color"])){
    $color = trim(htmlspecialchars($_GET["color"]));
    
}
    

include(ROOTPATH.'inc/header.php'); ?>


<div class="section">
	<div class="container-fluid">
        <!-- Get test 1, get input and display -->
		<form method="get" action=""
            <table>
                <tr>
                    <th>
                        <label for="name">Name </label>
                    </th>
                    <td>
                        <input type="text" name="name" id="name"
                               value="">
                    </td>
                </tr>
            </table>
            <input type="submit" value="send">
        </form>
        <?php if(isset($name)){
            echo'<h1>Hello, '.$name.'</h1>';
        }?>
    
    <!--Get test 2, click link to post-->

    <a href="<?php echo $page;?>color=blue">Blue</a>
    <a href="<?php echo $page;?>color=red">Red</a>
    <a href="<?php echo $page;?>color=green">Green</a>
    
    <?php
    if(isset($color)){
    echo '<h1>Favorite Color is '.$color.'</h1>';
    }

    

    $var1 = "Broccoli";
    $var2 = "Cream Soda";
    //$var1 = "Rockey Road";
    //$var2 = "Raspberry";
    $initial = "R";

    if (stripos($var1,$initial) === 0 && stripos($var2,$initial) === 0) {

        echo $var1 . " and " . $var2 . " both start with " . $initial . ".";

    } else {

        echo "Either " . $var1 . " or " . $var2 . " doesn't start with " . $initial . "; maybe neither of them do.";

    }

?>
    
    </div>
</div>

<?php include(ROOTPATH.'inc/footer.php'); ?>