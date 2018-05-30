<?php

/**
 * ----------------------------------------------------------------
 * Zonal Marketing Technologies
 * ----------------------------------------------------------------
 * Widget Error View
 * ----------------------------------------------------------------
 * @requires        - $mainHeading
 *                  - $subHeading
 *                  - $messages[] {OPTIONAL}
 */

?>

<section>
    <h1><?php echo $mainHeading; ?></h1>
    <h2><?php echo $subHeading; ?></h2>
    <?php

    // Check if messages need to be printed
    if(isset($messages) && !empty($messages)){
        // Print out a paragraph for each message element in the array
        foreach($messages as $message){
            echo '<p>' . $message . '</p>';
        }
    }

    ?>
</section>