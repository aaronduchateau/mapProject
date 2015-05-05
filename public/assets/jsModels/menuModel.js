window.menu = {
	fetchCounties: function(indexTracker, callback){
		$.ajax({
            url:'../listCounties/' + indexTracker,
            dataType:'json',
            success:function(data){
            	var newArray = [];
                $.each(data, function( item, value ) {

                    value.active = parseInt(value.active);
                    newArray.push(value);
                    
                });
                console.log(data);
                console.log(newArray);
                callback(newArray);
            }
        });
	}
};