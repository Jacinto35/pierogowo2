/*global module:false*/
module.exports = function (grunt) {

    // Project configuration.
    grunt.initConfig({
        cssSrcDir: 'web/css/src/',
        cssBuildDir: 'web/css/build/',
        less: {
            development: {
                options: {
                    compress: true,
                    yuicompress: true,
                    optimization: 2
                },
                files: {
                    '<%= cssBuildDir %>base.css': '<%= cssSrcDir %>base.less',
                }
            }
        },
        watch: {
            css: {
                files   : ['<%= cssSrcDir %>/*.less', '<%= cssSrcDir %>/*/*.less'],
                tasks   : ['less']
            },
        }
    });

    // These plugins provide necessary tasks.
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // Default task.
    grunt.registerTask('default', ['less']);

};
