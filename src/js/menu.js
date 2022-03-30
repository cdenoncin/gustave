//FONCTION POUR LE MENU DE LA PAGE ACTUALITÉS

jQuery(document).ready(function() {
    var triItem = jQuery(".contenu__menu_p"),
        actuItem = jQuery(".col");

        triItem.click(function () {
            triItem.removeClass("active");
            jQuery(this).addClass("active");
            var dataClass = jQuery(this).data("class");
            console.log(dataClass);
            
            actuItem.each(function() {
                if (!jQuery(this).hasClass(dataClass)) {
                    jQuery(this).addClass("sortedDown");
                }
                else {
                    jQuery(this).removeClass("sortedDown");
                }
            });
        });
});