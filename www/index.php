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




            console.log(sketchfabAPIUtility);

            var matlist = sketchfabAPIUtility.materialHash;
            var matarray = [];
            var MaterialNamesArray=[];
            for(var name in matlist) {

                if (matlist.hasOwnProperty(name)){
//                    console.log(matlist);
                    var matobjs = matlist[name];
                for (name in matobjs){
                    if (matobjs.hasOwnProperty(name)){
                        matarray.push(matobjs.name);

                    }
                }
            }
            }
//            console.log(matarray );

            var maxVal = 8;
            var delta = Math.floor(matarray.length / maxVal);
            for (i = 0; i < matarray.length; i=i+delta){
            MaterialNamesArray.push(matarray[i]);
            }
            console.log(MaterialNamesArray);
        }


        var sketchfabAPIUtility = new SketchfabAPIUtility('52070901286641fbbbd299b454f32c14', document.getElementById('api-frame'), onSketchfabUtilityReady);

    </script>


<?php
//include the footer
include ('../includes/footer.php');

?>