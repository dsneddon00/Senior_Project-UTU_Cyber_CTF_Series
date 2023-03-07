function write(element){
    const textoArray = element.innerHTML.split('');
    element.innerHTML = ' ';
    textoArray.forEach(function(l, i){   
      
    setTimeout(function(){
        element.innerHTML += l;
    }, 100 * i)

  });
}

write(document.querySelector('.title'));