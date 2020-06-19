let inputImgUne = document.querySelector('#post_imagesUne')
  inputImgUne.addEventListener('click', function() {
 
createIframe( image ,'iframe')

});

function createIframe(argument, NameIframe) {
    var ele = document.getElementById("modal");
    ele.classList.remove("modalNone");
    const iframe = document.createElement('iframe');
    iframe.setAttribute('name', NameIframe);
    iframe.setAttribute('id', NameIframe);
    iframe.setAttribute('src', argument);
    iframe.style.width = '95%';
    iframe.style.minHeight = '80vh';
    iframe.style.minHeight = '80vh';
    iframe.style.marginLeft = '2.5%';
    iframe.style.border = "1px solid lightgrey";
    iframe.style.background = "#fff";
    ele.appendChild(iframe)
}