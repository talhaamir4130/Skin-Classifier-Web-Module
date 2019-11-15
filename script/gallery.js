function approve(name)
{
    $.ajax({
        type: 'POST',
        url: 'includes/run_approve_images.php',
        data: 'name='+name,
    });

    location.reload();
    alert("Approved");

}


function not_approve(name)
{
    $.ajax({
        type: 'POST',
        url: 'includes/run_not_approve_images.php',
        data: 'name='+name,
    });

    location.reload();
    alert("Not Approved");

}

function remove_image(name)
{
    $.ajax({
        type: 'POST',
        url: 'includes/run_remove_images.php',
        data: 'name='+name,
    });

    location.reload();
    alert("Image removed");
}


function onLoad()
{

	$.ajax({
        type: 'POST',
        url: 'includes/get_latest_images.php',
        //dataType: 'json',
        success: function(data){
        			//console.log(data);	
					var x = document.getElementsByClassName("title");
					var img_status = document.getElementsByClassName("approved_image");
					var obj = JSON.parse(data, function(name, value) {
						return value;
					});
					for (var i = 0; i < 10; i++) {
						x[i].innerHTML = obj[i][0].name;
						img_status[i].innerHTML = obj[i][0].approval;
					}
               }
    });

}
