document.addEventListener('DOMContentLoaded', () => {
    const btn = document.querySelector('button')
    
    btn.onclick = sayHello

    function sayHello() {
        const h1 = document.querySelector('h1')
        h1.innerHTML = 'Hello World'
    }
})