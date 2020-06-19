
function send_to_editor(content){
    ed =mceEditorField.document
    ed.execCommand('insertHTML',true,content); 
}
function send_to_imageUne(content){
    ed =document.querySelector('#post_imagesUne')
    ed.setAttribute("value", content);
}
