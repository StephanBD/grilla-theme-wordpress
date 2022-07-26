export function query(node, from = document) {
	return from.querySelector(node);
}
export function queryAll(node) {
	return document.querySelectorAll(node);
}

// export function getXY(e) {
// 	// Get the bounding rectangle of target
// 	const rect = e.target.getBoundingClientRect();
// 	// Mouse position
// 	const x = e.clientX - rect.left;
// 	const y = e.clientY - rect.top;
// 	return { x, y }
// }
// export function emoveClasses(element, ...classes) {
// 	// console.log(classes);
// 	classes.forEach(className => {
// 		element.classList.remove(className)
// 	});
// 	// return element
// }
// -------------------------------------------------
// export function insertBefore(newNode, existingNode) {
// 	existingNode.parentNode.insertBefore(newNode, existingNode);
// }
// export function insertAfter(newNode, existingNode) {
// 	existingNode.parentNode.insertBefore(newNode, existingNode.nextSibling);
// }

