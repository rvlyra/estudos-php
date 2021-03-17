$(document).ready(function () {
    $('#textFind').click(function () {
        $('.session-1').toggle(200);
    });
});

$(function () {
    $.expr[":"].contains = $.expr.createPseudo(function (a) {
        return function (e) {
            return ~$(e).text().toUpperCase().indexOf(a.toUpperCase());
        }
    });
    $("[name=q]").on("input", function () {
        $(".opcao").hide();
        $(".opcao:contains('" + this.value + "')").show();
    });
});