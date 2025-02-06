


const $= el => document.querySelector(el)

//pongo delante de la variable un sinbolo de $
//para identificar que es un elemento de DOM
const $form =$('form')
const $input =$('input')
const $template = $('#message-template')
const $messages = $('ul')
const $container = $('main')
const $button = $('button')

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

