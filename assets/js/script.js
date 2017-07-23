$(document).ready(function() {
    var info = 123;
    $('#file-list .item').each(function(i, el){
	    var regex = /(\d+)/g;
	    var title = $(el).attr('title').substr(0, 35).split('.')[0];
	    var title = title.split(regex);
	    var info = getinfo(title).results[0];
	    
	    if (info) {
		    $(el).find('.atvImg-layer').attr('data-img', 'https://image.tmdb.org/t/p/w300_and_h450_bestv2' + info.poster_path + '');
	    }
		if (info) {
			$(el).attr('title', info.title);
		}
	    
    });
	
	function getinfo(name){
		var url = "https://api.themoviedb.org/3/search/movie?year="+name[1]+"&include_adult=false&page=1&query="+name[0]+"&language=ru-RU&api_key=e0362e4ac921398daaffe5b48c93ffd6";
		console.log(url);
		return $.ajax({
			async: false,
			cache: false,
			timeout: 30000,
			crossDomain: true,
			url: url,
			method: "GET",
			headers: {},
			data: "{}",
			success : function(data) {
                
            }
		}).responseJSON;
		
	}
    
    atvImg();
    
});