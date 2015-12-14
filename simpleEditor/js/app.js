editor.document.designMode = 'on';


function bold()
{
	editor.document.execCommand('bold', false, null);
}

function italic()
{
	editor.document.execCommand('italic', false, null);
}

function underline()
{
	editor.document.execCommand('underline', false, null);
}

function fontsize()
{
	var size = prompt('Enter a size[1-7]', '');
	editor.document.execCommand('fontsize', false, size);
}

function fontcolor()
{
	var color = prompt('Enter a color', '');
	editor.document.execCommand('forecolor', false, color);
}

function highlight()
{
	editor.document.execCommand('backcolor', false, 'yellow');
}

function link()
{
	var link = prompt('Enter a link', 'http://')
	editor.document.execCommand('createlink', false, link);
}

function formsubmit()
{
	document.getElementById('textarea').value = window.frames['editor'].document.body.innerHTML;
	document.getElementById('editor').submit();
}


function inserthtml(alt)
{
	editor.document.execCommand('InsertHtml',false, alt);
}
