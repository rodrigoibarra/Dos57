module.exports = {
  dev: {                   // Target
    options: {              // Target options
      sassDir: '_dev/scss/',
      cssDir: ['build/css/', './'],
      outputStyle: 'nested',
    }
  },
  dist: {                   // Target
    options: {              // Target options
      sassDir: '_dev/scss/',
      cssDir: ['build/css/', './'],
      outputStyle: 'compressed',
    }
  }
}
