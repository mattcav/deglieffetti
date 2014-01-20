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
           homeApp: {
              src: [
                  'bower_components/jquery/jquery.js', 
                  'bower_components/foundation/js/foundation.min.js',
                  'bower_components/foundation/js/foundation/foundation.interchange.js',
                  'bower_components/magnific-popup/dist/jquery.magnific-popup.js',
                  'bower_components/verge/verge.js',
                  'js/smooth-scroll.js',
                  'js/jquery.balancetext.js',
                  'js/mailform.js',
                  'js/home-app.js',
                  'js/analytics.js'
              ],
              dest: 'js/build/home-app.js',
            },

            app: {
              src: [
                  'bower_components/jquery/jquery.js', 
                  'bower_components/foundation/js/foundation.min.js',
                  'bower_components/magnific-popup/dist/jquery.magnific-popup.js',
                  'js/app.js',
                  'js/analytics.js' 
              ],
              dest: 'js/build/app.js',
            },

            ccpApp: {
              src: [
                  'bower_components/jquery/jquery.js', 
                  'bower_components/foundation/js/foundation.min.js',
                  'bower_components/magnific-popup/dist/jquery.magnific-popup.js',
                  'js/mailform.js',
                  'js/app.js',
                  'js/analytics.js' 
              ],
              dest: 'js/build/ccp-app.js',
            },

            phApp: {
              src: [
                  'bower_components/jquery/jquery.js', 
                  'bower_components/foundation/js/foundation.min.js',
                  'bower_components/foundation/js/foundation/foundation.interchange.js',
                  'bower_components/imagesloaded/imagesloaded.pkgd.min.js',
                  'bower_components/masonry/masonry.pkgd.min.js',
                  'bower_components/fittext/fittext.js',
                  'bower_components/magnific-popup/dist/jquery.magnific-popup.js',
                  'js/nat-form.js',
                  'js/ph-app.js',
                  'js/analytics.js' 
              ],
              dest: 'js/build/ph-app.js',
            },

      },

      uglify: {
         app: {
            files: {
              'js/build/app.min.js': ['js/build/app.js']
            }
          }, 
          home: {
            files: {
              'js/build/home-app.min.js': ['js/build/home-app.js']
            }
          }, 
          ccp: {
            files: {
              'js/build/ccp-app.min.js': ['js/build/ccp-app.js']
            }
          },

          ph: {
            files: {
              'js/build/ph-app.min.js': ['js/build/ph-app.js']
            }
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