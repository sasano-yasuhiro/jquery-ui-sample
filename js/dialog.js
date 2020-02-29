function view_dialog(id, is_close, is_modal)
{
	var opt = {};
	//閉じるボタンの非表示
	if(is_close){
		opt.dialogClass = "no-close";
	}
	//モーダル表示
	opt.modal = is_modal;
	
	$("#"+id).dialog(opt);
}

function view_confirm_dialog(id, is_close, is_modal)
{
	var opt = {};
	var buttons = [{text:"yes"}, {text:"no", click:close_dialog}];
	//閉じるボタンの非表示
	if(is_close){
		opt.dialogClass = "no-close";
	}
	//モーダル表示
	opt.modal = is_modal;
	opt.buttons = buttons;
	
	$("#"+id).dialog(opt);
}

function close_dialog()
{
	$(this).dialog("close");
}

function view_progressbar(dialog_id, bar_id)
{
	var opt = {};
	opt.dialogClass = "no-close";
	opt.modal = true;
	
	bar(bar_id);
	$("#"+dialog_id).dialog(opt);
}

function bar(id)
{
	var opt = {};
	opt.value = 40;
	$( "#"+id ).progressbar(opt);
}

