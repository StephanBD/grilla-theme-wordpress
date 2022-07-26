import gulp from "gulp";
import phpMinify from "@cedx/gulp-php-minify";
import GulpPug from "gulp-pug";
import rename from "gulp-rename";
import notify from "gulp-notify";



// dest folder --------------------
const dest = "src/php";
const webFolder = "mesh";

//-------------------PHP----------------------------------//
// require PHP in Comand line
export function php() {
	return gulp.src("src/php/**/*.php", { read: false })
		.pipe(phpMinify({ silent: true }))
		.pipe(gulp.dest("."))
		.on("error", notify.onError(function (error) {
			return "Error in PHP: " + error.message;
		}))
}

// pug ----------------------
export function pug() {
	return gulp.src("src/pug/**/!(_)*.pug")
		.pipe(GulpPug())
		.pipe(rename({
			extname: '.php'
		}))
		.pipe(gulp.dest(dest))
		.on("error", notify.onError(function (error) {
			return "Error in pug: " + error.message;
		}))
}
// // test xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
export function pugTemplates() {
	return gulp.src("src/template/!(_)*.pug")
		.pipe(GulpPug())
		.pipe(rename({
			extname: '.php'
		}))

		.pipe(gulp.dest("."))
		// .pipe(gulp.dest("xxxxxxxxxxxx"))
		.on("error", notify.onError(function (error) {
			return "Error in pug: " + error.message;
		}))
}
export function test() {
	return gulp.src("pug.pug")
		.pipe(GulpPug())
		.pipe(rename({
			extname: '.php'
		}))

		.pipe(gulp.dest("xxxxxxxxxxxx"))
		.on("error", notify.onError(function (error) {
			return "Error in pug: " + error.message;
		}))
}
export function php2() {
	return gulp.src("xxxxxxxxxxxx/*.php", { read: false })
		.pipe(phpMinify({ silent: true, mode: "safe" }))
		.pipe(gulp.dest("xxxxxxxxxxxx"))
		.on("error", notify.onError(function (error) {
			return "Error in PHP: " + error.message;
		}))
}
// // test xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx

// watch ---------------------
export function watch() {
	gulp.watch("src/php/**/*.php", php);
	gulp.watch("src/pug/**/*.pug", pug);

}


// build ---------------------
export function allPhp() {
	return gulp.src(["**/*.php", '!./node_modules/**', '!./src/**'], { read: false })
		.pipe(phpMinify({ silent: true }))
		.pipe(gulp.dest("."))
		.on("error", notify.onError(function (error) {
			return "Error in allPhp: " + error.message;
		}))
}



// browserSync ----------------------------------------------//
export function watching() {
	// browserSync.init({
	// 	notify: false,
	// 	open: true,
	// 	// server: projectPath,
	// 	// baseDir: "./description.html"
	// 	proxy: "http://wordpress.test/" + webFolder
	// });
	// --------
	gulp.watch("src/php/**/*.php", php);
	gulp.watch("src/template/*.pug", pugTemplates);

}


// export --------------------------------------------//
export default gulp.series(php, allPhp, pugTemplates)
export const build = gulp.series(php, allPhp, pugTemplates)
// export { watch, pug, php, allPhp, build, watching }

