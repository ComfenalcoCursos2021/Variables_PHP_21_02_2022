addEventListener("DOMContentLoaded", async(e)=>{
    let peticion = await fetch("api.php");
    let texto = await peticion.text();
    document.body.insertAdjacentHTML("afterend", texto);
    // let Gravedad = 9.807;
    // console.log(` " ' $ \\ ${Gravedad}`);
})