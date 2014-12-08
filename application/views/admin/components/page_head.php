<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $meta_title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="<?php echo site_url('css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo site_url('css/admin.css'); ?>" rel="stylesheet">
        
        <script src="<?php echo site_url('js/jquery.js'); ?>"></script>
        <script src="<?php echo site_url('js/bootstrap.min.js'); ?>"></script>
        <?php if(isset($sortable) && $sortable === TRUE): ?>
        <link href="<?php echo site_url('css/jquery-ui.min.css'); ?>" rel="stylesheet">
        <script src="<?php echo site_url('js/jquery-ui.min.js'); ?>"></script>
        <script src="<?php echo site_url('js/jquery.mjs.nestedSortable.js'); ?>"></script>
        <?php endif; ?>

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- TinyMCE -->
        <script type="text/javascript" src="<?php echo site_url('js/tinymce/tinymce.min.js'); ?>"></script>
        <script type="text/javascript">
        tinymce.init({
            selector: "textarea"
         });
        </script>        
        <!-- /TinyMCE -->
    </head>        