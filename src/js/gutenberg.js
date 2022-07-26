import { query } from "./helpers.js"



let editorWrapper


window.onload = function () {



	editorWrapper = query(".is-root-container")
	// --------------------
	const { select, subscribe } = wp.data;

	class PageTemplateSwitcher {

		constructor() {
			this.template = null;
		}

		init() {

			subscribe(() => {

				const newTemplate = select('core/editor').getEditedPostAttribute('template');

				if (newTemplate !== this.template) {
					this.template = newTemplate;
					this.changeTemplate();
				}

			});

		}

		changeTemplate() {
			// do your stuff here
			// console.log(`template changed to ${this.template}`);

			if (this.template === "full-width.php") {
				editorWrapper.style.maxWidth = "100%"
				console.log(editorWrapper);
			} else {
				editorWrapper.style.maxWidth = ""
				// console.log("no change");
			}
		}
	}

	new PageTemplateSwitcher().init();

}

//====================================================//

