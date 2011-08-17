document.write("<script language=\"JavaScript\" type=\"text/JavaScript\" src=\"../tools/jquery.js\"></script"+">");
document.write("<script language=\"JavaScript\" type=\"text/JavaScript\" src=\"../tools/constructorAjax.js\"></script"+">");

function prev(){
	var idPicture = parseInt($("#idPicture").val()) - 1;
	var counter = $("#idPicture").val()-1;
	
	if (idPicture <= 0)
	{
		alert('Do not exist previous photos');
	} else {
		
		ajax=objetoAjax();
	    ajax.open("GET", "galleryQPrev.php?idPicture="+idPicture, true);
	    ajax.onreadystatechange=function() {
	            if (ajax.readyState==4) {
	            	$("#picture").attr("src",ajax.responseText);
	            }
	    }
	    ajax.send(null);
	    $("#idPicture").val(counter);
	}
}

function next(){
	var idPicture = parseInt($("#idPicture").val()) + 1;
	var counter = parseInt($("#idPicture").val()) + 1;
	
	ajax=objetoAjax();
    ajax.open("GET", "galleryQNext.php?idPicture="+idPicture, true);
    ajax.onreadystatechange=function() {
            if (ajax.readyState==4) {
            	$("#picture").attr("src",ajax.responseText);
            }
    }
    ajax.send(null);
    
    $("#idPicture").val(counter);
}