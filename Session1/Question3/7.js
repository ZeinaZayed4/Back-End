function reverse(arr) {
	const reversed = [];
	for (let i = arr.length - 1; i >= 0; i--) {
		reversed.push(arr[i]);
	}
	return reversed;
}

let arr = [1, 2, 3, 4];
let reversed = reverse(arr);
console.log(reversed);
