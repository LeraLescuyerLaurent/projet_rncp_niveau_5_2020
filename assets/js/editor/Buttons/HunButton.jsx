import { h} from 'preact'
import Button from './Button';


export default class HunButton extends Button{

shortcut = 'Ctrl-1'

    icon (){
        return   <span>H1</span>
    }

    action (editor) {
        editor.getDoc().replaceSelection('# ' + editor.getDoc().getSelection() + ' #')
        editor.focus()
    }

}