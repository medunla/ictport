function shareFB(url){
	FB.ui(
	 {
	  method: 'share',
	  href: url,
	}, function(response){
		if (response && response.post_id) {
		} else {
		}
	});
}