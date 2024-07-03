2-Crie um algoritmo usando javascript, para a sequência de Fibonacci.

console.log(`SequenciaDeFibonacci`)

let numA = 0
let numB = 1
let numC = 0
let Fibonacci = ""

Fibonacci += numA = " " + numB

for(let contador = 1; contador <= 18; contador++){
    numC = numA + numB
    Fibonacci += "" + numC
    numA = numB
    numB = numC
}

console.log(Fibonacci)
