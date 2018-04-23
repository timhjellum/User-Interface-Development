class ModuleScripts {
	constructor() {
        //this.moduleVisualizations = $(".visualizations h3 a:empty");
        //this.moduleLinkList = $(".link-list a:empty");
        this.hideDescriptionIfEmpty = $(".slider-home h3 a:empty");
        this.hideElementIfEmpty = $(".hide-mt a:empty");
        // these scripts look for an empty element and then hides the parent element
        //        this.moduleLinkList.each((index, element) => {
        //            $(element).parent().addClass("hide"); 
        //        })
        //        this.moduleVisualizations.each((index, element) => {
        //            $(element).closest('li').addClass("hide"); 
        //        })

    this.events();
    }
    events() {
        this.hideElementIfEmpty.each((index, element) => {
            $(element).closest('li').addClass("hide"); 
        })





        // if home slider slider href contains "?", append &x=z, else, append ?x=z
        $('.slider-home h2 a, .slider-home h3 a').attr( "href", function(ind,attr) {
            
            var slideOrder = $(this).parents('li').attr('class');
            var hash_position = attr.indexOf('#');
            var new_url_argument = /\?/.test(attr) ? '&src=home-' + slideOrder : '?src=home-' + slideOrder;

            // if there is no hash in the url, then add the new argument to the end, otherwise insert before the hash.
            return hash_position == -1 ? (attr + new_url_argument) : attr.substring(0, hash_position) + new_url_argument + attr.substring(hash_position, attr.length)
            //return /\?/.test(attr) ? attr + '&src=home-' + pos : attr + '?src=home-' + pos;
        });




        //$(".slider-home h3 a:empty").each(function() {
        //    $(this).parent().parent().addClass("no-description"); 
        //});
        this.hideDescriptionIfEmpty.each((index, element) => {
            $(element).closest('li').addClass('no-description');
        })



        $('.features a').attr( "href", function(ind,attr) {
            var featureOrder = $(this).parents('div').attr('class');
            return /\?/.test(attr) ? attr + '&src=home-' + featureOrder : attr + '?src=home-' + featureOrder;
        });
    }     
}
export default ModuleScripts;
