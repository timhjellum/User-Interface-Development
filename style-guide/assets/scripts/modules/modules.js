class moduleScripts {
	constructor() {
        //this.moduleVisualizations = $(".visualizations h3 a:empty");
        //this.moduleLinkList = $(".link-list a:empty");
        this.hideElementIfEmpty = $(".hide-mt a:empty");
        // these scripts look for an empty element and then hides the parent element
//        this.moduleLinkList.each((index, element) => {
//            $(element).parent().addClass("hide"); 
//        })
//        this.moduleVisualizations.each((index, element) => {
//            $(element).closest('li').addClass("hide"); 
//        })
        this.hideElementIfEmpty.each((index, element) => {
            $(element).closest('li').addClass("hide"); 
        })
    }
//	events() {
//    }     
}
export default moduleScripts;
