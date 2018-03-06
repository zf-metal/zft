$(function ($) {
	
    $('#body').toggleClass(getCookie('nav'));

    $('#body').on('expanded.pushMenu', function () {
        var navSmall = '';
        if (!$('#body').hasClass('sidebar-collapse')) {
            navSmall = 'sidebar-collapse';
        }
        setCookie('nav', navSmall);
    });

    $('#body').on('collapsed.pushMenu', function () {
        var navSmall = '';
        if (!$('#body').hasClass('sidebar-collapse')) {
            navSmall = 'sidebar-collapse';
        }
        setCookie('nav', navSmall);
    });
});