let iconMenu = document.getElementById('icoMenu');//pegar o elemento pelo id
let sidebar = document.getElementById('sidebar');
let mainContent = document.getElementById('mainContent');


//ver o tamanho da tela
let w = window.innerWidth;//pega a largura da janela do navegador


//evento para sepre atualizar a largura da tela que está
window.addEventListener("resize", () => {
   w = window.innerWidth;
    console.log(w);
})



function responsiveSidebar(){//evento ao clicar no icone
    if(w <= 800){//se o display tiver menor ou igual a 800px para mobile 
       // alert('Olá Mundo');//aparece o alerta para testar 


    }else{//se não tiver menor ou igual a 800px é desktop
       // alert('Maior q 800');
   if(sidebar.style.display == 'none'){//se o menu estiver escondido
    sidebar.style.display = 'block';//ao clicar aparece o menu
    mainContent.style.width = 'calc(100% - 200px)';//deixa o conteudo com 100% - a sidebar
   }else{//se o menu  não estiver escondido
    sidebar.style.display = 'none';//ao clicar esconde o menu
    mainContent.style.width = '100%';//deixa o conteudo com 100%
   }

    }
}