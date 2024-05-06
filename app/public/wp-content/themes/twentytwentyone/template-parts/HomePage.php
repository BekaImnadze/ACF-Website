<?php 

// Template Name: HomePage

$title = get_field("title");
$description =  get_field ("description");
$image = get_field ("image");

?>

<?php
get_header();
?>


<body class="myTitle">
    
    <div>
        <h1><?php echo $title; ?></h1>
        <p><?php echo $description; ?></p>
        <?php 
        if(isset($image)){
           echo ' <img src="' . $image . '" alt=" />;';
        }
        
        ?>
    </div>

    <?php
    get_footer();