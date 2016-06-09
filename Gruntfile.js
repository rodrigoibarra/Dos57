module.exports = function(grunt) {3
  require('load-grunt-config')(grunt);
  require("load-grunt-tasks")(grunt);

  grunt.registerTask("default", ['uglify', 'compass:dev', "watch"]);
  grunt.registerTask('clear',['clean', 'copy']);
  grunt.registerTask("deploy", ['clean:clear','compass:dist', 'autoprefixer:dist', "uglify","copy:clear" ]);

};
