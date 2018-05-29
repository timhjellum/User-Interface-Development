const webpack = require('webpack');
const path = require('path');
//const dist = '//WWWDEV/website/global/scripts';
//const dist = './global/scripts';
const dist = '//REPLICATOR/website/adaptive/global/scripts';
//const dist = "./style-guide/src/js";

module.exports = {
	entry: {
		global: "./style-guide/assets/scripts/global",
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
			}
			/*,
			{
				test: /\.(jpe?g|png|gif)$/i,
				loader:"file-loader",
			},
			{
				test: /\.css$/,
				//exclude: "/themes/base/tabs.css",
				loaders: ["style-loader","css-loader"],
			}
			*/
		],
	},
	resolve: {
		alias: {
			jquery: "jquery/src/jquery",
//		}
//	},
//	resolve : {
//		alias: {
			"jqueryUiDist": "jquery-ui-dist/jquery-ui.js",   
		  	// bind to modules;
		  	modules: path.join(__dirname, "node_modules"),
		}
	},
	plugins: [
		new webpack.ProvidePlugin({
			$: "jquery",
			jQuery: "jquery",
			"window.jQuery": "jquery",
			"window.$": "jquery"
		})
	]
} // module.exports
