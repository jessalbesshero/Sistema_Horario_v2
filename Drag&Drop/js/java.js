/*function empezar(e){
	e.dataTransfer.effectAllowed = 'move';
	e.dataTransfer.setData("Data",e.target.getAttribute('id'));
	e.dataTransfer.setDragImage(e.target, 0, 0);
	return true;
}
/*function enter(e){
	return true;
}
/*function over(e){
	var esarrastrable = e.dataTransfer.getData("Data");
	var id = e.target.getAttribute('id');
	if (id == '56970')
		return false;
	if (id == '56982') 
        return false;
	else
		return true;
}
*/
/*function overs(e){
	var esarrastrable = e.dataTransfer.getData("Data");
	var id = e.target.getAttribute('id');
	if (id == 'des1')
		return id;
	if (id == 'des2') 
        return id;
	else
		return true;

}
)
*/
/*function drop(e){
    var esarrastrable = e.dataTransfer.getData("Data");
	e.target.appendChild(document.getElementById(esarrastrable));
	e.stopPropagation();
    return false;
}
			
/*function end(e){
    e.dataTransfer.clearData("Data");
    return true
}		