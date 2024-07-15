let numbers1 = [10, 20, 30]
let numbers2 = [50, 60, 70, 80]
let numbersFull = numbers1.concat(numbers2)
console.log(numbers1)
numbers1.push(40)
console.log(numbers1)
//numbers1.pop(20) - this is used to remove the last entry of the array
//console.log(numbers1)
console.log(numbersFull)
numbersFull.splice(1, 1)
console.log(numbersFull)

function removeItem() {
    numbersFull.splice(3, 1)
    numbersFull.push(999)
}

removeItem(numbersFull)

console.log(numbersFull)

function somma(a, b) {
    return a + b
}

let risultato = somma(numbers1[0], numbers2[2])

console.log(risultato)

for (let i = 1; i <= 5; i++) {
    console.log(i)
}