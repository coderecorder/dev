module.exports = function(grunt) {

  grunt.initConfig({
    connect: {
      server: {
        options: {
          port: 9001,
          base: 'build'
        }
      }
    },

    compass: {
      nuku: {
        options: {
          httpPath : '/',
          sassDir : 'sass',
          importPath : 'bower_components',
          cssDir : 'build/css',
          imagesPath : 'img',
          generatedImagesDir: 'build/img',
          outputStyle : 'expanded',
          relativeAssets : false
        }
      }
    },

    watch: {
      sass: {
        files: ['sass/**/*'],
        tasks:['compass']
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-connect');

  grunt.registerTask('server', ['connect', 'copy', 'compass:nuku', 'watch']);
  grunt.registerTask('build', ['assemble', 'copy', 'compass:nuku' ]);
};