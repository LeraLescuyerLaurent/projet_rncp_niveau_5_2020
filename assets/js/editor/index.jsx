import { h,Component } from "preact";
import CodeMirror from './codemirror'
import Markdown from './Markdown'
import './style.scss';
import BoldButton from "./Buttons/BoldButton";
import ItalicButton from "./Buttons/ItalicButton";
import SpeechButton from "./Buttons/SpeechButton";
import HunButton from "./Buttons/HunButton";
import HdeuxButton from "./Buttons/HdeuxButton"
import HtroisButton from "./Buttons/HtroisButton"
import HquatreButton from "./Buttons/HquatreButton"
import HcinqButton from "./Buttons/HcinqButton"
import ArrayButton from "./Buttons/ArrayButton"
import ListOlButton from "./Buttons/ListOlButton"
import ListUlButton from "./Buttons/ListUlButton"
import ImageButton from "./Buttons/ImageButton"


export default class Editor extends Component {
    
    constructor (props){
        super(props)

        this.state = {
            content: props.value,
            editor: null,
           fullscreen: false,
        }
        // this.setEditor = this.setEditor.bind(this)
    }

   

    render ({name}, {content, editor}){
       
        let classe = 'mdeditor'
        return <div class={classe}>
            <div class="mdeditor__toolbar">
                <div class="mdeditor__toolbarLeft">
                    {editor && [
                        <SpeechButton editor={editor}/>,
                    ]} | 
                    {editor && [
                        <HunButton editor={editor}/>,
                        <HdeuxButton editor={editor}/>,
                        <HtroisButton editor={editor}/>,
                        <HquatreButton editor={editor}/>,
                        <HcinqButton editor={editor}/>
                    ]} | 
                    {editor && [
                        <BoldButton editor={editor}/>,
                        <ItalicButton editor={editor}/> 
                    ]} | 
                    {editor && [
                        <ArrayButton editor={editor}/>,
                    ]} | 
                    {editor && [
                        <ListOlButton editor={editor}/>,
                        <ListUlButton editor={editor}/>
                    ]} |
                    {editor && [
                        <ImageButton editor={editor}/>
                    ]}
                    

                </div>
                <div class="mdeditor__toolbarRight">
                    {editor && [
                    ]}
                </div>
            </div>
            <div class="mdeditor__editor">
                <CodeMirror value={content || 'Votre article ici !!'} onReady={this.setEditor}/>

            </div>
            <div class="mdeditor__preview">
                <Markdown markdown={content || 'Votre article ici !!'}/>
            </div>
            <textarea name={name} style="display:none;">
                { content }
            </textarea>
        </div>
      
    }
        
    setEditor= (editor) => {
        this.setState({editor})
        editor.on('change',e => {
            this.setState({content: e.getDoc().getValue()})
        })
    }
}
// setEditor (editor){
    // console.log(editor)
    // this.setState({editor})
// }