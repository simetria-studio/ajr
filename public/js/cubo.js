var $el = $(".cube");
var rotate = function (index) {
    var index = index || 0;
    $el.each(function (e) {
        $(this).attr("data-rotate", Math.abs($(this).index() - index));
    });
};
$el.hover(function (e) {
    var index = $(this).index();
    rotate(index);
});
rotate(0);

const tooltipTriggerList = document.querySelectorAll(
    '[data-bs-toggle="tooltip"]'
);
const tooltipList = [...tooltipTriggerList].map(
    (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
);
