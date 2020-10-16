function exibir(categoria){
   // alert(categoria);
   
   let elementos = document.getElementsByClassName('box_produto');
   console.log(elementos);
   for(let i=0; i<elementos.length; i++){
       console.log(elementos[i].id)
       if(categoria == elementos[i].id)
         elementos[i].style = "display:inline-block";
       else
        elementos[i].style = "display:none";

   }
};

const exibirTodos = () => {
  let elementos = document.getElementsByClassName('box_produto');  
  
  for(let i = 0; i<elementos.length; i++){           
       elementos[i].style = "display:inline-block";
      
  }
};

let destaque = (imagem) => {
  console.log(imagem);

  if(imagem.style.width == '120px'){
      imagem.style.width = '300px';
  }else{
    imagem.style.width = '120px';
  }
}