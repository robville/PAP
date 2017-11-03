<?php
//include the header
include ('../includes/header.php');
include ('../includes/databaseConnect.php');
include ('../includes/javaScript.php');
?>

   <div class="contentWrapper">
    <iframe style="border:0" width="640" height="480" src="" id="api-frame" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
   </div>

  <script type="text/javascript" language="JavaScript">

        function  onSketchfabUtilityReady() {

<!--code inside this function gets run before the model loads-->

            checkedOutModelEffects();

//            api.addEventListener('click', function(event) {
//                console.log(event);
//            });

            }
        var sketchfabAPIUtility = new SketchfabAPIUtility('52070901286641fbbbd299b454f32c14', document.getElementById('api-frame'), onSketchfabUtilityReady,{internal: 1, ui_infos: 0, ui_controls: 0, watermark: 0, continuous_render: 0, supersample: 0});

    </script>;


<?php
//include the footer
include ('../includes/footer.php');

?>