<?php
//include the header
include ('../includes/header.php');
include ('../includes/databaseConnect.php');



$checkedOutArray = mysqli_query($conn, 'SELECT partnumber FROM users WHERE partnumber != ""');


$ToJS = array();

if ($checkedOutArray->num_rows > 0){
    while ($row = $checkedOutArray->fetch_assoc()){
        $ToJS[] = $row['partnumber'];
    }
}

?>

   <div class="contentWrapper">
    <iframe style="border:0" width="640" height="480" src="" id="api-frame" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
   </div>


<script type="text/javascript" language="JavaScript">

    var checkedOut = <?php echo json_encode($ToJS);?>;

    
    function preLoadModelEffects() {
        for (var i=0; i < checkedOut.length; i++) {
            sketchfabAPIUtility.setAlpha(checkedOut[i], 0.5);
            console.log(checkedOut[i]);
        }
    }

        function  onSketchfabUtilityReady() {

            preLoadModelEffects();
            }

        var sketchfabAPIUtility = new SketchfabAPIUtility('52070901286641fbbbd299b454f32c14', document.getElementById('api-frame'), onSketchfabUtilityReady);

    </script>;


<?php
//include the footer
include ('../includes/footer.php');

?>