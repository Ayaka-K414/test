document.addEventListener("DOMContentLoaded", function() {
    const textContainer = document.getElementById("textContainer");
    let text = textContainer.innerHTML.replace(/<br\s*\/?>/gi, '\n');
    textContainer.setAttribute('data-text', text);
});