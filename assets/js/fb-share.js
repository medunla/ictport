function shareFB(url){
	FB.ui(
	 {
	  method: 'share',
	  href: url,
	  description: "sdsdsd"
	}, function(response){
		if (response && response.post_id) {
			alert('Post was published.');
		} else {
			alert('Post was not published.');
		}
	});
}