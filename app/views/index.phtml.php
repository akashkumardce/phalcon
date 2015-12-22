<html>
    <head>
        <title>Some amazing website</title>
        
        <?php echo $this->assets->outputJs('header'); ?>
    </head>
    <body>
<?php echo $sharedVAr; ?>
        <?php echo $this->getContent(); ?>

        <?php echo $this->assets->outputJs('footer'); ?>
        
    </body>
<html>

