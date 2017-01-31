<!-- ⟡ Proudly designed & coded in NYC - sideways-nyc.com ⟡ -->
<!-- templates/head.php  -->
<head>
    <?php include 'favicon.php'; ?>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript">
        window.ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
    </script>
    
    <?php wp_head(); ?>
</head>
