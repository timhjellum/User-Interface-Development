const webpack = require('webpack');
const path = require('path');
//const dist = '//WWWDEV/website/global/scripts';
//const dist = './global/scripts';
//const dist = '//REPLICATOR/website/css_rehab/archive/global/scripts';
const dist = "./style-guide/src/js";

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
			},
			{
				test: /\.(jpe?g|png|gif)$/i,
				loader:"file-loader",
				query:{
					name:'[name].[ext]',
					outputPath:'./style-guide/src/images/'
					//the images will be emmited to public/assets/images/ folder 
					//the images will be put in the DOM <style> tag as eg. background: url(assets/images/image.png); 
				}
			},
			{
				test: /\.css$/,
				loaders: ["style-loader","css-loader"],
				options: {
					transform: './transform.js'
				}
			}
		],
	},
	resolve: {
		alias: {
			jquery: "jquery/src/jquery"
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
