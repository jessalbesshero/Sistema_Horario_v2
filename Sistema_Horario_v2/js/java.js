function empezar(e){
	e.dataTransfer.effectAllowed = 'move';
	e.dataTransfer.setData("Data",e.target.getAttribute('id'));
	e.dataTransfer.setDragImage(e.target, 0, 0);
	return true;
}
function enter(e){
	return true;
}
function over(e){
	var esarrastrable = e.dataTransfer.getData("Data");
	var id = e.target.getAttribute('id');
	return false;
}
function overs(e){
	var esarrastrable = e.dataTransfer.getData("Data");
	var id = e.target.getAttribute('id');
	return false;
}

function drop(e){
    var esarrastrable = e.dataTransfer.getData("Data");
	e.target.appendChild(document.getElementById(esarrastrable));
	e.stopPropagation();
    return false;
}
			
function end(e){
    e.dataTransfer.clearData("Data");
    return true;
}	