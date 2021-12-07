"use strict";

fetch("./images.json")
    .then((response) => response.json())

.then((data) => {
    
    let imageData = data;

    let jsonImage = document.querySelector(".gallery");
  
    imageData.forEach((image) => {
        jsonImage.innerHTML += `
                <div class="column">             
                <img src="${image.url}" alt="${image.alt}">
                <div class="desc"><b>${image.title}</b> - <em>${image.description}</em></div>
                </div>
                `;
    });
    
    const lightbox = document.createElement('div');
    lightbox.id = 'lightbox';
    
    document.body.appendChild(lightbox);
    
    const images = document.querySelectorAll('img');
    images.forEach(image => {
        image.addEventListener('click', e => {
            lightbox.classList.add('active'); 

            const img = document.createElement('img');
            const div = document.createElement('div');
            img.src = image.src;
            div.innerHTML = `<div class="column">
            <div class="desc"><em><b>${image.alt}</b></em></div>
            </div>`;
            while (lightbox.firstChild) {
                lightbox.removeChild(lightbox.firstChild);
            }
            lightbox.appendChild(img);
            lightbox.appendChild(div);
        });
    });

    lightbox.addEventListener('click', e => {
        if (e.target !== e.currentTarget) return;
        lightbox.classList.remove('active');
    });
    
});