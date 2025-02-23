// if
let x = 18;
if( x >= 18 ){
    console.log("True");
}

//if - else
let y = 1;
if( y >= 18 ){
    console.log("True");
}else{
    console.log("False");
}

//if-elseif
let z = 18;
if( z > 18 ){
    console.log("Lớn hơn");
}else if (z < 18){
    console.log("Nhỏ hơn");
}else {
    console.log("bằng nhau");
}

//switch-case
let number = 10;
    switch (number) {
        case 10:
            console.log("It is 10");
            break;
    
        default:
            console.log("It is not 10");
            break;
    }

//loops(for)
for (let i = 1; i < 5; i++) {
   console.log(i);
}

//loops(while)
let i = 0;
while (i < 5) {
    console.log(i);
    i++;
} 


//loops(do - while)
let m = 0;
do {
    console.log(m);
    m++;
    
} while (m < 5);

//loop for-of
const arr = ["bird", "wolf", "snake"];
for (const value of arr) {
    console.log(value);
}

