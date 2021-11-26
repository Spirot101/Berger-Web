"use strict";

fetch("./images.json")
    .then((response) => response.json())

.then((data) => {
    
    let imageData = data;

    // let div = document.createElement("div");
    
    // document.body.append(div);
    
    // const gallery = document.querySelector(".gallery");  
    // gallery.appendChild(div);
  
    // div.classList.add("gallery");
    
    // div.style.width = "100%";

    let jsonImage = document.querySelector(".gallery");
    
    imageData.forEach((image) => {
        jsonImage.innerHTML += `
                <div class="column">             
                <img src="${image.url}" alt="${image.alt}">
                <div class="desc"><b>${image.title}</b> - <em>${image.description}</em></div>
                </div>
                `;
        // return `<img src=${image.url}/>`; 

        // Getting the table element
        var cards = document.getElementsByClassName("card");

        // Looping over tables
        for (var i = 0; i < cards.length; i++) {

            // Get the ith table
            var card = cards[i];

            // Set the id dynamically
            card.setAttribute("id", i + 1);

            // The line below will also give id
            // dynamically to the tables
            //table.id = i+1;
        }

    }); // .join('') tar du bort separatorn mellan elementen, mellan objekten, om man hade haft .map istället för forEach
    
    

    const lightbox = document.createElement('div');
    lightbox.id = 'lightbox';
    document.body.appendChild(lightbox);

    const images = document.querySelectorAll('img');
    images.forEach(image => {
        image.addEventListener('click', e => {
            lightbox.classList.add('active');
            const img = document.createElement('img');
            img.src = image.src;
            while (lightbox.firstChild) {
                lightbox.removeChild(lightbox.firstChild);
            }
            lightbox.appendChild(img);
        });
    });

    lightbox.addEventListener('click', e => {
        if (e.target !== e.currentTarget) return;
        lightbox.classList.remove('active');
    });
    
});