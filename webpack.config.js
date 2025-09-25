import defaultConfig from '@wordpress/scripts/config/webpack.config.js';

export default {
  ...defaultConfig,
  entry: {
    index: './src/index.js',
    // cart: './src/cart.js',
    // 'home-products': './src/homeProducts.js',
    // 'product-showcase': './src/productShowcase.js',
    // 'mini-cart': './src/miniCart.js',
    // checkout: './src/checkout.js',
  },
  output: {
    filename: '[name].js',
    path: defaultConfig.output.path,
  },
};
