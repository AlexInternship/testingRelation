<?php

/* @var $this DocumentsOutboundController */
/* @var $model DocumentsOutbound */
/* @var $log   Log*/
?>

<h1>View Log #<?php echo $log->id; ?></h1>

        <?php
        
        $document = Log::model()->with('documentOutbounds')->findAll();
        foreach ($document as $log) {
         
        echo $log-> log_code;
            
         serialize($log);
        }       
        ?>
