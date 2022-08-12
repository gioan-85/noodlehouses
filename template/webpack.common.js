const HtmlWebpackPlugin = require('html-webpack-plugin')
var path = require('path')

module.exports = {
  entry: [
    './src/css/style.scss',
    './src/js/main.js'
  ],
  output: {
    filename: './js/main.js',
    path: path.resolve(__dirname, 'dist')
  },
  plugins: [
    new HtmlWebpackPlugin({
      title: 'Output Management',
      filename: 'index.html',
      template: './src/index.html'
    }),
  ]
}
