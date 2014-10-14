module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    // Project settings
    project: {
      app: 'app',
      dir: '/',
      assets: '<%= project.dir %>/assets',
      sass: '<%= project.assets %>/sass'
    },

    // Start watching SASS
    sass: {
      dev: {
        options: {
          style: 'expanded',
          lineNumbers: true,
          sourcemap: false,
          compass: false
        },
        files: [{
          expand: true,
          cwd: '<%= project.sass %>',
          src: ['*.{scss,sass}'],
          dest: '<%= project.dir %>/',
          ext: '.css'
        }]
      },
      dist: {
        options: {
          style: 'compressed',
          compass: false
        },
        files: [{
          expand: true,
          cwd: '<%= project.sass %>',
          src: ['*.{scss,sass}'],
          dest: '<%= project.sass %>/css/',
          ext: '.css'
        }]
      }
    },

    // Add in prefixes where necessary
    autoprefixer: {
      options: {
        browsers: ['last 2 version', 'ie 9']
      },
      // prefix all files
      multiple_files: {
        expand: true,
        flatten: true,
        src: '<%= project.assets %>/css-source/raw/*.css',
        dest: '<%= project.assets %>/css-source/prefix/'
      },
    },

    // Combine Media Queries
    cmq: {
      your_target: {
        files: {
          '<%= project.dir %>/': ['<%= project.assets %>/css-source/prefix/*.css']
        }
      }
    },

    // Set up watch commands for library
    watch: {
      sass: {
        files: '**/*.scss',
        tasks: ['sass:dev'],
        options: {
          livereload: true,
        }
      }
    },

    commit: {
      sass: {
        files: '**/*.scss',
        tasks: ['sass:dev'],
        options: {
          livereload: true,
        }
      },
      prefix: {
        files: '<%= project.assets %>/css-source/raw/*.css',
        tasks: ['autoprefixer']
      },
      combinemedia: {
        files: '<%= project.assets %>/css-source/prefix/*.css',
        tasks: ['cmq']
      }
    },

    githooks: {
      all: {
        'pre-commit': 'watch'
      }
    }
  });

  // Load Tasks
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-combine-media-queries');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-githooks');

  grunt.registerTask('default',['watch']);
}