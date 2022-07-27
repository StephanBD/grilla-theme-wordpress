import { query } from "./helpers.js"
// -----------


// ========================





document.querySelectorAll(".menu-dropdown-icon").forEach(item => {
	// console.log(item);
	item.addEventListener("click", (e) => {
		// ----
		// if (window.innerWidth < 768) {
		// console.log(item.nextElementSibling);
		e.preventDefault()
		e.stopPropagation()
		// item.nextElementSibling.classList.toggle("md:show-block")
		item.nextElementSibling.classList.toggle("active")
		item.classList.toggle("fa-angle-down")
		item.classList.toggle("fa-angle-up")
		// }
		// ----
	})
})


// ---
const navbarToggle = query(".navbar-toggle")
if (navbarToggle) {
	navbarToggle.addEventListener("click", () => {
		query(".navbar-list").classList.toggle("md:show")
	})



	// --------------------------------
	// 🗛
	query("#font-deincrease").addEventListener("click", () => {
		const fontSize = parseInt(getComputedStyle(document.documentElement).getPropertyValue('--font-size-adjust')) - 1 + "px"
		document.documentElement.style.setProperty('--font-size-adjust', fontSize);
	})
	query("#font-increase").addEventListener("click", () => {
		const fontSize = parseInt(getComputedStyle(document.documentElement).getPropertyValue('--font-size-adjust')) + 1 + "px"
		document.documentElement.style.setProperty('--font-size-adjust', fontSize);
	})
	// 👁️
	// query("#revealer").addEventListener("click", e => {
	// 	e.preventDefault();
	// 	const i = query("i", query("#revealer"));

	// 	i.classList.toggle("fa-eye");
	// 	i.classList.toggle("fa-eye-slash");

	// 	query("body").classList.toggle("_reveal");
	// });

	// 🌞 -----------------------------------------------
	const prefresDarkScheme = window.matchMedia('(prefers-color-scheme: dark)')
	const darkThemeBtn = query("#dark-theme")
	const i = query("i", darkThemeBtn);

	// console.log(prefresDarkScheme.matches); // true ( dark mode) - false

	function toogleDarkMode(theme, toggle) {
		console.log("toggle");

		i.classList.toggle("fa-moon");
		i.classList.toggle("fa-sun");

		query("body").classList[toggle]("light-theme");

		// localstorage ----
		localStorage.setItem('theme', theme)
	}

	const currentTheme = localStorage.getItem('theme');
	if (currentTheme === 'dark') {
		toogleDarkMode("dark", "remove")
	} else if (currentTheme === 'light') {
		toogleDarkMode("light", "add")
	}


	darkThemeBtn.addEventListener("click", e => {
		e.preventDefault();

		console.log(query("body").classList.contains("light-theme"));

		if (query("body").classList.contains("light-theme")) {
			toogleDarkMode("dark", "remove")
			// console.log("remove");
		} else {
			toogleDarkMode("light", "add")
			// console.log("add");
		}
	});








}
