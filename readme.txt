<html><body>
    



    // this compiles a production CSS from only the required LESS files and makes a pretty and ugly (minified) version in the global folder and style-guide folder
    /*
    
    1. Compile NEW EIA Styles
        Output:
            * //WWWDEV/website/global/styles compiled but not minimized
            * ./style-guide/src/css compiled but not minimized
            * //WWWDEV/website/global/styles compiled and minimized

            <pre>
                <code>
                    $ npm run gulp styles
                </code>
            </pre>
    
    2. Compile Print Styles
        New Print Output:
            * //WWWDEV/website/global/styles compiled but not minimized
            * ./style-guide/src/css compiled but not minimized
            * //WWWDEV/website/global/styles compiled and minimized
            Old Print Output:
            * //WWWDEV/website/global/styles compiled but not minimized
            * ./style-guide/src/css compiled but not minimized
            * //WWWDEV/website/global/styles compiled and minimized

            <pre>
                <code>
                    $ npm run gulp print
                </code>
            </pre>
    
    4. Compile Style Guide Styles 
        Output:
            * ./style-guide/src/css compiled but not minimized
    <pre>
        <code>
            $ npm run gulp style-guide
        </code>
    </pre>
    
    4. Compile Special Disruptions Socal CSS
           Output:
            * ./style-guide/src/css
            * //WWWDEV/website/special/disruptions/socal/css

            <pre>
                <code>
                    $ npm run gulp special
                </code>
            </pre>





</body></html>
