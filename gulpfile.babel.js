"use strict";

import gulp from "gulp";

const requireDir = require("require-dir"),
    paths = {
        styles: {
            src: "./resources/sass/frontend/main.{scss,sass}",
            dist: "./public/css/",
            watch: [
                "./resources/sass/frontend/**/*.{scss,sass}",
                "./resources/sass/frontend/**/*.{scss,sass}"
            ]
        },
        scripts: {
            src: "./resources/js/frontend.js",
            dist: "./public/js/",
            watch: [
                "./resources/js/frontend/**/*.js",
                "./resources/js/frontend/**/*.js"
            ]
        }
    };

requireDir("./gulp-tasks/");

export { paths };

export const development = gulp.series(
    gulp.parallel(["styles", "scripts"]),
    gulp.parallel("serve")
);
//
// export const prod = gulp.series("clean",
//     gulp.parallel([ "styles", "scripts"]));

export default development;
