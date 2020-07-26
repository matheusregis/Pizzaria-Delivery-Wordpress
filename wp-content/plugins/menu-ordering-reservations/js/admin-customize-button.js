
function glfDisplayShortcode() {
    var ruid = document.getElementById('js_glf_mor_ruid').value;
    document.getElementById('js_glf_mor_ordering').value = glf_mor_createShortcode('ordering', ruid);
    document.getElementById('js_glf_mor_reservations').value = glf_mor_createShortcode('reservations', ruid);
    document.getElementById('js_glf_mor_full_menu').value = glf_mor_createShortcode('full-menu', ruid);
}

function glfUpdateFullMenu(element) {
    var ruid = document.getElementById('js_glf_mor_ruid').value;
    window.location.href = jQuery(element).data('page') + '&refresh_menu=' + ruid;
}
