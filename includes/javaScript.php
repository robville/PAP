<?php

//php data being passed to javascript
$checkedOutArray = mysqli_query($conn, 'SELECT partnumber FROM users WHERE partnumber != ""'); // gets all checked out parts if any are in the users table


$ToJS = array(); // an array to store all of the normalized parts from checkedOutArray

if ($checkedOutArray->num_rows > 0){ //checks to make sure there is data before proceeding
    while ($row = $checkedOutArray->fetch_assoc()){ //while loop exposes the associative array and assigns it to row
        $ToJS[] = $row['partnumber']; //normalizes array from associative to a standard indexed array
    }
}
?>


<script type="text/javascript" language="JavaScript">

    var checkedOut = <?php echo json_encode($ToJS);?>; //converts array from php to javascript


    function ModelFunctions() {//function called by the ready function supplied by the sketchfabAPIUtility

        function setCheckedOutColors() {


            for (var i = 0; i < checkedOut.length; i++) {
                sketchfabAPIUtility.setColor(checkedOut[i], sketchfabAPIUtility.DiffuseColor, "#8a0000"); //assigns the material effect to each respective material as the for loop runs currently sets normal map color to dark red
                sketchfabAPIUtility.setColor(checkedOut[i], sketchfabAPIUtility.AOPBR, "#8a0000"); //assigns the material effect to each respective material as the for loop runs currently sets normal map color to dark red
                sketchfabAPIUtility.setColor(checkedOut[i], sketchfabAPIUtility.AlbedoPBR, "#8a0000"); //assigns the material effect to each respective material as the for loop runs currently sets normal map color to dark red
                sketchfabAPIUtility.setColor(checkedOut[i], sketchfabAPIUtility.BumpMap, "#8a0000"); //assigns the material effect to each respective material as the for loop runs currently sets normal map color to dark red
                sketchfabAPIUtility.setColor(checkedOut[i], sketchfabAPIUtility.CavityPBR, "#8a0000"); //assigns the material effect to each respective material as the for loop runs currently sets normal map color to dark red
                sketchfabAPIUtility.setColor(checkedOut[i], sketchfabAPIUtility.DiffusePBR, "#8a0000"); //assigns the material effect to each respective material as the for loop runs currently sets normal map color to dark red
                sketchfabAPIUtility.setColor(checkedOut[i], sketchfabAPIUtility.SpecularColor, "#8a0000"); //assigns the material effect to each respective material as the for loop runs currently sets normal map color to dark red
                sketchfabAPIUtility.setColor(checkedOut[i], sketchfabAPIUtility.SpecularF0, "#8a0000"); //assigns the material effect to each respective material as the for loop runs currently sets normal map color to dark red
                sketchfabAPIUtility.setColor(checkedOut[i], sketchfabAPIUtility.SpecularHardness, "#8a0000"); //assigns the material effect to each respective material as the for loop runs currently sets normal map color to dark red
                sketchfabAPIUtility.setColor(checkedOut[i], sketchfabAPIUtility.SpecularPBR, "#8a0000"); //assigns the material effect to each respective material as the for loop runs currently sets normal map color to dark red


//                console.log(checkedOut[i]);

            }
        }

        setCheckedOutColors();


        var materialHasVal;

        sketchfabAPIUtility.api.addEventListener('click', function(event){

            console.log(event);


            function setClickedColor() {
                sketchfabAPIUtility.setColor(event.material.name, sketchfabAPIUtility.DiffuseColor,"#ffff00");
                sketchfabAPIUtility.setColor(event.material.name, sketchfabAPIUtility.AOPBR,"#ffff00");
                sketchfabAPIUtility.setColor(event.material.name, sketchfabAPIUtility.AlbedoPBR,"#ffff00");
                sketchfabAPIUtility.setColor(event.material.name, sketchfabAPIUtility.BumpMap,"#ffff00");
                sketchfabAPIUtility.setColor(event.material.name, sketchfabAPIUtility.CavityPBR,"#ffff00");
                sketchfabAPIUtility.setColor(event.material.name, sketchfabAPIUtility.DiffusePBR,"#ffff00");
                sketchfabAPIUtility.setColor(event.material.name, sketchfabAPIUtility.SpecularColor,"#ffff00");
                sketchfabAPIUtility.setColor(event.material.name, sketchfabAPIUtility.SpecularF0,"#ffff00");
                sketchfabAPIUtility.setColor(event.material.name, sketchfabAPIUtility.SpecularHardness,"#ffff00");
                sketchfabAPIUtility.setColor(event.material.name, sketchfabAPIUtility.SpecularPBR,"#ffff00");
            }


            if (materialHasVal) {

                if ($.inArray(materialHasVal,checkedOut) > -1){
                    setCheckedOutColors();
                    setClickedColor();
                }else {

                    sketchfabAPIUtility.resetColor(materialHasVal, sketchfabAPIUtility.DiffuseColor);
                    sketchfabAPIUtility.resetColor(materialHasVal, sketchfabAPIUtility.AOPBR);
                    sketchfabAPIUtility.resetColor(materialHasVal, sketchfabAPIUtility.AlbedoPBR);
                    sketchfabAPIUtility.resetColor(materialHasVal, sketchfabAPIUtility.BumpMap);
                    sketchfabAPIUtility.resetColor(materialHasVal, sketchfabAPIUtility.CavityPBR);
                    sketchfabAPIUtility.resetColor(materialHasVal, sketchfabAPIUtility.DiffusePBR);
                    sketchfabAPIUtility.resetColor(materialHasVal, sketchfabAPIUtility.SpecularColor);
                    sketchfabAPIUtility.resetColor(materialHasVal, sketchfabAPIUtility.SpecularF0);
                    sketchfabAPIUtility.resetColor(materialHasVal, sketchfabAPIUtility.SpecularHardness);
                    sketchfabAPIUtility.resetColor(materialHasVal, sketchfabAPIUtility.SpecularPBR);

                    setCheckedOutColors();
                    setClickedColor();

                }
            }else{
                setClickedColor();
            }
            materialHasVal = event.material.name;






            if (event.material.name === "initialShadingGroup_2"){
                console.log(event.material.name + "clicked");

                function onSketchfabUtilityReady() {


                }
                var sceneChange = new SketchfabAPIUtility('b140631c005b41d593582c830e84e510', document.getElementById('api-frame'), onSketchfabUtilityReady);


            }
        });
    }






</script>