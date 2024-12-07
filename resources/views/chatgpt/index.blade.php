<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="chat/style.css"> 
    <title>CHATGPT</title>
</head>

<style>
   
</style>
<!-- src="chat/chatjs.js" -->
<script  type="module" >

import { CreateMLCEngine } from "https://esm.run/@mlc-ai/web-llm"




const $= el => document.querySelector(el)

//pongo delante de la variable un sinbolo de $
//para identificar que es un elemento de DOM
const $form =$('form')
const $input =$('input')
const $template = $('#message-template')
const $messages = $('ul')
const $container = $('main')
const $button = $('button')
const $info =$('small')


const SELECTED_MODEL= 'gemma-2b-it-q4f32_1-MLC'

const engine = await CreateMLCEngine(
    SELECTED_MODEL,
    {
        initProgressCallBack:(info)=>{
            console.log('initProgressCallBack', info)
            $info.textContent= `${info.text}%`
        }
    }
)

$form.addEventListener('submit', (event) =>{
    event.preventDefault()
    const messageText = $input.value.trim()

    if(messageText !== ''){
        //añadimos el mensaje en el DOM
        $input.value = ''

    }

    addMessage(messageText, 'user')
    $button.setAttribute('disabled', true)

    setTimeout(()=>{
        addMessage('hola, ¿como estas?', 'bot')
        $button.removeAtribute('disabled')
    }, 2000)
    
})

function addMessage(text,sender){
    //Clonar el Tempate
    const clonedTemplate = $template.content.cloneNode(true)
    const $newMessage =clonedTemplate.querySelector('.message')

     const $who = $newMessage.querySelector('span') 
     const $text =$newMessage.querySelector('p')

     $text.textContent = text
     $who.textContent = sender === 'bot' ? 'GPT' : 'Tu'
     $newMessage.classList.add(sender)

     //actualizar el scroll para ir bajando
     $messages.appendChild($newMessage)
     
     $container.scrollTop =$container.scrollHeight
}



</script>

<body>
    <main>
        <ul>
            <li class="message bot">
                <span>GPT</span>
                <p> esta es la respuesta del Bot</p>
            </li>

            <li class="message user">
                <span>Tu</span>
                <p> Esta es la respuesta del Usuario</p>
            </li>

            <li class="message user">
                <span>Tu</span>
                <p> Este es la respuesta del usuario y es una respuesta muy larga para ver que no se rompe nada</>
            </li>

        </ul>

    </main>
    <form >
    <input placeholder="Escribe tu mensaje aqui...">
    <button>enviar</button>
    </form>

    <small>&nbsp</small>

   <template id ="message-template">
    <li class="message">
        <span></span>
        <p></p>
    </li>
    </template>

    
</body>

</html>