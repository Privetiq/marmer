jQuery(document).ready(function ($) {
    $('#next-form-step').click(function () {
        console.log('test');
        $('#form-step-1').hide();
        $('#form-step-2').show();
    });
    $('.cf7mls_back').click(function () {
        $('#form-step-2').hide();
        $('#form-step-1').show();
    })
});
