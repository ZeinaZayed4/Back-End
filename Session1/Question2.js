// 1
var b = 1;
function outer() {
	var b = 2;
	function inner() {
		b++;
		var b = 3;
		console.log(b);
	}
	inner();
}
outer();
// Output: b = 3

// 2
for (let i = 0; i < 5; i++) {
	setTimeout(function () {
		console.log(i);
	}, i * 1000);
}
// 0 1 2 3 4

// 3
let arr = ["foo", "bar"];
arr.length = 0;
arr.push("baz"); // arr = ['baz']
console.log(arr);
// Output: arr = 'baz'

// 4
function func() {
	for (let key in arguments) {
		console.log(arguments[key]);
	}
}
func(1, "Hello", true);
// Output: 1 Hello true

// 5
let car = {
	carName: "Bmw",
	carPrice: 1000000,
};

console.log(car instanceof Object);
console.log(Object.entries(car));
// Output: true [‘carName’, ‘Bmw’] [‘carPrice’, 1000000]
