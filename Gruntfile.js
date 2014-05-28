var isoDate = new Date().toISOString();
isoDate = isoDate.replace(/:/g, '-');

var srcDir = 'src';
var devDir = 'laravel';
var releaseDir = 'release';
var localHttp = 'http://grunt-template.localhost/';

module.exports = function(grunt) {

    var devDir = 'laravel';
    // 1. All configuration goes here
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        less: {
            dev: {
                options: {
                      paths: [srcDir + "/public/less"],
                      // cleancss : true,
                      ieCompat: true,
                      sourceMap: true,
                      sourceMapFilename: devDir + '/public/css/main.map', // have to add / to /public otherwise it won't work..
                      sourceMapURL: 'main.map',
                      optimization: null

                },
                files: {
                      'laravel/public/css/main.src.css': srcDir + '/public/less/main.less'
                },
            },
            build: {
                options: {
                      paths: [srcDir + 'public/less'],
                      // cleancss : true,
                      ieCompat: true,
                      optimization: null
                },
                files: {
                      'laravel/public/css/main.css': srcDir + '/public/less/main.less'
                },
            },
            minify: {
                options: {
                      paths: [srcDir + 'public/less'],
                      cleancss : true,
                      ieCompat: true,
                      optimization: null

                },
                files: {
                      'laravel/public/css/main.min.css': srcDir + '/public/less/main.less'
                },
            }
        },

        copy: {
            dev: {
                files: [
                    // includes files within path and its sub-directories
                    {expand: true, cwd: srcDir + '/public/', src: ['lib/**'], dest: devDir + '/public'},
                ]
            },
            release: {
                files: [
                    {expand: true, cwd: devDir + '/public/', src: ['css/**', 'js/**', 'lib/**', 'img/**'], dest: releaseDir + '/public'},
                ]
            },
            release_zip: {
                files: [
                    {expand: true, cwd: releaseDir, src: ['release-' + isoDate + '.zip'], dest: releaseDir + '/archive'},
                ]
            },
        },

        concat: {
            // 2. Configuration for concatenating files goes here.
            dist: {
                src: [
                    // 'src/public/js/libs/*.js', // All JS in the libs folder
                    srcDir + '/public/js/module.js',  // This specific file
                    srcDir + '/public/js/main.js'  // This specific file
                ],
                dest: devDir + '/public/js/main.src.js',
            }
        },

        uglify: {
            build: {
                // minimise and tidy up the js
                options: {
                    compress: {
                        drop_console: true
                    },
                    sourceMap: true,
                    sourceMapName: devDir + '/public/js/main.map'
                },
                src: devDir + '/public/js/main.src.js',
                dest: devDir + '/public/js/main.min.js' // have to add / to /public otherwise it won't work..
            },
            beautify: {
                // make the js beautiful again
                options: {
                    beautify: {
                        beautify: true,
                        semicolons: true
                    }
                },
                src: devDir + '/public/js/main.min.js',
                dest: devDir + '/public/js/main.js' // have to add / to /public otherwise it won't work..
            }
        },

        imagemin: {
            dynamic: {
                files: [{
                    expand: true,
                    cwd: srcDir + '/public/img/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: devDir + '/public/img/'
                }]
            }
        },

        watch: {
            scripts: {
                files: [srcDir + '/public/js/*.js'],
                tasks: ['concat', 'uglify:build', 'uglify:beautify'],
                options: {
                    spawn: false,
                },
            },
            less: {
                files: [srcDir + '/public/less/*.less'],
                tasks: ['less:dev', 'less:build', 'less:minify'],
                options: {
                    spawn: false,
                },
            }
        },
        'curl-dir': {
            release: {
              src: [
                localHttp + 'template1',
                localHttp + 'template2',
                localHttp + 'template3',
                localHttp + 'template4'
              ],
              router: function (url) {
                url = url.replace(localHttp, '');
                return url + '.html';
              },
              dest: releaseDir + '/public'
            },
        },

        replace: {
            release: {
                src: [releaseDir + '/public/*.html'],             // source files array (supports minimatch)
                dest: releaseDir + '/public/',             // destination directory or file
                replacements: [
                    {
                        from: /http:\/\/flat_html_template\.localhost\/laravel\/public\/(.*)"/g,
                        to: '$1\.html"',
                    }
                ]
            }
        },

        compress: {
            release: {
                options: {
                    mode: 'zip',
                    archive: function () {
                        // The global value git.tag is set by another task

                        return releaseDir + '/release-' + isoDate + '.zip'
                    }
                },
                expand: true,
                cwd: 'release',
                src: ['public/**/**'],
                // dest: 'release/'
            }
        },

        clean: {
            release: [releaseDir + "/*.zip", releaseDir + "/public"]
        },

        jsbeautifier : {
            release: {
                src : [releaseDir + '/public/*.html'],
                options: {
                    html: {
                        braceStyle: "expand",
                        indentChar: " ",
                        indentSize: 2,
                        maxPreserveNewlines: 2,
                        preserveNewlines: true,
                        // unformatted: ["a", "sub", "sup", "b", "i", "u"],
                        // unformatted: ['li', 'a', 'ul'],
                        wrapLineLength: 0
                    },
                }
            },
        }

    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-curl');
    grunt.loadNpmTasks('grunt-text-replace');
    grunt.loadNpmTasks('grunt-contrib-compress');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-jsbeautifier');





    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    //grunt.registerTask('default', ['less']);
    grunt.registerTask('default', ['less:dev', 'less:build', 'less:minify', 'concat', 'uglify:build', 'uglify:beautify', 'copy:dev']);
    // grunt.registerTask('default', ['less', 'concat', 'uglify', 'uglify:beautify', 'watch']);

    // rebuilds the src files
    grunt.registerTask('build', ['less:dev', 'less:build', 'less:minify', 'concat', 'uglify:build', 'uglify:beautify', 'copy:dev', 'imagemin']);

    // builds a release from the build files
    grunt.registerTask('release', ['clean:release', 'curl-dir:release', 'copy:release', 'replace:release', 'jsbeautifier:release', 'compress:release', 'copy:release_zip']);
    // grunt.registerTask('release', ['replace:release']);

};
