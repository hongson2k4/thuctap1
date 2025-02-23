const demoPromise = new Promise((resolve, reject) => {
    const success = true;
    if(success){
        resolve("thành công");
    } else {
        reject("thất bại");
    }
});

demoPromise
    .then((result) => {
        console.log(result);
    })
    .catch((error) => {
        console.error(error);
        
    })