document.addEventListener("DOMContentLoaded", function() {
    const textContainer = document.getElementById("textContainer");
    let text = textContainer.innerHTML.replace(/<br\s*\/?>/gi, '\n');
    textContainer.setAttribute('data-text', text);

    // 擬似要素の内容を動的に生成
    // const style = document.getElementById('dynamic-style');
    // style.innerHTML += `
    //     .outline-shadow-text::before {
    //         content: "${text.replace(/\n/g, '\\A')}";
    //         white-space: pre;
    //         position: absolute;
    //         top: 0;
    //         left: 0;
    //         z-index: -1;
    //         color: black;
    //         -webkit-text-stroke: 2px black;
    //         text-shadow: 2px 2px 5px #00FF00; /* 緑のシャドウ */
    //     }
    // `;
});