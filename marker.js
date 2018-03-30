

function initialize() {

	var myLatlng = new google.maps.LatLng(50.850,4.348782);
	var myLatlng2 = new google.maps.LatLng(50.836581,4.308187);
	var myLatlng3 = new google.maps.LatLng(50.816406,4.426518);
	var myLatlng4 = new google.maps.LatLng(50.865782,4.292598);
	var myLatlng5 = new google.maps.LatLng(50.872987,4.309333);
	var myLatlng6 = new google.maps.LatLng(50.896220,4.371880);
	var myLatlng7 = new google.maps.LatLng(50.880858,4.322789);
	var myLatlng8 = new google.maps.LatLng(50.832578,4.388994);
	var myLatlng9 = new google.maps.LatLng(50.873935,4.400942);
	var myLatlng10 = new google.maps.LatLng(50.852201,4.330328);
	var myLatlng11 = new google.maps.LatLng(50.802398,4.340670);
	var myLatlng12 = new google.maps.LatLng(50.826045,4.380205);
	var myLatlng13 = new google.maps.LatLng(50.853772,4.370466);
	var myLatlng14 = new google.maps.LatLng(50.833343,4.366629);
	var myLatlng15 = new google.maps.LatLng(50.848909,4.432088);
	var myLatlng16 = new google.maps.LatLng(50.829981,4.433504);
	var myLatlng17 = new google.maps.LatLng(50.830144,4.340218);



	var mapOptions = {
		zoom: 12,
		center: myLatlng,
		disableDefaultUI: true
	}
	
	var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
	
	
	
	var marker = new google.maps.Marker({
		position: myLatlng,
		map: map,
		title: 'Hello World!'
	});
	// var marker = new google.maps.Marker({
	// 	position: Latlng(50.833,4.3),
	// 	map: map,
	// 	title: 'Hello World!'
	// });
		
	// overlay = new CustomMarker(
	// 	myLatlng, 
	// 	map,
	// 	{
	// 		marker_id: '123'
	// 	}
	// );
	overlay2 = new CustomMarker(
		myLatlng2, 
		map,
		{
			marker_id: '123'
		}
	);
	overlay = new CustomMarker(
		myLatlng3, 
		map,
		{
			marker_id: '123'
		}
	);
	overlay2 = new CustomMarker(
		myLatlng4, 
		map,
		{
			marker_id: '123'
		}
	);
	overlay2 = new CustomMarker(
		myLatlng5, 
		map,
		{
			marker_id: '123'
		}
	);
	overlay = new CustomMarker(
		myLatlng6, 
		map,
		{
			marker_id: '123'
		}
	);
	overlay2 = new CustomMarker(
		myLatlng7, 
		map,
		{
			marker_id: '123'
		}
	);	overlay8 = new CustomMarker(
		myLatlng8, 
		map,
		{
			marker_id: '123'
		}
	);
	overlay = new CustomMarker(
		myLatlng9, 
		map,
		{
			marker_id: '123'
		}
	);
	overlay2 = new CustomMarker(
		myLatlng10, 
		map,
		{
			marker_id: '123'
		}
	);
	overlay2 = new CustomMarker(
		myLatlng11, 
		map,
		{
			marker_id: '123'
		}
	);
	overlay2 = new CustomMarker(
		myLatlng12, 
		map,
		{
			marker_id: '123'
		}
	);
	overlay = new CustomMarker(
		myLatlng13, 
		map,
		{
			marker_id: '123'
		}
	);
	overlay2 = new CustomMarker(
		myLatlng14, 
		map,
		{
			marker_id: '123'
		}
	);	overlay8 = new CustomMarker(
		myLatlng15, 
		map,
		{
			marker_id: '123'
		}
	);
	overlay = new CustomMarker(
		myLatlng16, 
		map,
		{
			marker_id: '123'
		}
	);
	overlay2 = new CustomMarker(
		myLatlng17, 
		map,
		{
			marker_id: '123'
		}
	);
}

google.maps.event.addDomListener(window, 'load', initialize);

