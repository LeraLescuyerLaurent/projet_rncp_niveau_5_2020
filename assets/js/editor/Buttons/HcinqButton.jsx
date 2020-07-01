import { h} from 'preact'
import Button from './Button';


export default class HcinqButton extends Button{

shortcut = 'Ctrl-5'

    icon (){
        return <span>H5</span>
    }

    action (editor) {
        editor.getDoc().replaceSelection('##### ' + editor.getDoc().getSelection() + ' #####')
        editor.focus()
    }

}