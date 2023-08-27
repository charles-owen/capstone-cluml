const path = require('path');
const {merge} = require('webpack-merge');
const common = require('./webpack.common');
const site = require('./vendor/cl/site/webpack.site.serve');

module.exports = merge(common, site, {
	output: {
		path: path.resolve(__dirname, 'cl/dist'),
	},
	devServer: {
		host: 'cse335.localhost',
		hot: true,
		static: {
			publicPath: path.resolve(__dirname, 'cl/dist')
		},
		proxy: {
			context: () => true,
			'/': 'http://cse335.localhost'
		}
	}
});
