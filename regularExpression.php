
    <?php
        $phone = "+265719065366";

        preg_match("/^065|071/", $phone );

        preg_match("/[a-zA-Z]/", $phone );

        preg_match("/6[13we]/", $phone );

        preg_match("/\s/", $phone );

        preg_match("/^0.*6$/", $phone );

         preg_match("/0{2,3}/", $phone );

        echo preg_match("/^\+25565|\+25571[0-9]{7}$/", $phone );


    ?>
