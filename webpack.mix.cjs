// import { mix } from "laravel-mix/src/File"

let mix = require('laravel-mix');
// import mix from 'laravel-mix'


//-----------------------------------------------------//
// const themeFolder = "blank";

//-----------------------------------------------------//
mix
	.sass(`src/scss/main.scss`, `css`)
	.sass(`src/scss/gutenberg-styles.scss`, `css`)

	//-----------------------------------------------------//
	.js(`src/js/app.js`, 'js')
	.js(`src/js/gutenberg.js`, 'js')

	.js(`src/js/block.js`, 'js')

	//-----------------------------------------------------//
	.sourceMaps(true, "source-map")
	//-----------------------------------------------------//
	.options({
		// extractVueStyles: false,
		processCssUrls: true,
		// terser: {},
		// purifyCss: false,
		// //purifyCss: {},
		// postCss: [require('autoprefixer')],
		// autoprefixer: { remove: false },
		clearConsole: false,
		// cssNano: { calc: false }
		// cssNano: {
		// 	discardComments: { removeAll: true },
		// }
	})
	//-----------------------------------------------------//
	.setPublicPath(`/`)
	// .disableNotifications()
	.disableSuccessNotifications()
	.version()

	// .browserSync('http://localhost/wordpress/mesh/');
