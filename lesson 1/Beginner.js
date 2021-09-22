let port = `https://t-odolist.herokuapp.com/`
let patch = `todo`
let dataKu = ''

//---------> if expression
// 1
// if (patch === 'todo') {
//     patch = 'todo/see/dindoy'
// }
// 2
// patch === 'todo' ? patch = 'todo/see/dindoy' : patch = patch

//---------> Popup
// function openForm() {
//     document.getElementById("popupForm").style.display = "block";
// }
// function closeForm() {
//     document.getElementById("popupForm").style.display = "none";
// }

//---------> Undefined, empty, null
// let dataUndefined;
// let dataEmpty = "";
// let dataNull = null
// if (!dataUndefined) {
//     console.log("String is undefined")
// }
// if (!dataEmpty) {
//     console.log("String is Empty")
// }
// if (!dataNull) {
//     console.log("String is null")
// }

//---------> Switch Case
// switch with break
// switch (patch) {
//     case 'todolist':
//         patch = 'todo/see/teddi';
//     case 'todo':
//         patch = 'todo/see/dindoy'
//     default:
//         break;
// } 
// switch without break
// switch (patch) {
//     case 'todolist':
//         patch = 'todo/see/teddi';
//     case 'todo':
//         patch = 'todo/see/dindoy'
//     default:
//         patch = 'todo'
// }

//---------> Typeof
// typeof "John"                 // Returns "string"
// typeof 3.14                   // Returns "number"
// typeof NaN                    // Returns "number"
// typeof false                  // Returns "boolean"
// typeof [1,2,3,4]              // Returns "object"
// typeof {name:'John', age:34}  // Returns "object"
// typeof new Date()             // Returns "object"
// typeof function () {}         // Returns "function"
// typeof myCar                  // Returns "undefined" *
// typeof null                   // Returns "object"

//---------> operator in
// dataKu = {name:"Teddi", age:"19", leaguage:"Indonesia"}
// for (let i in dataKu) {
//     console.log(dataKu[i])
// }

//---------> ternary operator
// let da = 1
// let ba = 2
// ba > da ? true : false

//---------> Nullish Coalesting Operator
// const nullValue = null
// const emptyText = ""
// const someNumber = 43
// const ValA = nullValue ?? "default for A"  // "default for A"
// const ValB = emptyText ?? "default for b"  // "" (as the empty string is not null or undefined)
// const ValC = someNumber ?? 0               // "43"

//---------> Falsy and Truthy
// let x 
// x = 1
// x = '1'
// x = [1]
// console.log(1 == '1')
// console.log(1 == [1])
// console.log('1' == [1])

//---------> Non Bollean
// isNaN(123) //false
// isNaN(-1.23) //false
// isNaN(5-2) //false
// isNaN(0) //false
// isNaN('123') //false
// isNaN('Hello') //true
// isNaN('2005/12/12') //true
// isNaN('') //false
// isNaN(true) //false
// isNaN(undefined) //true
// isNaN('NaN') //true
// isNaN(NaN) //true
// isNaN(0 / 0) //true
// isNaN(null) //false

//---------> For Loop
// let array = [1,2,3,4,5,6]
// for (let i = 0; i < array.length; i++) {
//     const element = array[i];
//     console.log(element)
// }

//---------> While Loop 
// let arr = 0
// while (arr < 10) {
//     arr++
// } 
// console.log(arr)

//---------> Do While Loop
// let arr = 0
// do {
//     console.log(arr)
//     arr++
// } 
// while(arr <= 20)

//---------> While
// let arr = ["House", "Farmer", "Kichen", "Police"]
// let i = 0
// let text = ""
// while (arr[i]) {
//     text += arr[i]
//     i++
//     console.log(text)
// }

//---------> break and Continue
// for (let i = 0; i <= 10; i++) {
//     if (i === 3) {break}
//     console.log(i)
// } 
// for (let i = 0; i <= 10; i++) {
//     if (i === 3) {continue}
//     console.log(i)
// } 

//---- javascript label
// let arr = ["House", "Farmer", "Kichen", "Police"]
// let text = ''
// list: {
//     text += arr[0] 
//     text += arr[1]
//     break list
//     text += arr[2]
//     text += arr[3]
// }
// console.log(text)

//---------> for in
// let arr = ["House", "Farmer", "Kichen", "Police"]
// let text = ''
// for (let i in arr) {
//     text += arr[i]
// }
// console.log(text)

