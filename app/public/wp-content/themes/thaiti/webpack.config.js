const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

module.exports = {
  entry: './src/index.js', // Entry point of your theme's JavaScript and SCSS
  output: {
    path: path.resolve(__dirname, 'dist'), // Output directory
    filename: 'bundle.js',
  },
  module: {
    rules: [
      {
        test: /\.scss$/,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          'sass-loader',
        ],
      },
    ],
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: 'style.css',
    }),
    new BrowserSyncPlugin({
        proxy: 'http://tahititest.local:80', 
        files: [
            '**/*.php',
            'dist/style.css',
            'dist/bundle.js'
        ],
        reloadDelay: 0
    })
  ],
};
