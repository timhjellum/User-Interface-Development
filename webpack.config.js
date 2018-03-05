const path = require('path');
//const dist = '//WWWDEV/website/global/scripts';
//const dist = '../global/scripts';
const dist = '//REPLICATOR/website/css_rehab/archive/global/scripts';
//const dist = "./style-guide/src/js";

module.exports = {
	entry: {
		"eia-scripts": "./style-guide/assets/scripts/eia-scripts",
	},
	output: {
		path: path.resolve(__dirname, dist),
			filename: "[name].min.js"
	},
	module: {
		loaders: [
			{
				loader: 'babel',
				query: {
					presets: ['es2015']
				},
				// only test js files
				test: /\.js$/,
				// ignore the mode modules folder
				exclude: /node_modules/
			},
			
		]
	},
} // module.exports
