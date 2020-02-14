const filter = require('gulp-filter');

import gulp from 'gulp';
import webpack from 'webpack';
import gulpWebpack from 'webpack-stream';
import livereload from 'gulp-livereload';
import rename from 'gulp-rename';
import uglify from 'gulp-uglify';

const DependencyExtractionWebpackPlugin = require('@wordpress/dependency-extraction-webpack-plugin');

export const task = config => {
	return gulp.src([
			`${config.assetsBuild}gutenberg/blocks.js`
		])
		// Webpack
		.pipe(
			gulpWebpack({
				mode: 'production',
				module: {
					rules: [{
						test: /\.(js|jsx)$/,
						exclude: /(node_modules)/,
						loader: 'babel-loader'
					}]
				},
				watchOptions: {
					poll: true,
					ignored: /node_modules/
				},
				optimization: {
					minimize: false //Update this to true or false
				},
				output: {
					filename: 'blocks.js',
				},
				plugins: [
					new DependencyExtractionWebpackPlugin(),
				],
			}, webpack)
		)
		.on('error', config.errorLog)
		.pipe(gulp.dest(config.assetsDir + 'gutenberg/'))
		.pipe(filter(['**/*.js']))

		// Minify
		.pipe(uglify())
		.pipe(rename({
			suffix: '.min'
		}))
		.on('error', config.errorLog)
		.pipe(gulp.dest(config.assetsDir + 'gutenberg/'))

		//reload
		.pipe(livereload());
};