//searchable.js

$(document).ready(function () {
	//auto complete selected event 
	


	// City List Action
    $cityID = 0;       
    $("#cityListDropDown").click(function(){
        $cityID = $("#cityListDropDown").val();
    })	


	function log(message) {
		$("<a href= '#'>").text("message").prependTo("#log");
		$("#log").scrollTop(0);
	}

	$("#searchBox").autocomplete({
		source: function source(request, response) {
			$key = $("#searchBox").val();
			if ($key.length != 0) {

				$.ajax({
					url: $url+"/searchResult",
					type: "GET",
					headers: {
				      // 'X-CSRF-Token': $('meta[name="_token"]').attr('content')
				      'X-CSRF-Token': $('#csrf_token').val()
				    },
					data: {
						// _token: "{{ csrf_token() }}",
						searchText: $key,
						cityID: $cityID,
					},
					success: function success(data) {
						console.log("received:",data.list);

						if (data.received) {
							// $("#searchResultSuccess").text(data.list.length+' results found').show();
							
							if (data.list.length == 0) {
								$("#searchResult").text('Opps!! No Result Found Please try other keyword.').show();
								$("#searchBox").autocomplete("close");
								setTimeout(() => {
									$("#searchResult").hide();
								}, 3000);
							}else{
								response(data.list);
							}
						}else{
							alert("Somthing went wrong!!! Try Again...")
						}
					}

				});
			} else {
				// $("#searchResultSuccess").hide();
				$("#searchResult").text('Type something to search.').show();
				$("#searchBox").autocomplete("close");
				setTimeout(() => {
					$("#searchResult").hide();
				}, 3000);
			}
		},
		minLength: 0,
		autoFocus: true,
		delay: 0,
		select: function select(event, ui) {
			log("Selected: " + ui.item.value + " -> " + ui.item.label);
			console.log("Selected: " + ui.item.value + " -> " + ui.item.label);
			window.open($url+'/hire/search/'+ui.item.value);
		}
	});
});
