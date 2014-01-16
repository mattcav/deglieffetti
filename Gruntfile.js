module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    sass: {
      options: {
        includePaths: ['bower_components/foundation/scss']
      },
      dist: {
        options: {
          outputStyle: 'compressed'
        },
        files: {
          'css/app.css': 'scss/app.scss'
        }        
      }
    },

     autoprefixer: {
        single_file: {
          options: {
            browsers: ['last 2 version', 'ie 8', 'ie 7']
          },
          src: 'css/app.css',
          dest: 'css/app.css'
        },
      },

      concat: {   
          dist: {
              src: [
                  'bower_components/jquery/jquery.js', 
                  'bower_components/foundation/js/foundation.min.js',
                  'bower_components/foundation/js/foundation/foundation.reveal.js',
                  'bower_components/magnific-popup/dist/jquery.magnific-popup.js',
                  'js/app.js' 
              ],
              dest: 'js/build/app.js'
          }
      },

      uglify: {
          build: {
              src: 'js/build/app.js',
              dest: 'js/build/app.min.js'
          }
      },


    watch: {
      grunt: { files: ['Gruntfile.js'] },

      sass: {
        files: 'scss/**/*.scss',
        tasks: ['sass', 'autoprefixer']
      },

      concat: {
        files: 'js/*.js',
        tasks: ['concat', 'uglify']
      }

    }
  });

  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  grunt.registerTask('build', ['sass', 'autoprefixer', 'concat', 'uglify']);
  grunt.registerTask('default', ['build','watch']);
}