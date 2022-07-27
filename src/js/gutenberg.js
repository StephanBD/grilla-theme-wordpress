import { query } from "./helpers.js"



let editorWrapper


window.onload = function () {




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
			editorWrapper = query(".edit-post-visual-editor__content-area")
			// do your stuff here
			console.log(`template changed to ${this.template}`);

			if (this.template === "full-width.php" || this.template === "blank.php") {
				// editorWrapper.style.maxWidth = "100%"
				console.log(editorWrapper);
				console.log("full-width")
				editorWrapper.classList.add("full-width")
			} else {
				editorWrapper.classList.remove("full-width")
				editorWrapper.style.maxWidth = ""
				// console.log("no change");
			}
		}
	}

	new PageTemplateSwitcher().init();

}



//====================================================//

