import $ from "jquery";
window.jQuery = global.jquery = $;
const icons = {
    header: "fas fa-plus",
    activeHeader: "fas fa-minus"
};
$(function(){
    $("#accordion").accordion({
        icons: icons
    });
});
