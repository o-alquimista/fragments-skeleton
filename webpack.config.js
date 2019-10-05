const path = require('path');

module.exports = {
  entry: {
    app: './assets/js/app.js',
  },
  mode: 'development',
  watchOptions: {
    poll: 1000
  },
  output: {
    filename: '[name].js',
    path: path.resolve(__dirname, 'public/build')
  },
  module: {
    rules: [
      {
        test: /\.css$/,
        use: [
          'style-loader',
          'css-loader'
        ]
      }
    ]
  }
};
