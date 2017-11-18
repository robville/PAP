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

           ModelFunctions();

            sketchfabAPIUtility.addEventListener('click', onSketchfabClick);





        }
        function onSketchfabClick(e) {

            console.log(e.node.name);

        }

        var sketchfabAPIUtility = new SketchfabAPIUtility('52070901286641fbbbd299b454f32c14', document.getElementById('api-frame'), onSketchfabUtilityReady,);

    </script>


<?php
//include the footer
include ('../includes/footer.php');

?>