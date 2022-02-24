addEventListener("DOMContentLoaded", async(e)=>{
    let peticion = await fetch("https://pruebacofenalco.000webhostapp.com/");
    let texto = await peticion.text();
    document.body.insertAdjacentHTML("afterend", texto);
})