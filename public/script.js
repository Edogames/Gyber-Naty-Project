function getMousePose(event) {
    if(document.getElementById('card')){
        const card = document.getElementById('card');
        const {x, y, height, width} = card.getBoundingClientRect();
    
    
        var mouseX = event.clientX;
        var mouseY = event.clientY;

        const shadow = {x: x - mouseX * 0.5,y: y - mouseY / 3};
        card.style.boxShadow = `${shadow.x}px ${shadow.y}px 1000px rgba(204, 255, 0, 0.1)`;
    }
};
