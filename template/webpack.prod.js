const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const OptimizeCSSAssetsPlugin = require('optimize-css-assets-webpack-plugin')
const UglifyJsPlugin = require('uglifyjs-webpack-plugin')
const HtmlWebpackPlugin = require('html-webpack-plugin')
const { CleanWebpackPlugin } = require('clean-webpack-plugin')
const CopyWebpackPlugin = require('copy-webpack-plugin')
const {merge} = require('webpack-merge')
const common = require('./webpack.common.js')
const path = require('path')


module.exports = merge(common,{
  mode: 'production',
  optimization: {
    minimizer: [
      new OptimizeCSSAssetsPlugin({}),
      new UglifyJsPlugin({
        test: /\.js(\?.*)?$/i
      })
    ]
  },
  performance: {
    hints: false,
    maxEntrypointSize: 512000,
    maxAssetSize: 512000
  },
  plugins: [
    new CleanWebpackPlugin(),
    new HtmlWebpackPlugin({
      title: 'Output Management',
      filename: 'index.html',
      template: './src/index.html'
    }),
    new MiniCssExtractPlugin({
      filename: './css/style.css'
    }),
    new CopyWebpackPlugin({
      patterns: [
        {
          from: path.resolve(__dirname, './src/images/'),
          to: path.resolve(__dirname, './dist/images/')
        },
        {
          from: path.resolve(__dirname, './src/fonts/'),
          to: path.resolve(__dirname, './dist/fonts/')
        },
        {
          from: path.resolve(__dirname, './src/includes/'),
          to: path.resolve(__dirname, './dist/includes/')
        },
        // {
        //   from: path.resolve(__dirname, './src/js/'),
        //   to: path.resolve(__dirname, './dist/js/')
        // },
        // {
        //   from: path.resolve(__dirname, './src/css/fonts.css'),
        //   to: path.resolve(__dirname, './dist/css/fonts.css')
        // }
      ]
    })
  ],
  module: {
    rules: [
      {
        test: /\.scss$/,
        exclude: /node_modules/,
        use: [
          {
            loader: 'file-loader',
            options: { outputPath: 'css/', name: '[name].css' }
          },
          'sass-loader',
          //minify css
          // MiniCssExtractPlugin.loader,
          // "css-loader",
          // {
          //   loader: "sass-loader",
          //   options: {
          //     implementation: require("sass"),
          //   },
          // },
        ]
      }
    ]
  }
});
