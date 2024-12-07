const CARDS = 10;

// peticiones del api lo poquemones
fetch('https://pokeapi.co/api/v2/ability/1/')
.then(res=>res.json())
.then(data => console.log(data))
