<?php
//include the header
include ('../includes/header.php');

?>

    <iframe style="border:0" width="640" height="480" src="" id="api-frame" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>

    <script type="text/javascript">

        function  onSketchfabUtilityReady() {

            /*custom code goes here*/


        }

        var sketchfabAPIUtility = new SketchfabAPIUtility('1bd3d639f67f42529efbc041039dffc3', document.getElementById('api-frame'), onSketchfabUtilityReady);

    </script>


<?php
//include the footer
include ('../includes/footer.php');

?>