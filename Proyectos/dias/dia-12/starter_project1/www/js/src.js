'use stric'
const names1 = ['Pedro','Juan','Lolo','Eustaquio'];
const ages1 = [12,20,30,8];
muser=unirArrays(names1,ages1);
console.log(muser)
userF=calcularMayorEdad(muser);
console.log(userF)
function unirArrays(names,ages) {
const users=[];
let IsYoung1
return names.map((userName, index) =>{
if (ages[index] >= 18){
IsYoung1 = false;
}else {
IsYoung1 = true;
}
    return {name : userName , age : ages[index],  IsYoung : IsYoung1};
}
);
}

function calcularMayorEdad(users1){
const userE = [];
let nombre;
let edad;
for (const iterator of users1) {
if (iterator.age > 18){
    userE.push({ ...iterator , IsAdulto : true  })
}else{
        userE.push({...iterator, IsAdulto : false  })
}
}
return userE
}