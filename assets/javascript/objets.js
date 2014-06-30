/* tipoBien es un array con valores dentro de  {local, casa, apartamento} */
/* tipoTransaccion es un array con valores dentro de  {venta, alquiler} */
/* el campo filtroStr se busca por todos los campos strings */
/* el filtro cantidadBanios puede tenener los valores {1,2,3} (siendo 3, 3 o mas)*/
/* el filtro cantidadHabilitaciones puede tenener los valores {1,2,3,4} (siendo 4, 4 o mas)*/
/* el filtro barrios es un array con los ids de los barrios */

CONF = { ip : '/plataforma-inmobiliaria/index.php' };

filterSearch = {
	tipoBien: ["apartamento","casa"], 
	filtroStr : "",
	tipoTransaccion : ["alquiler","venta"],
	cantidadBanios : 4,
	cantidadHabitaciones : 4,
	barrios : [],
	precioDesde : 1600,
	precioHasta : 5000,
}
