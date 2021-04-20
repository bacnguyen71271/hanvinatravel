$(document).on("ajaxSetup", function (event, context) {
    // Enable AJAX handling of Flash messages on all AJAX requests
    if (context.options.flash === undefined)
        context.options.flash = true;

    // Enable the StripeLoadIndicator on all AJAX requests
    if (context.options.loading === undefined)
        context.options.loading = $.oc.stripeLoadIndicator;

    // Handle Error Messages by triggering a flashMsg of type error
    context.options.handleErrorMessage = function (message) {
        kaizenbody.alert(message);
    };

    // Handle Flash Messages by triggering a flashMsg of the message type
    context.options.handleFlashMessage = function (message, type) {
        kaizenbody.alert(message);
    };
});
$(document).ready(function(){
    $('li.list-check').parent().addClass('nvh-box-detail');

    $('.nvh-tag-box-detail').append('<div class="line-after-tag"></div>');
    widthContent = $('#content').css('width');

    $( ".line-after-tag" ).each(function( index ) {
        parent = $(this).closest('.nvh-tag-box-detail');
        widthParent = $(parent).css('width');
        widthTag = parseInt(widthContent) - parseInt(widthParent) - 30;
        $(this).css('width', widthTag);
    });

    $(document).on('click', '.aside-item .icon', function() {
        $('.aside-item').toggleClass('show');
    })
})