let buttons = document.querySelectorAll('button');

buttons.forEach(btn =>{
    btn.addEventListener('click', (e)=>{
        let ripple = document.createElement('div');

        btn.appendChild(ripple);

        let d = Math.max(btn.clientWidth, btn.clientHeight);

        ripple.style.width = ripple.style.height = d + 'px';
 
        let x = e.clientX - btn.getBoundingClientRect().left - d / 2;
        let y = e.clientY - btn.getBoundingClientRect().top - d / 2;

        ripple.style.top = y + 'px';
        ripple.style.left = x + 'px';

        ripple.classList.add('rippleEffect');
        
        setTimeout(()=>{
            ripple.remove();
        }, 1000);
    });
});
