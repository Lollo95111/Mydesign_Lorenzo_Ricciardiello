
//! SCROLL SEZIONI


// elements
var elements_to_watch = document.querySelectorAll('.watch');
// callback 
var callback = function(items){
  items.forEach((item) => {
    if(item.isIntersecting){
      item.target.classList.add("in-page");
    } else{
      item.target.classList.remove("in-page");
    }
  });
}
// observer
var observer = new IntersectionObserver(callback, { threshold: 0.6 } );
// apply
elements_to_watch.forEach((element) => {
  observer.observe(element); 
});





//! ATTIVA WEB CAM



// let cameraFeed = document.getElementById('cameraFeed');

// navigator.mediaDevices.getUserMedia({video:true})
// .then(stream =>{
//   cameraFeed.srcObject = stream;

// })

// .catch(error =>{
//   console.error('Error camera',error);

// });





//! SCRITTA ANIMATA


//? PRESENTAZIONE

const text = document.querySelector(".sec-text");
  const textLoad = () => {
    setTimeout(() => {
      text.textContent = "Developer";
    }, 0);
    setTimeout(() => {
      text.textContent = "Freelancer";
    }, 4000);
    
  }
  
  textLoad();
  setInterval(textLoad, 4000);



//? LINGUAGGI

  
  const text2 = document.querySelector(".sec-text2");
  const textLoad2 = () => {
    setTimeout(() => {
      text2.textContent = "HTML";
    }, 0);
    setTimeout(() => {
      text2.textContent = "CSS";
    }, 4000);
    setTimeout(() => {
      text2.textContent = "JAVASCRIPT";
    }, 8000);
    setTimeout(() => {
      text2.textContent = "PHP";
    }, 12000);
    
  }
  
  textLoad2();
  setInterval(textLoad2, 12000);








const text3 = document.querySelector(".sec-text3");
  const textLoad3 = () => {
    setTimeout(() => {
      text3.textContent = "è un potente linguaggio";
    }, 0);
    setTimeout(() => {
      text3.textContent = "è un componente fondamentale";
    }, 4000);
    setTimeout(() => {
      text3.textContent = "è progettato per il web";
    }, 8000);
    setTimeout(() => {
      text3.textContent = "";
    }, 12000);
    
  }
  
  textLoad3();
  setInterval(textLoad3, 12000);
