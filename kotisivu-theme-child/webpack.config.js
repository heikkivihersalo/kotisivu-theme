/**
 * Load enviroment variables 
 * 
 * @link https://developer.wordpress.org/block-editor/reference-guides/packages/packages-scripts/#provide-your-own-webpack-config
 * @link https://webpack.js.org/plugins/environment-plugin/
 *
 * Use variables with following syntax: 'process.env.API_KEY'
 * Create new 'webpack.config.js' file to the root of your project with following content
 * 
 * 

  const { EnvironmentPlugin } = require('webpack');
  const defaultConfig  = require('@wordpress/scripts/config/webpack.config');

  module.exports = {
    ...defaultConfig,
    plugins: [
      ...defaultConfig.plugins,
      new EnvironmentPlugin({
        API_KEY: "api_key_here"
      })
    ]
  };
  */

const defaultConfig  = require('@wordpress/scripts/config/webpack.config');

module.exports = {
  ...defaultConfig
};