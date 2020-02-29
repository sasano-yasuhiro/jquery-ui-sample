function view_sortable_vertical_menu(id)
{
	var opt = {};
	$("#" + id).menu(opt);
	$("#" + id).sortable(opt);
	$("#" + id).disableSelection(opt);
}

