var path = require('path');
var webpack = require('webpack');

module.exports = {
	entry: {
		bundle: './library/src/main.js'
	},
	output: {
		filename: 'bundle.js',
		path: path.resolve(__dirname, 'library/js')
	},
	resolve: {
		modules: [
			path.resolve('./'),
			path.resolve('./node_modules'),
		]
	},
	module: {
		loaders: [
			{
				test: /\.js$/,
				exclude: /node_modules/,
				loader: 'babel-loader',
				query: {
					presets: ['es2015']
				}
			}
		]
	}
};