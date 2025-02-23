
async function fetchProduct() {
    try {
        const reponse = await fetch('https://fakestoreapiserver.reactbd.com/photos');
        const data = await reponse.json();
        console.log(data);
    } catch (error) {
        console.error("Error fetching data:",error);
    }
}
fetchProduct();


async function testA() {
    return 'test2';
}

testA().then((result) => {
    console.log(result);
    
})