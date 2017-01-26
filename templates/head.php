<!-- ⟡ Proudly designed & coded in NYC - sideways-nyc.com ⟡ -->
<!-- templates/head.php  -->
<head>
    <?php include 'favicon.php'; ?>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript">
        // Fonts.com script to prevent FOUT
        // https://www.fonts.com/support/faq/fout
        MTIConfig = {};
        MTIConfig.EnableCustomFOUTHandler = true
    </script>
    <script type="text/javascript">
        window.ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
        window.networkurl = "<?php echo network_site_url(); ?>";
    </script>
    <link type="text/css" rel="stylesheet" href="//fast.fonts.net/cssapi/c0d97587-8630-4678-bda6-c6c03c518e63.css"/>
    
    <?php wp_head(); ?>
    <meta name="google-site-verification" content="_PJRR19tsi517dzFwOJz9iwt6tB6LNU_33ccBlPRQnQ" />
</head>
