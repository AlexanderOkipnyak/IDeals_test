const path = require('path');
const merge = require('webback-merge');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
 
module.exports = {
	mode: 'development',
	entry: './src/index.js',
	output: {
		path: path.resolve(__dirname, 'dist'),
		filename: 'scripts.js'
	}
};