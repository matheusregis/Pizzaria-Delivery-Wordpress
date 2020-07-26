<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>

<script>
    var w = jQuery(document).find('#TB_ajaxContent');
    w.css('background-color', '#e9e9e8');
    w.height(570);
</script>
<?php
$type = $_GET['type'];
$iframe_url = $this->base_url  . 'admin/public/website-install-custom?type=' . $type . '&language_code=' . $this->admin_language;

if ($this->custom_css[$type]) {
    $iframe_url .= '&custom_css=' . base64_encode(json_encode($this->custom_css[$type]));
}

?>
<iframe width="100%" height="100%" frameborder="0"
        src="<?= $iframe_url;?>"></iframe>
<?php exit();