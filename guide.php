<?php

@include 'config.php';
session_start();
$user_id = "";
 if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
 }

// if(!isset($user_id)){
//    header('location:login.php');
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gardening Guide </title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">


</head>
<body>
<?php @include 'header.php'; ?> 

<section class="guide">
<h1>Seasonal Gardening Guides</h1> <br>
    <!-- <h2>Seasonal plant care guide </h2> <br> -->
    <h3>What to do in the garden in Spring</h3><br> <!--spring -->
    <img src="images/spring1.jpg" alt="spring image"><br>

    <ol>
        <li>Seasonal Tasks</li>
            <ul>
                <li> Begin by removing debris and dead foilage from the garden beds.</li>
                <li> Prune trees and shrubs to encourage healthy growth. </li>
                <li> Start seeds indoors for summer vegetables and annual flowers. </li>
                <li>Fertilize plants with a balanced fertilizer to promote growth.</li>
                <li>Check for pests and diseases, and take appropriate action.</li>
            </ul>
            <br><br> <li>Tips to remember</li>
            <ul>
            <li>Keep an eye on soil moisture as the weather warms up. </li>
            <li>Protect tender seedlings from late frosts by covering them with cloches or row covers.</li>
            <li>Gradually acclimate indoor plants to outdoor conditions before transplanting them into the garden.</li>
            <li>Mulch newly planted areas to retain moisture and suppress weeds.</li>
            </ul>
            <br><br> <li>plants that thrive </li>
            <ul>
                <li>Spring bulbs like tulips, daffodils, and hyacinths.</li>
                <li>Cool-season vegetables such as lettuce, spinach, and peas.</li>
                <li>Perennials like peonies, irises, and bleeding hearts.</li>
            </ul>

    </ol>
            
            <br>

             <h3>What to do in the garden in Summer</h3> <br> <!--summer -->
            <img src="images/summer1.jpg" alt="summer image"><br>

    <ol>
        <li>Seasonal Tasks</li>
            <ul>
                <li> Water plants deeply and regularly, especially during hot spells.</li>
                <li> Mulch around plants to conserve moisture and regulate soil temperature.</li>
                <li> Deadhead flowers to encourage continuous blooming.</li>
                <li> Harvest vegetables and fruits when they reach maturity.</li>
                <li> Monitor for pests and diseases, and take appropriate action.</li>
            </ul>
            <br><br><li>Tips to remember</li>
            <ul>
            <li>Water early in the day to minimize evaporation and reduce the risk of fungal diseases. </li>
            <li>Provide shade for heat-sensitive plants during the hottest part of the day.</li>
            <li>Consider using drip irrigation or soaker hoses to deliver water directly to the roots.</li>
            <li>Be vigilant against pests like aphids, spider mites, and caterpillars.</li>
            </ul>
            <br><br> <li>plants that thrive </li>
            <ul>
                <li>Heat-tolerant annuals like marigolds, zinnias, and sunflowers.</li>
                <li>Tomatoes, peppers, and other warm-season vegetables.</li>
                <li>Drought-resistant perennials such as lavender, sedum, and yarrow.</li>
            </ul>
     </ol>
            
            <br>

            <h3>What to do in the garden in Autumn</h3><br> <!--autumn -->
            <img src="images/autumn1.jpg" alt="autumn image"><br>
    <ol>
        <li>Seasonal Tasks</li>
            <ul>
                <li>Clean up garden beds by removing spent plants and debris.</li>
                <li>Plant bulbs for spring blooms.</li>
                <li>Divide and transplant perennials as needed.</li>
                <li>Apply a layer of compost or organic mulch to nourish the soil.</li>
                <li>Keep an eye out for signs of frost and take precautions to protect sensitive plants.</li>
            </ul>
            <br><br><li>Tips to remember</li>
        <ul>
            <li>Adjust watering frequency as temperatures cool and rainfall increases.</li>
            <li>Continue harvesting late-season vegetables like squash, pumpkins, and root crops.</li>
            <li>Prepare tender plants for winter by bringing them indoors or providing frost protection.</li>
            <li>Control weeds to prevent them from spreading seeds and becoming a problem in the spring. </li>
            
            </ul><br>
            <br><br> <li>plants that thrive </li>
            <ul>
                <li>Fall-blooming perennials such as asters, chrysanthemums, and sedum.</li>
                <li>Cool-season vegetables like kale, Brussels sprouts, and carrots.</li>
                <li>Trees and shrubs with vibrant fall foliage, such as maples, birches, and dogwoods.</li>   
            </ul>

           
    </ol>
            
            <br>

            <h3>What to do in the garden in Winter</h3><br> <!--winter -->
            <img src="images/winter2.jpg" alt="winter image"><br>

    <ol>
        <li>Seasonal Tasks</li>
            <ul>
                <li> Protect tender plants from freezing temperatures with frost cloth or other coverings.</li>
                <li>Prune deciduous trees and shrubs while they are dormant.</li>
                <li>Monitor indoor plants for signs of pests and diseases in the drier indoor air.</li>
                <li>Plan and design your garden for the upcoming spring.</li>
                <li>Continue feeding birds and providing water sources for them.</li>
            </ul>
            <br><br> <li>Tips to remember</li>
            <ul>
            <li>Limit watering during periods of dormancy to prevent waterlogging and root rot.</li>
            <li>Avoid walking on frozen grass or soil to prevent compaction.</li>
            <li>Use reflective mulch or coverings to protect plants from winter sunscald.</li>
            <li>Insulate outdoor containers or move them to sheltered areas to prevent freezing and cracking. </li>
            
            </ul>
            <br><br><li>plants that thrive </li>
            <ul>
                <li>Winter-flowering plants like hellebores, winter jasmine, and witch hazel.</li>
                <li>Evergreen trees and shrubs such as pines, spruces, and boxwoods.</li>
                <li>Cold-hardy vegetables including kale, Brussels sprouts, and leeks.</li>
                
            </ul>
    </ol>
            
            <br>

            </section>
            <?php @include 'footer.php'; ?>
<script src="js/script.js"></script>

</body>
</html>