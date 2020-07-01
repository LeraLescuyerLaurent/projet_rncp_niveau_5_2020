import { h} from 'preact'
import Button from './Button';


export default class HdeuxButton extends Button{

shortcut = 'Ctrl-2'

    icon (){
        return <span>H2</span>
    }

    action (editor) {
        editor.getDoc().replaceSelection('## ' + editor.getDoc().getSelection() + ' ##')
        editor.focus()
    }

}