// Question 1
let car = {
	carName: "Mercedes-Benz Cls",
	getCarName: () => {
		console.log(this.carName);
	},
};
car.getCarName();
// Output: undefined

console.log(number);
greeting();
function greeting() {
	alert("Hello World !");
}
var number = 50;
// Output: undefined + the alret message

console.log(Number("1") - 1); // 0
console.log(true + false > false + 1); // false
console.log(5 ** 2); // 25

for (let i = 1; i <= 5; i++) {}
console.log(i);
// Output: undefined
for (const i = 1; i <= 5; i++) {
	console.log(i);
}
// Output: 1 + error

for (var i = 1; i <= 5; i++) {}
console.log(i); // i = 6

setTimeout(() => {
	setTimeout(() => {
		setTimeout(() => {
			console.log(1);
		}, 2000);
		setTimeout(() => {
			console.log(2);
		});
		console.log(3);
	}, 1000);
	setTimeout(() => {
		console.log(4);
	}, 4000);
	console.log(5);
}, 0);
console.log(6);
// Output: 6 5 3 2 1 4
