import { query } from "./helpers.js"
// -----
import "./navbar.js";

import axios from "axios";
// console.log("here");
// const { query } = require("./helpers.js")


//==========================jQuery AJAX==========================//
const $ = jQuery

var searchPro = $("#search-properties")

var searchForm = searchPro.find("form")

searchForm.submit(function (e) {
	e.preventDefault()
	// ----
	var data = {
		action: "property_search",
		// name: searchForm.find("#name").val(),
		precio: searchForm.find("#precio").val(),
		cuartos: searchForm.find("#cuartos").val(),
	}

	$.ajax({
		url: ajax_url.ajax_url,
		data: data,
		success: function (response) {
			// console.log(response);
			// ----
			searchPro.find("#results").empty()
			for (let i = 0; i < response.length; i++) {
				let html = `<li id="${response[i].id}"><a href="${response[i].permalink}">${response[i].title}: ${response[i].precio}</a></li>`
				searchPro.find("#results").append(html)
			}
		}
	})
})

/*************************axios*************************/


// const form = query("#search-properties form")

// console.log(form);

// var data = {
// 	action: "property_search",
// 	precio: 9000000,
// 	// command: 'usage-breakdown'
// }

// console.log(ajax_url);


// axios.get(ajax_url.ajax_url, Qs.stringify(data), {
// 	axios.get(ajax_url.ajax_url, { params: data }).then(({ data: response }) => {
// 		console.log(response);
// 		//----------
// 		query("#results").innerHTML = ""
// 		for (let i = 0; i < response.length; i++) {
// 			let html = `<li id="${response[i].id}"><a href="${response[i].permalink}">${response[i].title}: ${response[i].precio}</a></li>`
// 			query("#results").innerHTML += html
// 		}
// 	})
// })




//-------------------map----------------------------------//
function initMap($el) {
	// Find marker elements within map.
	var $markers = $el.find('.marker');

	// Create gerenic map.
	var mapArgs = {
		zoom: $el.data('zoom') || 16,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	var map = new google.maps.Map($el[0], mapArgs);

	// Add markers.
	map.markers = [];
	$markers.each(function () {
		initMarker($(this), map);
	});

	// Center map based on markers.
	centerMap(map);

	// Return map instance.
	return map;
}

function initMarker($marker, map) {

	// Get position from marker.
	var lat = $marker.data('lat');
	var lng = $marker.data('lng');
	var latLng = {
		lat: parseFloat(lat),
		lng: parseFloat(lng)
	};

	// Create marker instance.
	var marker = new google.maps.Marker({
		position: latLng,
		map: map
	});

	// Append to reference for later use.
	map.markers.push(marker);

	// If marker contains HTML, add it to an infoWindow.
	if ($marker.html()) {

		// Create info window.
		var infowindow = new google.maps.InfoWindow({
			content: $marker.html()
		});

		// Show info window when marker is clicked.
		google.maps.event.addListener(marker, 'click', function () {
			infowindow.open(map, marker);
		});
	}
}
// ----------------
function centerMap(map) {
	// Create map boundaries from all map markers.
	var bounds = new google.maps.LatLngBounds();
	map.markers.forEach(function (marker) {
		bounds.extend({
			lat: marker.position.lat(),
			lng: marker.position.lng()
		});
	});

	// Case: Single marker.
	if (map.markers.length == 1) {
		map.setCenter(bounds.getCenter());

		// Case: Multiple markers.
	} else {
		map.fitBounds(bounds);
	}
}

// ----------------
// $(document).ready(function () {
// 	$('.acf-map').each(function () {
// 		var map = initMap($(this));
// 	});
// });


// ----------------------darh theme
// const boton = document.querySelector('#boton');
// const prefresDarkScheme = window.matchMedia('(prefers-color-scheme: dark)')

// boton.addEventListener('click', () => {
// 	console.log('diste click')
// 	console.log(prefresDarkScheme)
// 	if (prefresDarkScheme.matches) {
// 		document.body.classList.toggle('light-theme')
// 	} else {
// 		document.body.classList.toggle('dark-theme')
// 	}
// })



