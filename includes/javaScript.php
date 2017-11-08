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


    function checkedOutModelEffects() {//function called by the ready function supplied by the sketchfabAPIUtility
        for (var i=0; i < checkedOut.length; i++) {
            sketchfabAPIUtility.setColor(checkedOut[i], sketchfabAPIUtility.DiffuseColor,"#8a0000"); //assigns the material effect to each respective material as the for loop runs currently sets normal map color to dark red
            sketchfabAPIUtility.setColor(checkedOut[i], sketchfabAPIUtility.AOPBR,"#8a0000"); //assigns the material effect to each respective material as the for loop runs currently sets normal map color to dark red
            sketchfabAPIUtility.setColor(checkedOut[i], sketchfabAPIUtility.AlbedoPBR,"#8a0000"); //assigns the material effect to each respective material as the for loop runs currently sets normal map color to dark red
            sketchfabAPIUtility.setColor(checkedOut[i], sketchfabAPIUtility.BumpMap,"#8a0000"); //assigns the material effect to each respective material as the for loop runs currently sets normal map color to dark red
            sketchfabAPIUtility.setColor(checkedOut[i], sketchfabAPIUtility.CavityPBR,"#8a0000"); //assigns the material effect to each respective material as the for loop runs currently sets normal map color to dark red
            sketchfabAPIUtility.setColor(checkedOut[i], sketchfabAPIUtility.DiffusePBR,"#8a0000"); //assigns the material effect to each respective material as the for loop runs currently sets normal map color to dark red
            sketchfabAPIUtility.setColor(checkedOut[i], sketchfabAPIUtility.SpecularColor,"#8a0000"); //assigns the material effect to each respective material as the for loop runs currently sets normal map color to dark red
            sketchfabAPIUtility.setColor(checkedOut[i], sketchfabAPIUtility.SpecularF0,"#8a0000"); //assigns the material effect to each respective material as the for loop runs currently sets normal map color to dark red
            sketchfabAPIUtility.setColor(checkedOut[i], sketchfabAPIUtility.SpecularHardness,"#8a0000"); //assigns the material effect to each respective material as the for loop runs currently sets normal map color to dark red
            sketchfabAPIUtility.setColor(checkedOut[i], sketchfabAPIUtility.SpecularPBR,"#8a0000"); //assigns the material effect to each respective material as the for loop runs currently sets normal map color to dark red




            console.log(checkedOut[i]);

        }

//        sketchfabAPIUtility.generateMaterialHash(err,materials);
//        for(var a = 0; a < sketchfabAPIUtility.materialHash.length; a++){
//            console.log(sketchfabAPIUtility.materialHash[a].name + "material name");
//        }

        sketchfabAPIUtility.api.addEventListener('click', function(event){
            console.log(event)
        });
    }






</script>
