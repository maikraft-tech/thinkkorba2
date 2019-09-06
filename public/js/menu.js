const $menu = $('#menu');
$(document).mouseup(e => {
    if (!$menu.is(e.target) // if the target of the click isn't the container...
        && $menu.has(e.target).length === 0) // ... nor a descendant of the container
    {
        $menu.removeClass('is-active');
    }
});
$('.berrymenu').on('click', () => {
    $menu.toggleClass('is-active');
});