//---------> for of
// let arr1 = ["House", "Farmer", "Kichen", "Police"]
// let arr2 = "House"
// let text1 = ""
// let text2 = ""
// for (let i of arr1) {
//     text1 += i
// }
// for (let i of arr2) {
//     text2 += i
// }
// console.log(text2)

//---------> With Statement
//---------> Function
// function myFunction(params) {
//     console.log(params)
// }
// myFunction('Teddi')
// function twoFunction(paramsOne, paramsTwo) {
//     return paramsOne * paramsTwo
// }
// console.log(twoFunction(1,2))
// function triFunction(...params) {
//     console.log(params)
// }
// triFunction('teddi', 1, ['wadidaw'])


//---------> Function Paramatere
// function kamu(parameter1, parameter2, parameter3) {
//     // code to be exiecuted
// }

//---------> Function return value
// function kamu(parameter1, parameter2, parameter3) {
//     return parameter1 + parameter2
// }

//---------> Function Optional or default Parameter 
// function kamu(parameter1 = 'teddi', parameter2 = 'dindoy', parameter3) {
//     return parameter1 + parameter2
// }

//---------> Function rest parameter
// function triFunction(...params) {
//     console.log(params)
// }
// triFunction('teddi', 1, ['wadidaw'])

//---------> Function anonymous
// 1 execute it immediately before declaration
// let show = function () {
//     console.log('Anonymous function');
// };
// show();
// 2 execute it immediately after declaration
// (function () {
//     console.log("Hy Teddi")
// })()

//---------> Function Scope
// function teddi() {
//     var name = 'dindoy'
// }

//---------> Function Recursive
// link : https://www.javascripttutorial.net/javascript-recursive-function/
// function coutDown(params) {
//     console.log(params)

//     let newParams = params - 1
//     if (newParams > 0) {
//         coutDown(newParams)
//     }
// }
// coutDown(10)

//---------> Function Generator
// var generator = Object.getPrototypeOf(function* () { }).constructor
// var g = new generator('a', 'yield a * 2')
// var interation = g(10)
// console.log(interation.next().value)

//---------> Arrow Function
// ES5
// const func = function (name) {
//     return `Hello ${name}`
// }
// console.log(func("Teddi"))
// ES 6
// const funca = (name) => `Hello ${name}`
// console.log(funca("Teddi"))

//---------> closure
// function kamu(x) {
//     function kami(y) {
//         return x + y
//     }
//     return kami
// }
// let kamu1 = kamu(5)
// let kamu2 = kamu(10)
// console.log(kamu1(2)) // 7
// console.log(kamu2(2)) // 12

//---------> Object Method
// const person = {
//     name: "Teddi",
//     lasName: "Designer",
//     id: 12,
//     fullName: function () {
//         return this.name + " " + this.lasName
//     }
// }
// console.log(person.fullName())

//---------> kata kunci this
// const person = {
//     name: "Teddi",
//     lasName: "Designer",
//     id: 12,
// }
// person.fullName = function () {
//     return (`${this.name} ${this.lasName}`).toUpperCase()
// }
// console.log(`My Name is : ${person.fullName()}`)

//---------> Arrow function in Object
// var _this = "Teddi"
// var arrowObject = {
//     name: 'arrowObject',
//     printName: function () {
//         console.log(_this)
//     }
// }
// arrowObject.printName()

//---------> Getter dan Setter
// link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Functions/set
// link: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Functions/get
// set
// const language = {
//     data: [],
//     set name(name) {
//         this.data.push(name)
//     }
// }
// language.name = "Bhs Indonesia"
// language.name = "Bhs Inggris"
// console.log(language.data)
// // get
// const country = {
//     data: ['a', 'b', 'c'],
//     get name() {
//         if (this.data.length === 0) {
//             return undefined
//         }
//         return this.data[this.data.length - 1]
//     }
// }
// console.log(country.name)

//---------> Masalah Variable var
// link : https://dosenit.com/javascript/variabel-di-javascript

//---------> Destructuring
// link : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Destructuring_assignment
// let a, b, test;
// [a, b] = [10, 20]
// console.log(a);
// console.log(b);
// [a, b, ...test] = [10, 20, 30, 40, 50]
// console.log(test)

//---------> Strict mode
// link : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Strict_mode
// debugger;
// get data
axios
  .get(`${port}${patch}`)
  .then(function (res) {
    if (dataKu === '') {
      dataKu = res?.data
    }
  })