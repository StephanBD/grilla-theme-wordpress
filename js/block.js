/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	// The require scope
/******/ 	var __webpack_require__ = {};
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
/*!*************************!*\
  !*** ./src/js/block.js ***!
  \*************************/
__webpack_require__.r(__webpack_exports__);
var registerBlockType = wp.blocks.registerBlockType;
var _wp$editor = wp.editor,
    InnerBlocks = _wp$editor.InnerBlocks,
    RichText = _wp$editor.RichText,
    InspectorControls = _wp$editor.InspectorControls,
    ColorPalette = _wp$editor.ColorPalette,
    BlockControls = _wp$editor.BlockControls,
    AlignmentToolbar = _wp$editor.AlignmentToolbar;
var PanelBody = wp.components.PanelBody; // const { __ } = wp.i18n; // Import __() from wp.i18n
// registerBlockType("namespace/block-slug",{})

registerBlockType("alecadd/custom-cta", {
  // built-in attributes ------------------
  title: "call to action",
  description: "Block to generate a custom Call to action",
  icon: "format-image",
  category: "layout",
  // custom attributes ------------------
  attributes: {
    author: {
      type: "string"
    },
    title: {
      type: "string",
      source: "html",
      selector: "h2"
    },
    body: {
      type: "string",
      source: "html",
      selector: "p"
    },
    titleColor: {
      type: "string",
      "default": "black"
    },
    alignment: {
      type: "string",
      "default": "none"
    }
  },
  // custom functions ------------------
  // built-in functions ------------------
  // edit({ attributes, setAttributes }) {
  // 	// custom functions
  // 	function updateAuthor(e) {
  // 		console.log(e.target.value);
  // 		setAttributes({ author: e.target.value })
  // 	}
  // 	// JSX
  // 	// return <div>Hello world</div>
  // 	return React.createElement("input", {
  // 		type: "text",
  // 		onChange: updateAuthor,
  // 		value: attributes.author
  // 	})
  // },
  // save({ attributes }) {
  // 	return React.createElement("p", null, "hola ", /*#__PURE__*/React.createElement("i", null, attributes.author));
  // },
  // -------------
  edit: function edit(_ref) {
    var attributes = _ref.attributes,
        setAttributes = _ref.setAttributes;
    var alignment = attributes.alignment;

    function onChangeAlignment(value) {
      console.log(value);
      setAttributes({
        alignment: value === undefined ? "none" : value
      });
    }

    return React.createElement("div", {
      "class": "bg-red p flex"
    }, /*#__PURE__*/React.createElement(BlockControls, null, /*#__PURE__*/React.createElement(AlignmentToolbar, {
      value: alignment,
      onChange: onChangeAlignment
    })), /*#__PURE__*/React.createElement(InnerBlocks, {
      style: {
        textAlign: alignment
      }
    }));
  },
  save: function save() {
    // var blockProps = useBlockProps.save();
    return /*#__PURE__*/React.createElement("div", {
      className: "p-3 bg-red flex"
    }, /*#__PURE__*/React.createElement(InnerBlocks.Content, {
      "class": ""
    }));
  } // -------------
  // edit: function ({ attributes, setAttributes }) {
  // 	const { title, body, titleColor } = attributes
  // 	function changeTitle(newTitle) {
  // 		console.log(newTitle);
  // 		// setAttributes({ title: e.target.value })
  // 	}
  // 	function changeBody(newBody) {
  // 		console.log(newBody);
  // 		// setAttributes({ body: e.target.value })
  // 	}
  // 	function onTitleColorChange(newColor) {
  // 		console.log(newColor);
  // 	}
  // 	return [/*#__PURE__*/React.createElement(InspectorControls, {
  // 		style: {
  // 			marginBottom: "40px"
  // 		}
  // 	}, /*#__PURE__*/React.createElement(PanelBody, {
  // 		title: 'font color settings'
  // 	}, /*#__PURE__*/React.createElement("p", null, /*#__PURE__*/React.createElement("strong", null, "Select a title color:")), /*#__PURE__*/React.createElement(ColorPalette, {
  // 		value: titleColor,
  // 		onChange: onTitleColorChange
  // 	}))), /*#__PURE__*/React.createElement("div", {
  // 		class: "container"
  // 	}, /*#__PURE__*/React.createElement("div", {
  // 		class: "bg-green"
  // 	}, /*#__PURE__*/React.createElement(RichText, {
  // 		key: "editable",
  // 		tagName: "h2",
  // 		placeholder: "Your CTA title",
  // 		value: title,
  // 		onChange: changeTitle,
  // 		style: {
  // 			color: titleColor
  // 		}
  // 	}), /*#__PURE__*/React.createElement(RichText, {
  // 		key: "editable",
  // 		tagName: "p",
  // 		placeholder: "Your CTA description",
  // 		value: body,
  // 		onChange: changeBody
  // 	})))];
  // 	//  #save------
  // },
  // save: function () {
  // 	return React.createElement("div", null, "hola");
  // },

});
{
  /* 
  
  
  <InspectorControls style={{marginBottom: "40px"}} >
  <PanelBody title={'font color settings'}>
  	<p><strong>Select a title color:</strong></p>
  	<ColorPalette value={titleColor} onChange={onTitleColorChange}></ColorPalette>
  </PanelBody>
  </InspectorControls> ,
  
  
  
  < div class="bg-green" >
  <RichText key="editable"
  	tagName="h2" 
  	placeholder="Your CTA title"
  	value={title}
  	onChange={changeTitle}
  	style={{color: titleColor}}
  />
  <RichText key="editable"
   tagName="p"
   placeholder="Your CTA description"
  value={body}
  onChange={changeBody}
  />
  </div >
  
  
  */
}
{
  /* <div>
  {
  <BlockControls>
  <AlignmentToolbar 
  	value={alignment}
  	onChange={onChangeAlignment}
  />
  </BlockControls>
  }
  <InnerBlocks style={{textAlign: alignment}}/>
  
  </div> */
}
/******/ })()
;
//# sourceMappingURL=block.js.map