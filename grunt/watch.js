module.exports = {
  compass: {
   files: ['**/*.scss', '*.html'],
   tasks: ['compass'],
   options: {
     spawn: false,
     livereload: true,
   },
  },
  uglify:{
    files: [ '_dev/libs/*js', '_dev/js/global.js' ],
    task: ['uglify']
  },
  svg: {
   files: ["dev/svg/*.svg"],
   tasks: ["svgstore"],
   options: {
       livereload: true,
   },
  },
}
