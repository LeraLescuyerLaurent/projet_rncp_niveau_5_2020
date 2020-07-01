import { h} from 'preact'
import Button from './Button';


export default class HquatreButton extends Button{

shortcut = 'Ctrl-4'

    icon (){
        return <span>H4</span>
    }

    action (editor) {
        editor.getDoc().replaceSelection('#### ' + editor.getDoc().getSelection() + ' ####')
        editor.focus()
    }

}