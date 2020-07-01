import { h} from 'preact'
import Button from './Button';


export default class HtroisButton extends Button{

shortcut = 'Ctrl-3'

    icon (){
        return <span>H3</span>
    }

    action (editor) {
        editor.getDoc().replaceSelection('### ' + editor.getDoc().getSelection() + ' ###')
        editor.focus()
    }

}