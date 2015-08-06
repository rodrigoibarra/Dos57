module.exports = {
  dev: {                   // Target
    options: {              // Target options
      sassDir: '_dev/scss/',
      cssDir: ['build/css/', './'],
      environment: 'development',
    }
  },
  dist: {                   // Target
    options: {              // Target options
      sassDir: '_dev/scss/',
      cssDir: 'build/css/',
      environment: 'production',
    }
  }
}
