motc = document.querySelector('span.motcle').innerHTML
document.querySelectorAll('span.nom, span.email').forEach(els => {
    let text = els.innerHTML
    text = text.replace(motc, "<span class='found'>"+motc+"</span>")
    els.innerHTML = text
})