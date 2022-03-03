// https://comfenalcocursos2022.000webhostapp.com/Variables_PHP_21_02_2022/api.php
addEventListener("DOMContentLoaded", async(e)=>{
    let peticion = await fetch("https://comfenalcocursos2022.000webhostapp.com/Variables_PHP_21_02_2022/api.php");
    let texto = await peticion.text();
    document.body.insertAdjacentHTML("afterend", texto);
    // let Gravedad = 9.807;
    // console.log(` " ' $ \\ ${Gravedad}`);
})